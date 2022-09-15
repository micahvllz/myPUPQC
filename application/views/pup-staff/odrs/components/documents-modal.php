<!-- ADD DOCUMENT MODAL -->
<div id="addDocumentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="ri-file-list-3-fill me-1"></i>
          Add Document
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-5">
        <form id="addDocumentForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="document_name" class="form-label">Document Name <span class="text-danger">*</span></label>
            <input type="text" id="document_name" name="document_name" class="form-control" placeholder="Enter the name of the Document" required>
            <div class="invalid-feedback">
              Please enter a Document Name.
            </div>
          </div>
          <div class="mb-3">
            <label for="document_type" class="form-label">Document Type <span class="text-danger">*</span></label>
            <select id="document_type" name="document_type" class="form-control js-example-basic-hide-search" required>
              <option value="" selected disabled>Please select a Document Type</option>
              <option value="Transcript of Records">Transcript of Records</option>
              <option value="Certifications">Certifications</option>
              <option value="Unclaimed">Unclaimed</option>
              <option value="CAV">CAV</option>
            </select>
            <div class="invalid-feedback">
              Please select a Document Type.
            </div>
          </div>
          <div class="mb-3">
            <label for="document_details" class="form-label">Document Details <span class="text-danger">*</span></label>
            <textarea id="document_details" name="document_details" class="form-control" rows="3" placeholder="Enter additional details about the Document" required></textarea>
            <div class="invalid-feedback">
              Please enter the Document Details.
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- VIEW DOCUMENT MODAL -->
<div class="modal fade" id="viewDocumentModal" tabindex="-1" role="dialog" aria-labelledby="viewDocumentTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0" style="background: url('<?= base_url() ?>public/images/chat-bg-pattern.png') rgb(255, 255, 255);">
      <div class="modal-body mt-4">
        <h5 class="fs-20 mb-3 text-center badge badge-outline-info text-wrap">Informative Copy of Grades / Certified Copy of Grades</h5>
        <div class="d-flex justify-content-center">
          <p class="fs-15 mb-3">
            (For transfer to other school or scholarship)
          </p>
        </div>
        <div class="d-flex align-items-center">
          <h6 class="d-inline my-3 me-3 fs-13">Document Type: </h6>
          <span class="text-uppercase badge badge-soft-success"><i class="me-2 mdi mdi-certificate fs-13"></i>Certifications</span>
        </div>
        <h6 class="d-inline my-3 me-2 fs-13">Requirements: </h6>
        <div class="my-2 ms-3 d-flex align-items-center">
          <p>Photocopy of Student ID (Back to Back), Documentary Stamp, and Letter stating the purpose of the request</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-animation waves-effect waves-light fs-13" data-text="Close" data-bs-dismiss="modal"><span>Close</span></button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- UPDATE DOCUMENT MODAL -->
<div id="updateDocumentModal" class="modal fade" tabindex="-1" aria-hidden="true" style="display: none">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 overflow-hidden">
      <div class="modal-header">
        <h5 class="modal-title">
          <i class="ri-file-edit-fill me-1"></i>
          Update Document
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5 py-4">
        <form id="editDocumentForm" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="edit_document_name" class="form-label">Document Name <span class="text-danger">*</span></label>
            <input type="text" id="edit_document_name" name="edit_document_name" class="form-control" placeholder="Enter the name of the Document" value="Informative Copy of Grades / Certified Copy of Grades" required>
            <div class="invalid-feedback">
              Please enter a Document Name.
            </div>
          </div>
          <div class="mb-3">
            <label for="edit_document_type" class="form-label">Document Type <span class="text-danger">*</span></label>
            <select id="edit_document_type" name="edit_document_type" class="form-control js-example-basic-hide-search" required>
              <option value="" disabled>Please select a Document Type</option>
              <option value="Transcript of Records">Transcript of Records</option>
              <option value="Certifications" selected>Certifications</option>
              <option value="Unclaimed">Unclaimed</option>
              <option value="CAV">CAV</option>
            </select>
            <div class="invalid-feedback">
              Please select a Document Type.
            </div>
          </div>
          <div class="mb-3">
            <label for="edit_document_details" class="form-label">Document Details <span class="text-danger">*</span></label>
            <textarea id="edit_document_details" name="edit_document_details" class="form-control" rows="3" placeholder="Enter additional details about the Document" required>(For transfer to other school or scholarship)</textarea>
            <div class="invalid-feedback">
              Please enter the Document Details.
            </div>
          </div>
          <div class="mb-3">
            <label for="edit_document_requirements" class="form-label">Document Requirements <span class="text-danger">*</span></label>
            <textarea id="edit_document_requirements" name="edit_document_requirements" class="form-control" rows="3" placeholder="Enter the requirements needed for the request of this document" required>Photocopy of Student ID (Back to Back), Documentary Stamp, and Letter stating the purpose of the request</textarea>
            <div class="invalid-feedback">
              Please enter the Document Requirements.
            </div>
          </div>
          <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->