<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">All Job Orders</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Job Orders</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
        <!-- <div class="mb-2 me-2">
                <a href="#" 
                    class="btn btn-secondary d-flex align-items-center cmnaddbtn downloadBtn">
                    <iconify-icon icon="proicons:pdf"></iconify-icon> Download PDF
                </a>
            </div> -->
            <div class="mb-2">
                <a href="create-job-order.php" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Create Job
                    Order
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
     <?php include "headers/job-header.php"?>
        <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false">New 
                    <span class="badge bg-warning-transparent ms-1">08</span></a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">Pending
                    Job 
                    <span class="badge bg-secondary-transparent ms-1">03</span></a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress" aria-selected="true">In
                    Progress
                    <span class="badge bg-secondary-transparent ms-1">03</span></a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-cart-justified"
                    aria-selected="true">Completed 
                    <span class="badge bg-success-transparent ms-1">07</span></a>
                <!-- <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders-justified"
                    aria-selected="false">Approved 
                    <span class="badge bg-info-transparent ms-1">11</span>
                </a> -->
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-draftjobs"
                    aria-selected="false">Draft 
                    <span class="badge bg-info-draft ms-1">05</span>
                </a>
                <!-- <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-closedjobs"
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
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
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
                                <th>Client Name</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500000</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Jim Korbat</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                    <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span
                                            class="badge-label">New Job</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                            
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500000</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span
                                            class="badge-label">New Job</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                            
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500003</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-19.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">John Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Pune</td>
                                <td>
                                12/02/2024 13:20
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span
                                            class="badge-label">New Job</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
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
                                <th>Client Name</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500001</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Jim Korbat</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                               
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500002</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                               
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500003</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-19.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">John Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Pune</td>
                                <td>
                                12/02/2024 13:20
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
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
                                <th>Client Name</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500004</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Jim Korbat</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                            
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500005</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                            
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500006</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-19.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">John Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Pune</td>
                                <td>
                                12/02/2024 13:20
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
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
                                <th>Client Name</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                           
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500004</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Jim Korbat</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Completed</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                           
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500005</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Completed</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                           
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500006</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-19.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">John Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Pune</td>
                                <td>
                                12/02/2024 13:20
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Completed</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
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
                                <th>Client Name</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                              
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500004</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Jim Korbat</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500005</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                           
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500006</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-19.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">John Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Pune</td>
                                <td>
                                12/02/2024 13:20
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
                                <td>
                                <span class="badge bg-outline-info pendingbadge badgecustomstyle"><span class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Job Order Details"
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
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
                                <th>Client Name</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <th>assigned Inspector</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                           
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500004</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Jim Korbat</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                              
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500005</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">Elena Cruz</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                              
                                <td>
                                  <a class="hightlightKOPID" href="training-job-order-detail.php">#JOT2500006</a>  
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="client-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-19.jpg" class="img-fluid"
                                                alt="Elena Cruz">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="client-detail.php">John Smith</a></h6>
                                        </div>
                                    </div>
                                </td>
                              
                                <td>Pune</td>
                                <td>
                                12/02/2024 13:20
                                </td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="user-detail.php" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="user-detail.php">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td>
                             
                              
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
                                            href="training-job-order-detail.php">
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
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                <th>Equipment Name</th>
                              
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
                                            href="training-job-order-detail.php">
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
                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                            href="training-job-order-detail.php">
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
                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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
                                            href="training-job-order-detail.php">
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
                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            
                                            href="edit-job-order.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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


<?php include("footer.php") ?>
