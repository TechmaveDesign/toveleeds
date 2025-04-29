<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Approval Board</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Manage Approvals
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Approval Board</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

           
            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                    data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Performance Indicator list -->
    <div class="card tablemaincard_nopaddingleftright">
    <?php include "headers/approval-header.php"?>
        

    <div class="tbuppertabs mb-0">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false" id="stickerTab"> Request From You
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true" id="tagTab">
                    Transfer Inspector to Inspector Request
                   </a>

            </nav>

        </div>
        <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Inspector/Trainer</option>
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
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="f7:status" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Status</option>
                                                    <option>Pending</option>
                                                    <option>Approved</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="pepicons-pop:label" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Label Type</option>
                                                    <option>Sticker</option>
                                                    <option>Tag</option>
                                                </select>

                                            </div>
                                        </div>
                                    <div class="col-lg-3">
                                        <div class="rightPrFilters">
                                    <div class="input-icon mb-2 position-relative">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-calendar text-gray-9"></i>
                                        </span>
                                        <input type="text" class="form-control date-range bookingrange"
                                            placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                    </div>
                                    
                                </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            

                        </div>
                        <!-- /Filter -->
                    </div>
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Inspector ID</th>
                            <th>Inspector Name</th>
                            <th>Label Type</th>
                            <th>Requested On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               <a href="#">#INSPE-0001</a>
                            </td>
                            <td>
                              <div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-08.jpg" class="img-fluid" alt="Michael Scott">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Cavin John </a></h6>
									</div>
								</div>
                            </td>
                            <td>Sticker</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Pending</span>
                                    <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" href="approval-sticker-detailpage.php"
                                            aria-label="View Details" data-bs-original-title="View Details">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">#INSPE-0002</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Sarah Connor">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Sarah Connor</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>Tag</td>
                            <td>28 Dec 2024</td>
                            <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                    <span class="badge-label">Approved</span>
                                    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" 
                                        data-placement="top" href="approval-sticker-detailpage.php" aria-label="View Details" data-bs-original-title="View Details">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">#INSPE-0003</a>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="John Doe">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">John Doe</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>Sticker</td>
                            <td>29 Dec 2024</td>
                            <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                    <span class="badge-label">Pending</span>
                                    <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" 
                                        data-placement="top" href="approval-sticker-detailpage.php" aria-label="View Details" data-bs-original-title="View Details">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
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
                            <th>Request From</th>
                            <th>Request To</th>
                            <th>Label Type</th>
                            <th>Quantity</th>
                            <th>Requested On</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="John Doe">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">John Doe</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Sarah Connor">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Sarah Connor</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>Sticker</td>
                            <td>40</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                    <span class="badge-label">Pending</span>
                                    <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                </span>
                            </td>
                            <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" 
                                        data-placement="top" href="approval-transfer-request.php" aria-label="View Details" data-bs-original-title="View Details">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-08.jpg" class="img-fluid" alt="Michael Scott">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Michael Scott</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-01.jpg" class="img-fluid" alt="Pam Beesly">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Pam Beesly</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>Tag</td>
                            <td>25</td>
                            <td>15 Jan 2025</td>
                            <td>
                                <span class="badge bg-outline-success badgecustomstyle">
                                    <span class="badge-label">Approved</span>
                                    <iconify-icon icon="mynaui:check"></iconify-icon>
                                </span>
                            </td>
                            <td>
                            <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" 
                                        data-placement="top" href="approval-transfer-request.php" aria-label="View Details" data-bs-original-title="View Details">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" 
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                                    class="feather feather-eye">
                                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg>
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
            <!-- <div class="tab-pane  text-muted" id="nav-in-progress" role="tabpanel">
                <div class="custom-datatable-filter">
                
                </div>
            </div>
            <div class="tab-pane  text-muted" id="nav-cart-justified" role="tabpanel">
                <div class="custom-datatable-filter">
               
                </div>
            </div> -->
        </div>
    </div>
    <!-- /Performance Indicator list -->

</div>

<?php include("footer.php") ?>