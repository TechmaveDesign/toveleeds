<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Label's Orders</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Orders</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#createjoborder" aria-controls="offcanvasRight"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Create Order
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
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#"
                    aria-selected="false">Sticker 
                    <span class="badge bg-warning-transparent ms-1">08</span></a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#" aria-selected="true">Tab
                    <span class="badge bg-secondary-transparent ms-1">03</span></a>
                <!-- <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress" aria-selected="true">In
                    Progress
                    <span class="badge bg-secondary-transparent ms-1">03</span></a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-cart-justified"
                    aria-selected="true">Completed Job Orders
                    <span class="badge bg-success-transparent ms-1">07</span></a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders-justified"
                    aria-selected="false">Approved Job Orders
                    <span class="badge bg-info-transparent ms-1">11</span>
                </a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-draftjobs"
                    aria-selected="false">Draft Job Orders
                    <span class="badge bg-info-draft ms-1">05</span>
                </a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-closedjobs"
                    aria-selected="false">Closed Job Orders
                    <span class="badge bg-info-closed ms-1">10</span>
                </a> -->

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
                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Department</option>
                                                    <option>Inspection</option>
                                                    <option>NDT</option>
                                                    <option>Operator Assessment</option>
                                                    <option>Training</option>
                                                </select>

                                            </div>
                                        </div>
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
                                <th>Sticker / Tag ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>Assigned Inspector/Trainer</th>
                                <th>Checklist Template Name</th>
                               
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    ABC - 0001
                                </td>
                                <td>
                                    CL001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Inspection</td>
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td> <a href="manage-template.php" target="_blank" class="tablelink_data">Monthly
                                        Maintenance</a> </td>
                              
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                            class="badge-label">Pending</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>ABC - 0002</td>
                                <td>CL002</td>
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
                                <td>Inspection</td>
                                <td>Mumbai</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="manage-template.php" target="_blank" class="tablelink_data">Annual
                                        Inspection</a> </td>
                               
                                <td>
                                    <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span
                                            class="badge-label">Under Printing</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>ABC - 0003</td>
                                <td>CL003</td>
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
                                <td>NDT</td>
                                <td>Pune</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="manage-template.php" target="_blank"
                                        class="tablelink_data">Pre-Construction Review</a> </td>
                             
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Ready for Distribution</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>

            <div class="tab-pane text-muted" id="nav-in-pending" role="tabpanel">
                <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Department</option>
                                                    <option>Inspection</option>
                                                    <option>NDT</option>
                                                    <option>Operator Assessment</option>
                                                    <option>Training</option>
                                                </select>

                                            </div>
                                        </div>
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
                                <th>Job Order ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector/Trainer</th>
                                <th>Checklist Template Name</th>
                          
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    JB001
                                </td>
                                <td>
                                    CL001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Inspection</td>
                                <td>Mumbai</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td> <a href="manage-template.php" target="_blank" class="tablelink_data">Monthly
                                        Maintenance</a> </td>
                             
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                            class="badge-label">Pending</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>JB002</td>
                                <td>CL002</td>
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
                                <td>Inspection</td>
                                <td>Kolkata</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="manage-template.php" target="_blank" class="tablelink_data">Annual
                                        Inspection</a> </td>
                              
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                            class="badge-label">Pending</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>JB003</td>
                                <td>CL003</td>
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
                                <td>NDT</td>
                                <td>Bangalore</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td><a href="manage-template.php" target="_blank"
                                        class="tablelink_data">Pre-Construction Review</a> </td>
                              
                                <td>
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                            class="badge-label">Pending</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <div class="tab-pane  text-muted" id="nav-in-progress" role="tabpanel">
                <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Department</option>
                                                    <option>Inspection</option>
                                                    <option>NDT</option>
                                                    <option>Operator Assessment</option>
                                                    <option>Training</option>
                                                </select>

                                            </div>
                                        </div>
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
                                <th>Job Order ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector/Trainer</th>
                                <th>Checklist Template Name</th>
                                <!-- <th>Location</th> -->
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    JB001
                                </td>
                                <td>
                                    CL001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Inspection</td>
                                <td>Bangalore</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Safety Compliance Check</td>
                                <td>
                                    <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span
                                            class="badge-label">In Progress</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>JB002</td>
                                <td>CL002</td>
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
                                <td>Inspection</td>
                                <td>Mumbai</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Equipment Audit</td>
                             
                                <td>
                                    <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span
                                            class="badge-label">In Progress</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>JB003</td>
                                <td>CL003</td>
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
                                <td>Training</td>
                                <td>Mumbai</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Quality Assurance Review</td>
                               
                                <td>
                                    <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span
                                            class="badge-label">In Progress</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <div class="tab-pane  text-muted" id="nav-cart-justified" role="tabpanel">
                <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Department</option>
                                                    <option>Inspection</option>
                                                    <option>NDT</option>
                                                    <option>Operator Assessment</option>
                                                    <option>Training</option>
                                                </select>

                                            </div>
                                        </div>
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
                                <th>Job Order ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector/Trainer</th>
                                <th>Checklist Template Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    JB001
                                </td>
                                <td>
                                    CL001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Inspection</td>
                                <td>Pune</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Safety Compliance Check</td>
                               
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Ready for Distribution</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>JB002</td>
                                <td>CL002</td>
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
                                <td>Inspection</td>
                                <td>Delhi</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Equipment Audit</td>
                               
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Ready for Distribution</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>JB003</td>
                                <td>CL003</td>
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
                                <td>Training</td>
                                <td>Chennai</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Quality Assurance Review</td>
                                
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Ready for Distribution</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <div class="tab-pane text-muted" id="nav-orders-justified" role="tabpanel">
                <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Department</option>
                                                    <option>Inspection</option>
                                                    <option>NDT</option>
                                                    <option>Operator Assessment</option>
                                                    <option>Training</option>
                                                </select>

                                            </div>
                                        </div>
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
                                <th>Job Order ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Departments</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector/Trainer</th>
                                <th>Checklist Template Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    JB001
                                </td>
                                <td>
                                    CL001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Inspection</td>
                                <td>Pune</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Post-Event Evaluation</td>
                              
                                <td>
                                    <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>JB002</td>
                                <td>CL002</td>
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
                                <td>NDT</td>
                                <td>Kolkata</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Routine Checkup</td>
                            
                                <td>
                                    <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>JB003</td>
                                <td>CL003</td>
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
                                <td>Training</td>
                                <td>Bangalore</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Quality Assurance Review</td>
                       
                                <td>
                                    <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>

            <div class="tab-pane text-muted" id="nav-draftjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Department</option>
                                                    <option>Inspection</option>
                                                    <option>NDT</option>
                                                    <option>Operator Assessment</option>
                                                    <option>Training</option>
                                                </select>

                                            </div>
                                        </div>
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
                                <th>Job Order ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector/Trainer</th>
                                <th>Checklist Template Name</th>
                      
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    JB001
                                </td>
                                <td>
                                    CL001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Inspection</td>
                                <td>Pune</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Post-Event Evaluation</td>
                            
                                <td>
                                    <span class="badge bg-outline-Draft pendingbadge badgecustomstyle"><span
                                            class="badge-label">Draft</span>
                                            <iconify-icon icon="codicon:issue-draft"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>JB002</td>
                                <td>CL002</td>
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
                                <td>NDT</td>
                                <td>Pune</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Routine Checkup</td>
                                
                                <td>
                                    <span class="badge bg-outline-Draft pendingbadge badgecustomstyle"><span
                                            class="badge-label">Draft</span>
                                            <iconify-icon icon="codicon:issue-draft"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>JB003</td>
                                <td>CL003</td>
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
                                <td>Training</td>
                                <td>Delhi</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Quality Assurance Review</td>
             
                                <td>
                                    <span class="badge bg-outline-Draft pendingbadge badgecustomstyle"><span
                                            class="badge-label">Draft</span>
                                            <iconify-icon icon="codicon:issue-draft"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>

                    </table>
                </div>
            </div>
            <div class="tab-pane text-muted" id="nav-closedjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Department</option>
                                                    <option>Inspection</option>
                                                    <option>NDT</option>
                                                    <option>Operator Assessment</option>
                                                    <option>Training</option>
                                                </select>

                                            </div>
                                        </div>
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
                                <th>Job Order ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector/Trainer</th>
                                <th>Checklist Template Name</th>
                              
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    JB001
                                </td>
                                <td>
                                    CL001
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Inspection</td>
                                <td>Delhi</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Post-Event Evaluation</td>
                               
                                <td>
                                    <span class="badge bg-outline-closed pendingbadge badgecustomstyle"><span
                                            class="badge-label">Closed</span>
                                            <iconify-icon icon="material-symbols-light:tab-close-outline"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>JB002</td>
                                <td>CL002</td>
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
                                <td>NDT</td>
                                <td>Mumbai</td>
                                <td>11/02/2024 10:45</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Routine Checkup</td>
                          
                                <td>
                                    <span class="badge bg-outline-closed pendingbadge badgecustomstyle"><span
                                            class="badge-label">Closed</span>
                                            <iconify-icon icon="material-symbols-light:tab-close-outline"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>JB003</td>
                                <td>CL003</td>
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
                                <td>Training</td>
                                <td>Kolkata</td>
                                <td>12/02/2024 13:20</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>Quality Assurance Review</td>
                               
                                <td>
                                    <span class="badge bg-outline-closed pendingbadge badgecustomstyle"><span
                                            class="badge-label">Closed</span>
                                            <iconify-icon icon="material-symbols-light:tab-close-outline"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="job-order-details.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-eye">
                                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                        <button
                                            class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </button>
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

