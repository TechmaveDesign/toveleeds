<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">New Delhi Label's Allotment</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Label's Allotment</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" id="addStickerBtn">
                <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal" aria-controls="offcanvasRight"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Sticker
                </a> -->

                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#createstickerorder" aria-controls="offcanvasRight" id="addStickerBtn"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Order Sticker
                </a>
            </div>

            <div class="mb-2 me-2" id="addTagBtn" style="display:none;">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#createtagorder" aria-controls="offcanvasRight" id="addTagBtn"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Order Tag
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
                                <th>Branch Head</th>
                                <th>Sticker ID</th>
                                <th>Total Range</th>
                                <th>Alloted Range</th>
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
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td> AEF - 0129 </td>
                                <td> 001 - 999 </td>
                                <td>001 - 500</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span
                                            class="badge-label">Dispatched</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editAllotmentModal" data-placement="top" title="Edit">
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
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-32.jpg" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Chelsia Ford</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>BEC - 1011</td>
                                <td>1000 - 1999</td>
                                <td>1000 - 1599</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span
                                            class="badge-label">Dispatched</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editAllotmentModal" data-placement="top" title="Edit">
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
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-32.jpg" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Monika Gellar</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>CEA - 2020</td>
                                <td>2000 - 2999</td>
                                <td>2000 - 2499</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Delivered</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editAllotmentModal" data-placement="top" title="Edit">
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
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Rick Ross</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>GHI - 2211</td>
                                <td>3000 - 5999</td>
                                <td>3000 - 3999</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                            class="badge-label">Received</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editAllotmentModal" data-placement="top" title="Edit">
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
                                <th>Branch Head</th>
                                <th>Tag ID</th>
                                <th>Total Range</th>
                                <th>Alloted Range</th>
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
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Rick Ross</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>TAG - 1111</td>
                                <td>001 - 399</td>
                                <td>001 - 399</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                            class="badge-label">Received</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editTagAllotmentModal" data-placement="top" title="Edit">
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
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-32.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>TSC - 202</td>
                                <td>499 - 699</td>
                                <td>499 - 699</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span
                                            class="badge-label">Dispatched</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editTagAllotmentModal" data-placement="top" title="Edit">
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
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid" alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>TC - 1120</td>
                                <td>800 - 1000</td>
                                <td> 800- 1000</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Delivered</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editTagAllotmentModal" data-placement="top" title="Edit">
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
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-19.jpg" class="img-fluid" alt="John Smith">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">John Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>TAG - 4321</td>
                                <td>499 - 899</td>
                                <td>499 - 899</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Delivered</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="offcanvas"
                                            data-bs-target="#editTagAllotmentModal" data-placement="top" title="Edit">
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


<!-- Edit Allotment modal start -->
<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="editAllotmentModal"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Edit Sticker Allotment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <div class="offcanvas-body">

        <div class="offcanvasForm_wrap">

            <div class="modal-body pb-0">
                <div class="row">

                    <div class="col-md-6">
                        <label class="form-label">Sticker ID:<div class="requiredLabel">*</div></label>
                        <select class="form-control largeinp_height select2">
                            <option value="">Select a Sticker ID</option>
                            <option value="AEF - 0129">AEF - 0129</option>
                            <option value="BEC - 1011">BEC - 1011</option>
                            <option value="CEA - 2020">CEA - 2020</option>
                            <option value="GHI - 2211">GHI - 2211</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Select Branch Head</label>
                            <select name="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="1">Chelsia Ford</option>
                                <option value="2">Elena Cruz</option>
                                <option value="3">Monika Gellar</option>
                                <option value="4">Rick Ross</option>
                                <option value="5">Michael Jordan</option>
                                <option value="6">Olivia Smith</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Location (Region)</label>
                            <div class="input-blocks">
                                <iconify-icon icon="ion:location-outline" class="info-img"></iconify-icon>
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
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Ending Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                placeholder="Select Date" readonly="readonly">
                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                            </iconify-icon>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select name="" id="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="Received">Received</option>
                                <option value="Delievered">Delievered</option>
                                <option value="Dispatched">Dispatched</option>

                            </select>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-label">
                                <label>Additional Notes</label>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="canvasFooterContainer flexmodalfooter">
        <div class="savedraft_button">
            <!-- <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div> -->
        </div>

        <div class="modalbetween_actions">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save & Update</button>
        </div>
    </div>
</div>

<!-- Edit Tag Allotment Modal start -->
<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="editTagAllotmentModal"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Edit Tag Allotment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <div class="offcanvas-body">

        <div class="offcanvasForm_wrap">

            <div class="modal-body pb-0">
                <div class="row">

                    <div class="col-md-6">
                        <label class="form-label">Tag ID:<div class="requiredLabel">*</div></label>
                        <select class="form-control largeinp_height select2">
                            <option value="">Select a Tag ID</option>
                            <option value="AEB-0129">TAG - 1111</option>
                            <option value="BEC-1011">BEC - 1011</option>
                            <option value="TC - 1120">TC - 1120</option>
                            <option value="TAG - 4321">TAG - 4321</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Select Branch Head</label>
                            <select name="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="1">Chelsia Ford</option>
                                <option value="2">Elena Cruz</option>
                                <option value="3">Monika Gellar</option>
                                <option value="4">Rick Ross</option>
                                <option value="5">Michael Jordan</option>
                                <option value="6">Olivia Smith</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Location (Region)</label>
                            <div class="input-blocks">
                                <iconify-icon icon="ion:location-outline" class="info-img"></iconify-icon>
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
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Ending Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                placeholder="Select Date" readonly="readonly">
                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                            </iconify-icon>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select name="" id="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="Received">Received</option>
                                <option value="Delievered">Delievered</option>
                                <option value="Dispatched">Dispatched</option>

                            </select>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-label">
                                <label>Additional Notes</label>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="canvasFooterContainer flexmodalfooter">
        <div class="savedraft_button">
            <!-- <div class="form-check form-check-md">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label" for="gridCheck">Save Draft </label>
    </div> -->
        </div>

        <div class="modalbetween_actions">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save & Update</button>
        </div>
    </div>
    <div class="canvasFooterContainer flexmodalfooter">
        <div class="savedraft_button">
            <!-- <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div> -->

        </div>

        <div class="modalbetween_actions">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </div>
