$(function () {
	loadMedicalConsultationPendingTable()
	loadMedicalConsultationApprovedTable()

	$('#updateAppointmentStatusModal').on('submit', function (e) {
		e.preventDefault() // prevent page refresh

		// pass data to API for updating of student's info
		editAppointmentStatus($('#edit_health_appointment_id').val())
	})
})

// Load datatables
loadMedicalConsultationPendingTable = () => {
	const dt = $('#pending_medical_consultation_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/pup_staff/view_pending_approved_appointment/Medical',
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (data) => {
					let filterData = data.data.filter((item) => {
						return item.consultation_status == 'Pending'
					})
					return filterData
				},
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_user) {
							const studentName =
								data.health_appointment_assigned_to_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-warning">${consultation_status}</span>`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						return `${consultation_date}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewMedicalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewMedicalModal"><i class="ri-eye-fill fs-5"></i></button>
				                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" onclick = "editAppointmentDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#updateAppointmentStatusModal" ><i class="ri-edit-2-fill fs-5"></i></button>
				            </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

loadMedicalConsultationApprovedTable = () => {
	const dt = $('#approved_medical_consultation_table')

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'omsss/pup_staff/view_pending_approved_appointment/Medical',
				type: 'GET',
				headers: AJAX_HEADERS,
				dataSrc: (data) => {
					let filterData = data.data.filter((item) => {
						return item.consultation_status == 'Approved'
					})
					return filterData
				},
			},
			columns: [
				// Case Control No.
				{
					data: null,
					render: (data) => {
						const caseNo = data.case_control_number
						return `${caseNo}`
					},
				},

				// Student
				{
					data: null,
					render: (data) => {
						if (data.health_appointment_assigned_to_user) {
							const studentName =
								data.health_appointment_assigned_to_user.user_profiles[0].full_name
							return `${studentName}`
						}
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						const consultation_status = data.consultation_status
						return `<span class="badge rounded-pill bg-success">${consultation_status}</span>`
					},
				},

				// Schedule
				{
					data: null,
					render: (data) => {
						const consultation_date = moment(data.consultation_date).format('LL')
						return `${consultation_date}`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewMedicalDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#viewMedicalModal"><i class="ri-eye-fill fs-5"></i></button>
				                <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" onclick = "editAppointmentDetails('${data.health_appointment_id}')" data-bs-toggle="modal" data-bs-target="#updateAppointmentStatusModal" ><i class="ri-edit-2-fill fs-5"></i></button>
				            </div>`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

// View Medical Consultation details
viewMedicalDetails = (health_appointment_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `omsss/pup_staff/view_specific_appointment/${health_appointment_id}`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			console.log(result)
			const userData = result.data
			if (result.data.health_appointment_assigned_to_physician) {
				const userProfileData = data.health_appointment_assigned_to_physician.user_profiles[0]
			}
			const userProfileData = null

			$('#view_case_details').html(userData.case_control_number)
			$('#view_consultation_type').html(userData.consultation_type)
			$('#view_consultation_reason').html(userData.consultation_reason)
			$('#view_health_physcian').html(userProfileData != null ? userProfileData.full_name : 'N/A')
			$('#view_symptoms_date').html(moment(userData.symptoms_date).utc().format('LL'))
			$('#view_consultation_date').html(moment(userData.consultation_date).format('LL'))
			const consultation_status_data = userData.consultation_status
			let consultation_value
			if (consultation_status_data == 'Pending') {
				consultation_value = `<span class="badge rounded-pill bg-warning">Pending</span>`
			} else if (consultation_status_data == 'Approved') {
				consultation_value = `<span class="badge rounded-pill bg-success">Approved</span>`
			} else if (consultation_status_data == 'Cancelled by Staff') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Staff</span>`
			} else if (consultation_status_data == 'Cancelled by Student') {
				consultation_value = `<span class="badge rounded-pill bg-info">Cancelled by Student</span>`
			}
			$('#view_status').html(consultation_value)
		},
	})
}

getAppointment = (health_appointment_id) => {
	$.ajax({
		url: apiURL + `omsss/pup_staff/view_specific_appointment/${health_appointment_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result) {
				// Get data from result
				const data = result.data
				console.log(data)
				// $('#edit_image').val(data.user_profiles[0].image)
				$('#edit_health_appointment_id').val(data.health_appointment_id)
			}
		},
	}).fail(() => console.error('There was an error in retrieving medical request data'))
}

editAppointmentDetails = (health_appointment_id) => getAppointment(health_appointment_id)
// Edit Student Details
editAppointmentStatus = (health_appointment_id) => {
	if ($('#updateAppointmentStatusForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#updateAppointmentStatusForm')[0])
		for (var pair of form.entries()) {
			console.log(pair[0] + ', ' + pair[1])
		}
		data = {
			consultation_status: form.get('consultation_status'),
			remarks: form.get('remarks'),
		}
		console.log(data)
		$.ajax({
			url: apiURL + `omsss/pup_staff/status/${health_appointment_id}`,
			type: 'PUT',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				console.log(result)
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully updated a appointment status!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						// Hide the update student details modal
						$('#updateAppointmentStatusModal').modal('hide')

						// Reload Student Datatable
						loadMedicalRequestTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while updating a appointment status. Please try again.</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-danger w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		})
	}
}
