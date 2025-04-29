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
        <div class="row approvalcountcards">
            <!-- Total Companies -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="countcardflex_wrap">
                        <span class="avatar avatar-lg bg-warning  flex-shrink-0">
                            <iconify-icon icon="solar:bill-check-linear" width="22" height="22"></iconify-icon>
                        </span>
                        <div class="countcardflex_content">
                            <div class="ms-2 overflow-hidden">
                                <h3>Supervisor</h3>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Pending Approvals</p>
                            </div>
                            <div class="countof-Pendings">10</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="countcardflex_wrap">
                        <span class="avatar avatar-lg bg-success  flex-shrink-0">
                            <iconify-icon icon="solar:bill-check-linear" width="22" height="22"></iconify-icon>
                        </span>
                        <div class="countcardflex_content">
                            <div class="ms-2 overflow-hidden">
                                <h3>Technical Manager</h3>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Pending Approvals</p>
                            </div>
                            <div class="countof-Pendings">14</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="countcardflex_wrap">
                        <span class="avatar avatar-lg bg-info  flex-shrink-0">
                            <iconify-icon icon="solar:bill-check-linear" width="22" height="22"></iconify-icon>
                        </span>
                        <div class="countcardflex_content">
                            <div class="ms-2 overflow-hidden">
                                <h3>OM/GM</h3>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Pending Approvals</p>
                            </div>
                            <div class="countof-Pendings">06</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- count card end -->

        <div class="card-body p-0">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5 class="d-flex align-items-center">All Approval Request's</h5>
                <!-- <div class="d-flex align-items-center flex-wrap row-gap-3">

                    <div class="input-icon position-relative w-120 me-2">
                        <span class="input-icon-addon">
                            <i class="ti ti-calendar"></i>
                        </span>
                        <input type="text" class="form-control datetimepicker" placeholder="Submission Date">
                    </div>
                   

                </div> -->
            </div>
            <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false">Equipment Inspection
                    <span class="badge bg-secondary-transparent ms-1">08</span></a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">Operator Assessment
                    <span class="badge bg-secondary-transparent ms-1">03</span></a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress" aria-selected="true">NDT Review
                    <span class="badge bg-secondary-transparent ms-1">03</span></a>
                <!-- <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-cart-justified"
                    aria-selected="true">Training
                    <span class="badge bg-success-transparent ms-1">07</span></a> -->
                <!-- <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders-justified"
                    aria-selected="false">Approved 
                    <span class="badge bg-info-transparent ms-1">11</span>
                </a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-draftjobs"
                    aria-selected="false">Draft 
                    <span class="badge bg-info-draft ms-1">05</span>
                </a> -->
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
                                    <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Inspector</option>
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
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="ion:location-outline" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Region</option>
                                                    <option>Delhi</option>
                                                    <option>Mumbai</option>
                                                    <option>Kolkata</option>
                                                    <option>Banglore</option>
                                                    <option>Pune</option>
                                                    <option>Chennai</option>

                                            
                                                </select>

                                            </div>
                                        </div>

                                    <div class="col-lg-2">
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

                                        <div class="col-lg-2">
                                            <div class="input-blocks">
                                            <iconify-icon icon="f7:status"  class="info-img"></iconify-icon>
                                                <select id="" class="select2">
                                                    <option value="" selected disabled readonly>Filter by status</option>
                                                    <option value="approved">approved</option>
                                                    <option value="Pending">Pending</option>
                                                </select>
                                            </div>
                  
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="input-blocks">
                                            <iconify-icon icon="healthicons:job-status-level-outline" class="info-img"></iconify-icon>
                                                <select id="" class="select2">
                                                    <option value="" selected disabled readonly>Filter by level</option>
                                                    <option value="Technical Manager">Technical Manager</option>
                                                    <option value="Supervisor">Supervisor</option>
                                                    <option value="OM/GM">OM/GM</option>
                                                </select>
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
                                <th>Approval Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  <a class="hightlightKOPID" href="job-order-details-inspection-assessment.php">#JO2500004</a>  
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
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Pending for Approval</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    Technical Manager
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                     
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <a class="hightlightKOPID" href="job-order-details-inspection-assessment.php">#JO2500005</a>  
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
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    Supervisor
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                     
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <a class="hightlightKOPID" href="job-order-details-inspection-assessment.php">#JO2500006</a>  
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
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>OM/GM</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                    <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Inspector</option>
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
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="ion:location-outline" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Region</option>
                                                    <option>Delhi</option>
                                                    <option>Mumbai</option>
                                                    <option>Kolkata</option>
                                                    <option>Banglore</option>
                                                    <option>Pune</option>
                                                    <option>Chennai</option>

                                            
                                                </select>

                                            </div>
                                        </div>

                                    <div class="col-lg-2">
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

                                        <div class="col-lg-2">
                                            <div class="input-blocks">
                                            <iconify-icon icon="f7:status"  class="info-img"></iconify-icon>
                                                <select id="" class="select2">
                                                    <option value="" selected disabled readonly>Filter by status</option>
                                                    <option value="approved">approved</option>
                                                    <option value="Pending">Pending</option>
                                                </select>
                                            </div>
                  
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="input-blocks">
                                            <iconify-icon icon="healthicons:job-status-level-outline" class="info-img"></iconify-icon>
                                                <select id="" class="select2">
                                                    <option value="" selected disabled readonly>Filter by level</option>
                                                    <option value="Technical Manager">Technical Manager</option>
                                                    <option value="Supervisor">Supervisor</option>
                                                    <option value="OM/GM">OM/GM</option>
                                                </select>
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
                                <th>Approval Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  <a class="hightlightKOPID" href="job-order-details-inspection-assessment.php">#JO2500004</a>  
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
                                    <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Pending for Approval</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    Technical Manager
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                     
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <a class="hightlightKOPID" href="job-order-details-inspection-assessment.php">#JO2500005</a>  
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
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    Supervisor
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                     
                                        
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                  <a class="hightlightKOPID" href="job-order-details-inspection-assessment.php">#JO2500006</a>  
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
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>OM/GM</td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                    <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                            <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Client</option>
                                                    <option>Elena Cruz</option>
                                                    <option>John Smith</option>
                                                    <option>Stephan Peralt</option>
                                                    <option>Mia Lee</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Inspector</option>
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
                                        <div class="col-lg-2 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="ion:location-outline" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Filter by Region</option>
                                                    <option>Delhi</option>
                                                    <option>Mumbai</option>
                                                    <option>Kolkata</option>
                                                    <option>Banglore</option>
                                                    <option>Pune</option>
                                                    <option>Chennai</option>

                                            
                                                </select>

                                            </div>
                                        </div>

                                    <div class="col-lg-2">
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

                                        <div class="col-lg-2">
                                            <div class="input-blocks">
                                            <iconify-icon icon="f7:status"  class="info-img"></iconify-icon>
                                                <select id="" class="select2">
                                                    <option value="" selected disabled readonly>Filter by status</option>
                                                    <option value="approved">approved</option>
                                                    <option value="Pending">Pending</option>
                                                </select>
                                            </div>
                  
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="input-blocks">
                                            <iconify-icon icon="healthicons:job-status-level-outline" class="info-img"></iconify-icon>
                                                <select id="" class="select2">
                                                    <option value="" selected disabled readonly>Filter by level</option>
                                                    <option value="Technical Manager">Technical Manager</option>
                                                    <option value="Supervisor">Supervisor</option>
                                                    <option value="OM/GM">OM/GM</option>
                                                </select>
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
                                <th>Approval Level</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="hightlightKOPID" href="job-order-detail-ndt.php">#JON2500004</a>  
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
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                Technical Manager
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                       
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="hightlightKOPID" href="job-order-detail-ndt.php">#JON2500005</a>  
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
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Pending for Approval</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                Supervisor
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                       
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="hightlightKOPID" href="job-order-detail-ndt.php">#JON2500006</a>  
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
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Pending for Approval</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                OM/GM
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="Job Order Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip" data-placement="top" title="Details for approval"
                                            href="approval-details.php">
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
                                       
                                    </div>
                                </td>
                            </tr>
                            

                        </tbody>

                    </table>
                </div>
            </div>
            <!-- <div class="tab-pane  text-muted" id="nav-cart-justified" role="tabpanel">
           
            </div>
            <div class="tab-pane text-muted" id="nav-orders-justified" role="tabpanel">
            
            </div>

            <div class="tab-pane text-muted" id="nav-draftjobs" role="tabpanel">
           
            </div>
            <div class="tab-pane text-muted" id="nav-closedjobs" role="tabpanel">
                
            </div> -->
        </div>
        </div>
    </div>
    <!-- /Performance Indicator list -->

