<!-- Add Student modal -->
<div id="addStudentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Enroll Student Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="enrollStudentForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <div class="text-center">
              <div class="profile-user position-relative d-inline-block mx-auto mb-2">
                <img src="<?= base_url() ?>public/images/users/user-dummy-img.jpg" class="rounded-circle avatar-lg img-thumbnail user-profile-image" alt="user-profile-image" />
                <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                  <input id="profile-img-file-input" type="file" class="profile-img-file-input" accept="image/png, image/jpeg" />
                  <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                    <span class="avatar-title rounded-circle bg-light text-body">
                      <i class="ri-camera-fill"></i>
                    </span>
                  </label>
                </div>
              </div>
              <h6>Profile Picture</h6>
            </div>
          </div>
          <div class="mb-3">
            <label for="user_no" class="form-label">Student Number <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="user_no" name="user_no" placeholder="Enter Student Number" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required />
          </div>
          <div class="mb-3">
            <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
          </div>
          <div class="mb-3">
            <label for="middle_name" class="form-label">Middle Name</label>
            <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
          </div>
          <div class="mb-3">
            <label for="last_name" class="form-label">Last Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" required>
          </div>
          <div class="mb-3">
            <label for="extension_name" class="form-label">Extension Name</label>
            <input type="text" class="form-control" id="extension_name" name="extension_name" placeholder="Enter Extension Name" />
          </div>
          <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required />
          </div>
          <div class="mb-3">
            <label for="birth_date" class="form-label">Birth Date <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="birth_date" name="birth_date" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Pick a Birth Date" required>
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
            <select class="form-select mb-3" id="gender" name="gender" required>
              <option selected disabled value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="house_street" class="form-label">Street <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="house_street" name="house_street" placeholder="Enter Street Number or Street Name" required>
          </div>
          <div class="mb-3">
            <label for="barangay" class="form-label">Barangay <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="barangay" name="barangay" placeholder="Enter Barangay" required>
          </div>
          <div class="mb-3">
            <label for="municipality" class="form-label">Municipality <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="municipality" name="municipality" placeholder="Enter Municipality" required>
          </div>
          <div class="mb-3">
            <label for="province" class="form-label">Province <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="province" name="province" placeholder="Enter Province" required>
          </div>
          <div class="mb-3">
            <label for="region" class="form-label">Region <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="region" name="region" placeholder="Enter Region" required>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Enroll Student</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- View Student modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">
          Student Information
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div data-simplebar class="mx-n3">
          <ul class="list list-group list-group-flush mb-0">
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Student No</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">2020-18543-CM-0</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Name</a></h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">Mary Rucker</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Email Address</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">eykalutinx2@iskolarngbayan.pup.edu.ph</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Program</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">BPAPFM</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Year and Section</h5>
                </div>
                <div class="col-8">
                  <div class="d-flex fs-13 fw-medium">2-2</div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1">Date Enrolled</h5>
                </div>
                <div class="col-8">
                  <div class="fw-medium">
                    <span>14 Aug, 2021</span>
                  </div>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Enrollment Status</a></h5>
                </div>
                <div class="col-8">
                  <span class="fs-12 badge rounded-pill bg-success">Enrolled</span>
                </div>
              </div>
            </li>
            <!-- end list item -->
            <li class="list-group-item">
              <div class="d-flex align-items-center">
                <div class="col-4">
                  <h5 class="fs-13 mb-1 fw-medium"><a href="#" class="link text-dark">Status</a></h5>
                </div>
                <div class="col-8">
                  <span class="fs-12 badge rounded-pill bg-success">Active</span>
                </div>
              </div>
            </li>
            <!-- end list item -->
          </ul>
          <!-- end ul list -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Edit Student modal -->
<div id="editStudentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header p-3">
        <h4 class="card-title mb-0">Edit Student Form</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="studentNo" class="form-label">Student No.</label>
            <input type="text" class="form-control" id="studentNo" placeholder="Enter student no" />
          </div>
          <div class="mb-3">
            <label for="fullName" class="form-label">Name</label>
            <input type="text" class="form-control" id="fullName" placeholder="Enter name" />
          </div>
          <div class="mb-3">
            <label for="emailInput" class="form-label">Email Address</label>
            <div class="input-group">
              <input type="email" class="form-control" id="emailInput" placeholder="Enter email" />
              <span class="input-group-text" id="basic-addon2">@iskolarngbayan.pup.edu.ph</span>
            </div>
          </div>
          <div class="mb-3">
            <label for="program" class="form-label">Program</label>
            <select class="form-select mb-3" name="state">
              <option value="BBTLEDHE">BBTLEDHE</option>
              <option value="BSBAHRM">BSBAHRM</option>
              <option value="BSBA-MM">BSBA-MM</option>
              <option value="BSENTREP">BSENTREP</option>
              <option value="BSIT">BSIT</option>
              <option value="BPAPFM">BPAPFM</option>
              <option value="DOMTMOM">DOMTMOM</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="yearSection" class="form-label">Year and Section</label>
            <input type="text" class="form-control" id="yearSection" placeholder="Enter year and section" />
          </div>
          <div class="mb-3">
            <label for="enrolledDate" class="form-label">Date Enrolled</label>
            <input id="enrolledDate" type="text" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Pick date">
          </div>
          <div class="mb-3">
            <label for="enrollStatus" class="form-label">Enrollment Status</label>
            <select class="form-select mb-3" id="enrollStatus">
              <option selected>Select enrollment status</option>
              <option value="1">Enrolled</option>
              <option value="0">Not Enrolled</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="studentStatus" class="form-label">Status</label>
            <select class="form-select mb-3" id="studentStatus">
              <option selected>Select status</option>
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
          </div>
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Edit Student</button>
          </div>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Delete Student modal -->
<div class="modal fade zoomIn" id="deleteStudentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
      </div>
      <div class="modal-body p-5 text-center">
        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
        <div class="mt-4 text-center">
          <h4 class="fs-semibold">You are about to delete a student ?</h4>
          <p class="text-muted fs-14 mb-4 pt-1">Deleting your student will remove all of your information from our database.</p>
          <div class="hstack gap-2 justify-content-center remove">
            <button class="btn btn-link link-success fw-medium text-decoration-none" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>