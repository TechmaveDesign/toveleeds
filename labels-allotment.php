<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Label's Assign</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Label's Assign</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Assign Sticker
                </a>
            </div>

            <div class="mb-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTagModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Assign Tag
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
                    aria-selected="false" id="stickerTab">Assigned Sticker
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true" id="tagTab">
                   Assigned Tag 
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
                                <th>Inspectors</th>
                                <th>Region</th>
                                <th>Sticker Type</th>
                                <th>Assign Qty</th>
                                <th>Assign Range</th>
                                <th>Last Date & Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                        <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>New Delhi</td>
                                <td>Small</td>
                                <td>800</td>
                                <td>S.Stk2500000 - S.Stk2500099</td>
                                <td>10/02/2024 15:15</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                        <span class="badge-label">Collected</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="John Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">John Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Mumbai</td>
                                <td>Large</td>
                                <td>900</td>
                                <td>L.Stk2500100 - L.Stk2500199</td>
                                <td>11/02/2024 16:20</td>
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                        <span class="badge-label">Assigned</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Emma Watson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Emma Watson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Bangalore</td>
                                <td>Small</td>
                                <td>850</td>
                                <td>S.Stk2500200 - S.Stk2500299</td>
                                <td>12/02/2024 17:30</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                        <span class="badge-label">Collected</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Michael Scott">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Michael Scott</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Chennai</td>
                                <td>Large</td>
                                <td>950</td>
                                <td>L.Stk2500300 - L.Stk2500399</td>
                                <td>13/02/2024 18:40</td>
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                        <span class="badge-label">Assigned</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
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
                                <th>Inspectors</th>
                                <th>Region</th>
                                <th>Tag No.</th>
                                <th>Assign Qty</th>
                                <th>Assign Range</th>
                                <th>Last Date & Time</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            

                        <tr>
                                <td>1</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>New Delhi</td>
                                <td>039207</td>
                                <td>1000</td>
                                <td>039207 - 040206</td>
                                <td>10/02/2024 15:15</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                        <span class="badge-label">Collected</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditTagModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="John Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">John Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Mumbai</td>
                                <td>041207</td>
                                <td>1200</td>
                                <td>041207 - 042406</td>
                                <td>11/02/2024 16:30</td>
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                        <span class="badge-label">Assigned</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditTagModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Emma Watson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Emma Watson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Bangalore</td>
                                <td>042507</td>
                                <td>1100</td>
                                <td>042507 - 043606</td>
                                <td>12/02/2024 17:45</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                        <span class="badge-label">Collected</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditTagModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
                                        </a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Michael Scott">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Michael Scott</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Chennai</td>
                                <td>043807</td>
                                <td>1300</td>
                                <td>043807 - 045106</td>
                                <td>13/02/2024 18:50</td>
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                        <span class="badge-label">Assigned</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="label-useage.php">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="uiw:eye-o"></iconify-icon></span></span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="#" data-bs-toggle="modal" data-bs-target="#EditTagModal">
                                            <span class="icon"><span class="feather-icon"><iconify-icon icon="cuida:edit-outline"></iconify-icon></span></span>
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


<!-- Allot Sticker Modal -->
<div class="modal fade custombottm_modalStyle" id="addStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md"> 
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Assign Sticker</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iconImageSection">
                            <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label text-muted">Inspector</label>
                                <select class="select2">
                                    <option disabled selected>Select Inspector</option>
                                    <option>Stephan Peralt</option>
                                    <option>Emma Johnson</option>
                                    <option>Amit Patel</option>
                                    <option>Sophia Lee</option>
                                    <option>Michael Carter</option>
                                    <option>James Smith</option>
                                    <option>Emily Davis</option>
                                    <option>Anna Taylor</option>
                                    <option>John Walker</option>
                                    <option>Jessica Brown</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Sticker Type</label>
                                <select class="form-control largeinp_height select2">
                                    <option value="">Select Type</option>
                                    <option value="Small">Small</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input type="text" placeholder="Enter Qty." class="form-control">
                            </div>
                        </div>
                                               
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assign Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control ">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assign End Range:</label>
                                <input type="text" placeholder="Auto Generate  End Range" class="form-control ">
                            </div>
                        </div>
                    

                    
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Assign
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>

<!-- Allot Sticker Modal -->
<div class="modal fade custombottm_modalStyle" id="EditStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md"> 
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Assign Sticker</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iconImageSection">
                            <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label text-muted">Inspector</label>
                                <select class="select2">
                                    <option disabled selected>Select Inspector</option>
                                    <option>Stephan Peralt</option>
                                    <option>Emma Johnson</option>
                                    <option>Amit Patel</option>
                                    <option>Sophia Lee</option>
                                    <option>Michael Carter</option>
                                    <option>James Smith</option>
                                    <option>Emily Davis</option>
                                    <option>Anna Taylor</option>
                                    <option>John Walker</option>
                                    <option>Jessica Brown</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Sticker Type</label>
                                <select class="form-control largeinp_height select2">
                                    <option value="">Select Type</option>
                                    <option value="Small">Small</option>
                                    <option value="Large">Large</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input type="text" placeholder="Enter Qty." class="form-control">
                            </div>
                        </div>
                                               
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assign Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control ">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assign End Range:</label>
                                <input type="text" placeholder="Auto Generate  End Range" class="form-control ">
                            </div>
                        </div>
                    

                    
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Update
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>