</div>



<div class="offcanvas offcanvas-end customOffcanvasWidth-400" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Recent Activity <span class="RecentActivityID"><a href="job-order-details-inspection-assessment.php">#JO2500005</a></span></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="ActivityBox">
            <span class="badge badge-soft-secondary  d-inline-flex align-items-center mb-3">
                <i class="ti ti-calendar me-1"></i>
                15 Feb 2024
            </span>
            <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-start">
                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-skyblue me-2"><i class="ti ti-message-circle-2 fs-20"></i></span>
                    <div>
                        <h6 class="fw-medium mb-1">You sent 1 Message to the contact.</h6>
                        <span>10:25 pm</span>
                    </div>
                </div>
            </div>
            <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-start">
                    <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i class="ti ti-phone fs-20"></i></span>
                    <div>
                        <h6 class="fw-medium mb-1">Denwar responded to your appointment schedule
                            question by call at 09:30pm.</h6>
                        <span>09:25 pm</span>
                    </div>
                </div>
            </div>
            <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-start">
                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-warning me-2"><i class="ti ti-file-description fs-20"></i></span>
                    <div>
                        <h6 class="fw-medium mb-1">Notes added by Antony</h6>
                        <p class="mb-1">Please accept my apologies for the inconvenience caused. It
                            would be much appreciated if it's possible to reschedule to 6:00 PM, or any
                            other day that week.</p>
                        <span>10.00 pm</span>
                    </div>
                </div>
            </div>
            <span class="badge badge-soft-secondary  d-inline-flex align-items-center mb-3">
                <i class="ti ti-calendar me-1"></i>
                15 Feb 2024
            </span>
            <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-start">
                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i class="ti ti-user-circle fs-20"></i></span>
                    <div>
                        <h6 class="fw-medium d-flex align-items-center mb-1">
                            Meeting With
                            <span class="avatar avatar-sm avatar-rounded mx-1"><img src="assets/img/profiles/avatar-02.jpg" alt="Img"></span>
                            Abraham
                        </h6>
                        <span>Schedueled on 05:00 pm</span>
                    </div>
                </div>
            </div>
            <div class="border rounded p-3 mb-3">
                <div class="d-flex align-items-start">
                    <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i class="ti ti-phone fs-20"></i></span>
                    <div>
                        <h6 class="fw-medium mb-1">Drain responded to your appointment schedule
                            question.</h6>
                        <span>09:25 pm</span>
                    </div>
                </div>
            </div>
            <span class="badge badge-soft-secondary  d-inline-flex align-items-center mb-3">
                <i class="ti ti-calendar me-1"></i>
                Upcoming Activity
            </span>
            <div class="border rounded p-3">
                <div class="d-flex align-items-start mb-2">
                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i class="ti ti-user-circle fs-20"></i></span>
                    <div>
                        <h6 class="fw-medium mb-1">
                            Product Meeting
                        </h6>
                        <p class="mb-1">A product team meeting is a gathering of the cross-functional
                            product team — ideally including
                            team members from product, engineering, marketing, and customer support.
                        </p>
                        <span>Schedueled on 05:00 pm</span>
                    </div>
                </div>

            </div>
        </div>
  </div>
</div>
<?php include("footer.php") ?>

<!-- tooltip & offcanvas both are working on anchor tag-->
<script>
   document.addEventListener("DOMContentLoaded", function() {
       var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
       var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
           return new bootstrap.Tooltip(tooltipTriggerEl);
       });
   });
</script>