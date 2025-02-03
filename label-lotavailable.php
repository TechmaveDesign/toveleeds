<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Available Label's</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Available Label's</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Lot Sticker
                </a>
            </div>

            <div class="mb-2 me-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTagModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Lot Tag
                </a>
            </div>

            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <div class="card tablemaincard_nopaddingleftright">
        <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false" id="stickerTab"> Sticker List
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true" id="tagTab">
                    Tag List
                   </a>

            </nav>

        </div>
        <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Sticker Lot No.</th>
                            <th>Range</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>AEF - 0129</td>
                            <td>001 - 299</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Available
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editStickerModal" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>BEC - 1011</td>
                            <td>1000 - 1199</td>
                            <td>25 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Available
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>FBC - 1230</td>
                            <td>2000 - 3000</td>
                            <td>22 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Available
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>GHI - 2211</td>
                            <td>4001 - 4299</td>
                            <td>20 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Available
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>

                    </tbody>

                </table>
                </div>
            </div>

            <div class="tab-pane text-muted" id="nav-in-pending" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Tag Lot No.</th>
                            <th>Range</th>
                            <th>Created On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>TA - 123</td>
                            <td>199 - 299</td>
                            <td>20 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Available
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>TB - 345</td>
                            <td>200 - 499</td>
                            <td>25 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Available
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>TC - 112</td>
                            <td>401 - 799</td>
                            <td>22 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Available
                                                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>TD - 223</td>
                            <td>001 - 999</td>
                            <td>11 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Available
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                        data-bs-target="#editTagModal" data-placement="top" title="See Details"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover delete-btn" 
                                        data-id="" title="Delete" href="#">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Sticker Available modal start -->
<div class="modal fade custombottm_modalStyle" id="addStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Available Sticker</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                    <label class="form-label">Sticker ID:<div class="requiredLabel">*</div></label>
                                    <select class="form-control largeinp_height select2">
                                        <option value="">Select a Sticker ID</option>
                                        <option value="AEB-0129">AEB - 0129</option>
                                        <option value="BEC-1011">BEC - 1011</option>
                                        <option value="FBC-1230">FBC - 1230</option>
                                        <option value="GHI-2211">GHI - 2211</option>

                                    </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Ready From:</label>
                                <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Ready To:</label>
                                <input type="text" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                            </div>

                            <!-- Dropdown for Status -->
                            <div class="form-group">
                                <label class="form-label">Status:<div class="requiredLabel">*</div></label>
                                <select class="form-control largeinp_height select2">
                                    <option value="" selected >Choose Status</option>
                                    <option value="Not Available">Not Available</option>
                                    <option value="Available">Available</option>
                                </select>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
        </div>
    </div>
</div>

<!-- Tag Modal -->
<div class="modal fade custombottm_modalStyle" id="addTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Available Tag</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                            </div>
                        </div>
                        <div class="col-md-12">

                            <div class="form-group">
                                    <label class="form-label">Tag ID:<div class="requiredLabel">*</div></label>
                                    <select class="form-control largeinp_height select2">
                                        <option value="">Select a Tag ID</option>
                                        <option value="TA-123">TA - 123</option>
                                        <option value="TB-345">TB - 345</option>
                                        <option value="TC-112">TC - 112</option>
                                        <option value="TD-233">TD - 223</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                            </div>

                            <div class="form-group">
                                <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                            </div>

                            <!-- Dropdown for Status -->
                            <div class="form-group">
                                <label class="form-label">Status:<div class="requiredLabel">*</div></label>
                                <select class="form-control largeinp_height select2">
                                    <option value="" selected >Choose Status</option>
                                    <option value="Not Available">Not Available</option>
                                    <option value="Available">Available</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
        </div>
    </div>
</div>

<!-- Edit Available Sticker Modal-->
<div class="modal fade custombottm_modalStyle" id="editStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Sticker</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <img src="assets/aditya_assests/sticker_icon.png" alt="Sticker Icon">
                            </div>
                        </div>

                        <input type="hidden" id="stickerIdHidden" name="sticker_id">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Sticker ID:<div class="requiredLabel">*</div></label>
                                <select id="editStickerID" name="sticker_id" class="form-control largeinp_height select2">
                                    <option value="">Select a Sticker ID</option>
                                    <option value="AEB-0129">AEB - 0129</option>
                                    <option value="BEC-1011">BEC - 1011</option>
                                    <option value="FBC-1230">FBC - 1230</option>
                                    <option value="GHI-2211">GHI - 2211</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" id="editStartRange" name="start_range" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                            </div>

                            <div class="form-group">
                                <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" id="editEndRange" name="end_range" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status:<div class="requiredLabel">*</div></label>
                                <select id="editStatus" name="status" class="form-control largeinp_height select2">
                                    <option value="">Choose Status</option>
                                    <option value="Available">Available</option>
                                    <option value="Not Available">Not Available</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end me-3 mb-3">
                    <button type="submit" class="btn btn-primary">
                        Save & Update
                    </button>
                </div>
        </div>
    </div>