<div class="offcanvas offcanvas-end rightlarge_offcanvas commonoffcanvas_style" tabindex="-1" id="createjoborder"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header flexbetweenheader">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Create Job Order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
            <iconify-icon icon="mi:close"></iconify-icon>
        </button>
    </div>
    <form action="clients.php">
        <div class="offcanvas-body">

            <div class="offcanvasForm_wrap">

                <div class="modal-body pb-0">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Client ID <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Select Client</label>
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

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Sticker / Tag ID <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                       <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Start Range <span class="text-danger"> *</span></label>
                                    <input type="number" class="form-control" placeholder="Enter starting range for sticker / Tag" min="1">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">End Range <span class="text-danger"> *</span></label>
                                    <input type="number" class="form-control" placeholder="Enter ending range for sticker / Tag" min="1">
                                </div>
                            </div>
                        </div>
                    </div>

                    

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Service Type</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Equipment Inspection">Equipment Inspection</option>
                                    <option value="Assessment">Assessment</option>
                                    <option value="Training">Training</option>
                                    <option value="NDT">NDT</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Scheduled Date</label>
                                <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                    placeholder="Select Date" readonly="readonly">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                </iconify-icon>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Deadline</label>
                                <input class="form-control customdataPicker flatpickr-input" type="text" name=""
                                    placeholder="Select Date" readonly="readonly">
                                <iconify-icon icon="ion:calendar-outline" class="dateinput_icon">
                                </iconify-icon>
                            </div>
                        </div> -->

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
                                <label class="form-label">Location <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Assigned Inspector/Trainer</label>
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

                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Checklist Template </label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Template 1">Template 1</option>
                                    <option value="Template 2">Template 2</option>
                                    <option value="Template 3">Template 3</option>
                                </select>

                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Under Printing">Under Printing</option>
                                    <option value="Ready for Distribution">Ready for Distribution</option>
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

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label labelno_margin">Attach Documents</label>
                                <p class="formlabel_description">Attach relevant documents such as technical drawings, specifications, previous inspection reports, or client instructions.</p>
                                <input type="file" class="filepond" id="imageInput" name="imageInput" multiple
                                    data-max-file-size="3MB" data-max-files="5">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="canvasFooterContainer flexmodalfooter">
            <div class="savedraft_button">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" for="gridCheck">Save Draft </label>
                </div>

            </div>

            <div class="modalbetween_actions">
                <button type="button" class="canvascancel_button commonCanvas_buttonFooter"
                    data-bs-dismiss="offcanvas">Cancel</button>
                <button type="submit" class="canvasSubmit_button commonCanvas_buttonFooter">Submit</button>
            </div>
        </div>
    </form>
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