</div>
<!-- Add Sticker modal start -->
<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="createstickerorder"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Request Sticker</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <div class="offcanvas-body">

        <div class="offcanvasForm_wrap">

            <div class="modal-body pb-0">
                <div class="row">

                    <div class="col-md-6">
                        <label class="form-label">Sticker ID:<div class="requiredLabel">*</div></label>
                        <select class="form-control largeinp_height select2">
                            <option value="">Select a Sticker ID</option>
                            <option value="AEF - 0129">AEF - 0129</option>
                            <option value="BEC - 1011">BEC - 1011</option>
                            <option value="CEA - 2020">CEA - 2020</option>
                            <option value="GHI - 2211">GHI - 2211</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Select Manager</label>
                            <select name="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="1">Danial Craig</option>
                                <option value="2">Emily Blunt</option>
                                <option value="3">John Doe</option>
                                <option value="4">Sophia Turner</option>
                                <option value="5">Michael Jordan</option>
                                <option value="6">Olivia Smith</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                placeholder="Select Date" readonly="readonly">
                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                            </iconify-icon>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Time <span class="text-danger"> *</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control timepicker">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The End Range" class="form-control largeinp_height">
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

                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-label">
                                <label>Additional Notes</label>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="canvasFooterContainer flexmodalfooter">
        <div class="savedraft_button">
            <!-- <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div> -->

        </div>

        <div class="modalbetween_actions">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
        </div>
    </div>
</div>

<!-- Add Tag modal start -->
<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="createtagorder"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Request Sticker</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <div class="offcanvas-body">

        <div class="offcanvasForm_wrap">

            <div class="modal-body pb-0">
                <div class="row">

                    <div class="col-md-6">
                        <label class="form-label">Tag ID:<div class="requiredLabel">*</div></label>
                        <select class="form-control largeinp_height select2">
                            <option value="">Select a Tag ID</option>
                            <option value="AEF - 0129">AEF - 0129</option>
                            <option value="BEC - 1011">BEC - 1011</option>
                            <option value="CEA - 2020">CEA - 2020</option>
                            <option value="GHI - 2211">GHI - 2211</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Select Manager</label>
                            <select name="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="1">Danial Craig</option>
                                <option value="2">Emily Blunt</option>
                                <option value="3">John Doe</option>
                                <option value="4">Sophia Turner</option>
                                <option value="5">Michael Jordan</option>
                                <option value="6">Olivia Smith</option>
                            </select>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                placeholder="Select Date" readonly="readonly">
                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                            </iconify-icon>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Time <span class="text-danger"> *</span></label>
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control timepicker">
                                <span class="input-icon-addon">
                                    <i class="ti ti-clock-hour-10 text-gray-7"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Location (Region)</label>
                            <div class="input-blocks">
                                <iconify-icon icon="ion:location-outline" class="info-img"></iconify-icon>
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

                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-label">
                                <label>Additional Notes</label>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="canvasFooterContainer flexmodalfooter">
        <div class="savedraft_button">
            <!-- <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div> -->

        </div>

        <div class="modalbetween_actions">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
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

<!-- Edit Sticker modal start -->
<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="editStickerModal"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Edit Allotment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <div class="offcanvas-body">

        <div class="offcanvasForm_wrap">

            <div class="modal-body pb-0">
                <div class="row">

                    <div class="col-md-6">
                        <label class="form-label">Sticker ID:<div class="requiredLabel">*</div></label>
                        <select class="form-control largeinp_height select2">
                            <option value="">Select a Sticker ID</option>
                            <option value="AEF - 0129">AEF - 0129</option>
                            <option value="BEC - 1011">BEC - 1011</option>
                            <option value="CEA - 2020">CEA - 2020</option>
                            <option value="GHI - 2211">GHI - 2211</option>

                        </select>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Location (Region)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The End Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Start Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Starting Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">End Number Range:<div class="requiredLabel">*</div></label>
                            <input type="text" placeholder="Please Enter The Ending Range" class="form-control largeinp_height">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                placeholder="Select Date" readonly="readonly">
                            <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                            </iconify-icon>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <select name="" id="" class="form-control select2">
                                <option disabled="" selected="" value="">Please Select...</option>
                                <option value="Received">Received</option>
                                <option value="Delievered">Delievered</option>
                                <option value="Dispatched">Dispatched</option>

                            </select>

                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="form-label">
                                <label>Additional Notes</label>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Write here..."></textarea>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="canvasFooterContainer flexmodalfooter">
        <div class="savedraft_button">
            <!-- <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div> -->
        </div>

        <div class="modalbetween_actions">
            <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                data-bs-dismiss="offcanvas">Cancel</button>
            <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Save & Update</button>
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
    document.addEventListener("DOMContentLoaded", function() {
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
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function(e) {
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