</div>

<!-- Edit Tag Available Modal -->
<div class="modal fade custombottm_modalStyle" id="editTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Tag</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <img src="assets/aditya_assests/sticker_icon.png" alt="Sticker Icon">
                            </div>
                        </div>

                        <input type="hidden" id="tagIdHidden" name="tag_id">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Tag ID:<div class="requiredLabel">*</div></label>
                                <select id="editTagID" name="tag_id" class="form-control largeinp_height select2">
                                    <option value="">Select a Tag ID</option>
                                    <option value="TA-123">TA - 0123</option>
                                    <option value="TB-345">TB - 345</option>
                                    <option value="TC-112">TC - 112</option>
                                    <option value="TD-223">TD - 223</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" id="editStartRange" name="start_range" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                            </div>

                            <div class="form-group">
                                <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                                <input type="text" id="editEndRange" name="end_range" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status:<div class="requiredLabel">*</div></label>
                                <select id="editStatus" name="status" class="form-control largeinp_height select2">
                                    <option value="">Choose Status</option>
                                    <option value="Not Dispatched">Not Dispatched</option>
                                    <option value="Dispatched for Printing">Dispatched for Printing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end me-3 mb-3">
                    <button type="submit" class="btn btn-primary">
                        Save & Update
                    </button>
                </div>
        </div>
    </div>
</div>


<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                    <i class="ti ti-trash-x fs-36"></i>
                </span>
                <h4 class="mb-1">Confirm Delete</h4>
                <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="users.html" class="btn btn-danger">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->


<?php include("footer.php") ?>
<!-- button submit loader js start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                const form = button.closest('form');
                const inputField = form.querySelector(
                'input[type="text"]'); // Select the input field
                const errorMessage = form.querySelector(
                '.error-message'); // Check for existing error message
                if (!inputField.value.trim()) {
                    // Add a red border to highlight the empty input
                    inputField.classList.add('input-error');
                    inputField.focus();
                    // Show error message
                    if (!errorMessage) {
                        const errorElement = document.createElement('div');
                        errorElement.className = 'error-message';
                        errorElement.textContent = 'Please enter Template Title';
                        inputField.insertAdjacentElement('afterend', errorElement);
                    }
                    // Remove error when user starts typing
                    inputField.addEventListener('input', function() {
                        if (inputField.value.trim()) {
                            inputField.classList.remove('input-error');
                            const existingError = form.querySelector('.error-message');
                            if (existingError) {
                                existingError.remove();
                            }
                        }
                    });
                    return;
                }
                // Show loading dots
                button.classList.add('btn-loading');
                button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
                // Simulate a delay before redirecting to the action page
                setTimeout(function() {
                    // Remove loading dots
                    button.classList.remove('btn-loading');
                    const loadingDots = button.querySelector('.loading-dots');
                    if (loadingDots) {
                        loadingDots.remove();
                    }
                    // Redirect to the form's action page
                    window.location.href = form.getAttribute('action');
                }, 2000); // Delay for 2 seconds (2000ms)
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stickerBtn = document.getElementById("addStickerBtn");
        const tagBtn = document.getElementById("addTagBtn");
        const stickerTab = document.getElementById("stickerTab");
        const tagTab = document.getElementById("tagTab");

        function toggleButtons(event) {
            if (event.target === stickerTab) {
                stickerBtn.style.display = "block";
                tagBtn.style.display = "none";
            } else if (event.target === tagTab) {
                stickerBtn.style.display = "none";
                tagBtn.style.display = "block";
            }
        }

        stickerTab.addEventListener("click", toggleButtons);
        tagTab.addEventListener("click", toggleButtons);
    });
</script>
<!-- button submit loader js end -->

<!-- Delete SweetAlert2 -->
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".delete-btn").forEach(button => {
        button.addEventListener("click", function (e) {
            e.preventDefault();
            
            let stickerId = this.getAttribute("data-id"); 

            Swal.fire({
                title: "Are you sure?",
                text: "This action cannot be undone!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#d33",
                cancelButtonColor: "#6c757d",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    // Perform delete action here (e.g., AJAX request)
                    Swal.fire("Deleted!", "The sticker has been deleted.", "success");
                }
            });
        });
    });
});
</script>