<!-- Allot Tag Modal -->
<div class="modal fade custombottm_modalStyle" id="addTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tag Assign</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iconImageSection">
                            <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label text-muted">Inspector</label>
                                <select class="select2">
                                    <option disabled selected>Select Inspector</option>
                                    <option>Stephan Peralt</option>
                                    <option>Emma Johnson</option>
                                    <option>Amit Patel</option>
                                    <option>Sophia Lee</option>
                                    <option>Michael Carter</option>
                                    <option>James Smith</option>
                                    <option>Emily Davis</option>
                                    <option>Anna Taylor</option>
                                    <option>John Walker</option>
                                    <option>Jessica Brown</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Tag No.</label>
                                <select class="form-control largeinp_height select2">
                                <option value="">Select a Tag ID</option>
                                <option value="TA-123">039207</option>
                                <option value="TB-345">042507</option>
                                <option value="TC-112">041207</option>
                                <option value="TD-233">043807</option>
                            </select>
                            </div>
                        </div>
                            
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input type="text" placeholder="Enter Qty" class="form-control largeinp_height">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control largeinp_height">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">End Range:</label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control largeinp_height">
                            </div>
                        </div>

                    
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Assign
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>

<!-- Allot Tag Modal -->
<div class="modal fade custombottm_modalStyle" id="EditTagModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Tag Assign</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="iconImageSection">
                            <img src="assets\aditya_assests\sticker_icon.png" alt="tttt">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location (Region)</label>
                                <div class="input-blocks">
                                    <select class="select2">
                                        <option disabled selected>Select Region</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Banglore</option>
                                        <option>Pune</option>
                                        <option>Chennai</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label text-muted">Inspector</label>
                                <select class="select2">
                                    <option disabled selected>Select Inspector</option>
                                    <option>Stephan Peralt</option>
                                    <option>Emma Johnson</option>
                                    <option>Amit Patel</option>
                                    <option>Sophia Lee</option>
                                    <option>Michael Carter</option>
                                    <option>James Smith</option>
                                    <option>Emily Davis</option>
                                    <option>Anna Taylor</option>
                                    <option>John Walker</option>
                                    <option>Jessica Brown</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Tag No.</label>
                                <select class="form-control largeinp_height select2">
                                <option value="">Select a Tag ID</option>
                                <option value="TA-123">039207</option>
                                <option value="TB-345">042507</option>
                                <option value="TC-112">041207</option>
                                <option value="TD-233">043807</option>
                            </select>
                            </div>
                        </div>
                            
                      
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Quantity</label>
                                <input type="text" placeholder="Enter Qty" class="form-control largeinp_height">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Start Range:</label>
                                <input type="text" placeholder="Auto Generate Starting Range" class="form-control largeinp_height">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">End Range:</label>
                                <input type="text" placeholder="Auto Generate End Range" class="form-control largeinp_height">
                            </div>
                        </div>

                    
                </div>
            </div>
            <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Assign
                    </button>
                </div>
                </div>
        </div>
    </div>
</div>
<!-- /Add template -->

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

<!-- Edit Pop-up Modal  -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Job Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <div class="mb-3">
                        <label for="jobId" class="form-label">ID</label>
                        <input type="text" class="form-control" id="jobId" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="totalRange" class="form-label">Total Range</label>
                        <input type="text" class="form-control" id="totalRange">
                    </div>
                    <div class="mb-3">
                        <label for="region" class="form-label">Region</label>
                        <input type="text" class="form-control" id="region">
                    </div>
                    <div class="mb-3">
                        <label for="allotedRange" class="form-label">Alloted Range</label>
                        <input type="text" class="form-control" id="allotedRange">
                    </div>
                    <div class="mb-3">
                        <label for="dateTime" class="form-label">Date Time</label>
                        <input type="datetime-local" class="form-control" id="dateTime">
                    </div>
                    <button type="submit" class="btn btn-primary">Save & Update Changes</button>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php") ?>

<!-- filepond for videos uploader -->
<link href="assets/customplugins/file-uploader/filepond.css" rel="stylesheet">
<link href="assets/customplugins/file-uploader/filepond-plugin-media-preview.min.css" rel="stylesheet">
<script src="assets/customplugins/file-uploader/filepond.js"></script>
<script src="assets/customplugins/file-uploader/filepond-plugin-file-validate-type.js"></script>
<script src="assets/customplugins/file-uploader/filepond-plugin-media-preview.min.js"></script>
<script src="assets/customplugins/file-uploader/lg-video.min.js"></script>
<!-- filepond for images uploader -->
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>

<!-- filepond video js -->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginMediaPreview
    );
    // Create a FilePond instance
    const inputElement = document.querySelector('#videoInput');
    const pond = FilePond.create(inputElement, {
        acceptedFileTypes: ['video/*'],
        fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {
            resolve(type);
        })
    });
    // Optional: FilePond configuration
    FilePond.setOptions({
        allowMultiple: true,
        maxFiles: 10
    });
    // Handle video previews
    pond.on('addfile', (error, file) => {
        if (error) {
            console.error('Error adding file', error);
            return;
        }
    });
</script>
<!-- filepond video js end -->

<!-- filepod image uploader start-->
<script>
    // Register the plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginFileValidateType
    );
    // Turn all file input elements into ponds
    FilePond.create(document.querySelector('#imageInput'), {
        acceptedFileTypes: ['image/*', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'], // Accept images, PDF, DOC, and DOCX
        labelIdle: 'Drag & Drop your images or <span class="filepond--label-action">Browse</span>',
        server: {
            // configure your server endpoints here
            url: '/upload',
            process: {
                url: './process',
                method: 'POST',
                headers: {
                    'x-customheader': 'Hello World'
                },
                withCredentials: false,
                onload: (response) => response.key,
                onerror: (response) => response.data,
                ondata: (formData) => {
                    formData.append('Hello', 'World');
                    return formData;
                }
            },
            revert: './revert'
        }
    });
</script>
<!-- filepod image uploader end-->

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