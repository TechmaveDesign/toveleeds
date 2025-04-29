<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">All Operator Assessment</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Equipment Inspections</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
        <div class="mb-2 me-2">
                <a href="#" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn renewBtn">
                    <iconify-icon icon="hugeicons:renewable-energy"></iconify-icon> Renew
                </a>
            </div>
            <div class="mb-2">
            <a href="#" 
                    class="btn btn-primary d-flex align-items-center cmnaddbtn downloadBtn">
                    <iconify-icon icon="proicons:pdf"></iconify-icon> Download PDF
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
     <!-- <?php include "headers/job-header.php"?> -->
        <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false">In Progress
                    <span class="badge bg-warning-transparent ms-1">08</span></a>

               
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-cart-justified"
                    aria-selected="true">Passed
                    <span class="badge bg-success-transparent ms-1">07</span></a>
              
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-draftjobs"
                    aria-selected="false">Failed
                    <span class="badge bg-info-draft ms-1">05</span>
                </a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders-justified"
                    aria-selected="false">Approved 
                    <span class="badge bg-info-transparent ms-1">11</span>
                </a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress" aria-selected="true">
                    Draft
                    <span class="badge bg-secondary-transparent ms-1">03</span></a> 
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">Renewal Jobs
                 <span class="badge bg-secondary-transparent ms-1">03</span></a>
               
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-closedjobs"
                    aria-selected="false">Closed Job Orders
                    <span class="badge bg-info-closed ms-1">10</span>
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
                                                <iconify-icon icon="la:tools" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Equipment Name</option>
                                                    <option>Crane System</option>
                                                    <option>Hydraulic Press</option>
                                                    <option>Cooling Tower</option>
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
                                <th>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input selectAll" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                                </th>
                                <th>Job Order ID</th>
                                <th>Client Name</th>
                                <th>Assessment No.</th>
                                <th>Equipment Name</th>
                                <th>Operators</th>
                                <th>Completion On</th>
                                <th>Card No.</th>
                                <th>Certificate No.</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input  row-checkbox" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                            </td>
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500001</a></td>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500001</a></td>
                            <td>Forklift Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="John Doe">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Alex Smith</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>28 Jan, 2025 10:30 AM</td>
                            <td><a href="#" class="hightlightKOP">#2500001</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500001</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>45%</td>
                            <td><span class="badge badge-soft-warning">In Progress</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500001</a></td>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500002</a></td>
                            <td>Heavy Equipment Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="Sarah Johnson">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Brian Adams</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>29 Jan, 2025 02:00 PM</td>
                            <td><a href="#" class="hightlightKOP">#2500002</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500002</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>30%</td>
                            <td><span class="badge badge-soft-warning">In Progress</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500001</a></td>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500003</a></td>
                            <td>Excavator Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-11.jpg" class="img-fluid" alt="James Brown">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Chris Evans</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>30 Jan, 2025 09:45 AM</td>
                            <td><a href="#" class="hightlightKOP">#2500003</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500003</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>50%</td>
                            <td><span class="badge badge-soft-warning">In Progress</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                                <iconify-icon icon="la:tools" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Equipment Name</option>
                                                    <option>Crane System</option>
                                                    <option>Hydraulic Press</option>
                                                    <option>Cooling Tower</option>
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
                                <th>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input selectAll" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                                </th>
                                <th>Job Order ID</th>
                                <th>Client Name</th>
                                <th>Assessment No.</th>
                                <th>Equipment Name</th>
                                <th>Operators</th>
                                <th>Completion On</th>
                                <th>Card No.</th>
                                <th>Certificate No.</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input  row-checkbox" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                            </td>
                            <td><a href="renewal-jobs.php" class="hightlightKOP">#JO2500001</a></td>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="opretaor-dls-renewal.php" class="hightlightKOPID">#Asmt2500001</a></td>
                            <td>Forklift Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="John Doe">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Alex Smith</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>28 Jan, 2025 10:30 AM</td>
                            <td><a href="#" class="hightlightKOP">#2500001</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500001</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>45%</td>
                            <td><span class="badge badge-soft-warning">Renewal Pending</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="renewal-jobs.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                            <td><a href="renewal-jobs.php" class="hightlightKOP">#JO2500001</a></td>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="opretaor-dls-renewal.php" class="hightlightKOPID">#Asmt2500002</a></td>
                            <td>Heavy Equipment Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="Sarah Johnson">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Brian Adams</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>29 Jan, 2025 02:00 PM</td>
                            <td><a href="#" class="hightlightKOP">#2500002</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500002</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>30%</td>
                            <td><span class="badge badge-soft-warning">Renewal Pending</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="renewal-jobs.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                            <td><a href="renewal-jobs.php" class="hightlightKOP">#JO2500001</a></td>
                            <td><a href="#">John Doe</a></td>
                            <td><a href="opretaor-dls-renewal.php" class="hightlightKOPID">#Asmt2500003</a></td>
                            <td>Excavator Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-11.jpg" class="img-fluid" alt="James Brown">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Chris Evans</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>30 Jan, 2025 09:45 AM</td>
                            <td><a href="#" class="hightlightKOP">#2500003</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500003</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>50%</td>
                            <td><span class="badge badge-soft-success">Renewed</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="renewal-jobs.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                                <iconify-icon icon="la:tools" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Equipment Name</option>
                                                    <option>Crane System</option>
                                                    <option>Hydraulic Press</option>
                                                    <option>Cooling Tower</option>
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
                            <th>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input selectAll" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                                </th>
                                <th>Job Order ID</th>
                                <th>Client Name</th>
                                <th>Assessment No.</th>
                                <th>Equipment Name</th>
                                <th>Operators</th>
                                <th>Completion On</th>
                                <th>Card No.</th>
                                <th>Certificate No.</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500004</a></td>
                                <td><a href="#">Sophia Wilson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500004</a></td>
                                <td>Crane Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Sophia Wilson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">David Miller</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>31 Jan, 2025 10:15 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>85%</td>
                                <td><span class="badge bg-outline-Draft pendingbadge badgecustomstyle"><span class="badge-label">Draft</span>
                                            <iconify-icon icon="codicon:issue-draft"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500005</a></td>
                                <td><a href="#">Liam Anderson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500005</a></td>
                                <td>Bulldozer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="Liam Anderson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Emma Watson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>01 Feb, 2025 01:45 PM</td>
                                <td><a href="#" class="hightlightKOP">#2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>90%</td>
                                <td><span class="badge bg-outline-Draft pendingbadge badgecustomstyle"><span class="badge-label">Draft</span>
                                            <iconify-icon icon="codicon:issue-draft"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500006</a></td>
                                <td><a href="#">Olivia Martinez</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500006</a></td>
                                <td>Concrete Mixer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" class="img-fluid" alt="Olivia Martinez">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">William Brown</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>02 Feb, 2025 09:00 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>95%</td>
                                <td><span class="badge bg-outline-Draft pendingbadge badgecustomstyle"><span class="badge-label">Draft</span>
                                            <iconify-icon icon="codicon:issue-draft"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                                <iconify-icon icon="la:tools" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Equipment Name</option>
                                                    <option>Crane System</option>
                                                    <option>Hydraulic Press</option>
                                                    <option>Cooling Tower</option>
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
                            <th>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input selectAll" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                                </th>
                                <th>Job Order ID</th>
                                <th>Client Name</th>
                                <th>Assessment No.</th>
                                <th>Equipment Name</th>
                                <th>Operators</th>
                                <th>Completion On</th>
                                <th>Card No.</th>
                                <th>Certificate No.</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500004</a></td>
                                <td><a href="#">Sophia Wilson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500004</a></td>
                                <td>Crane Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Sophia Wilson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">David Miller</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>31 Jan, 2025 10:15 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>85%</td>
                                <td><span class="badge badge-soft-success">Passed</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500005</a></td>
                                <td><a href="#">Liam Anderson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500005</a></td>
                                <td>Bulldozer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="Liam Anderson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Emma Watson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>01 Feb, 2025 01:45 PM</td>
                                <td><a href="#" class="hightlightKOP">#2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>90%</td>
                                <td><span class="badge badge-soft-success">Passed</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500006</a></td>
                                <td><a href="#">Olivia Martinez</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500006</a></td>
                                <td>Concrete Mixer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" class="img-fluid" alt="Olivia Martinez">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">William Brown</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>02 Feb, 2025 09:00 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>95%</td>
                                <td><span class="badge badge-soft-success">Passed</span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                                <iconify-icon icon="la:tools" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Equipment Name</option>
                                                    <option>Crane System</option>
                                                    <option>Hydraulic Press</option>
                                                    <option>Cooling Tower</option>
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
                            <th>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input selectAll" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                                </th>
                                <th>Job Order ID</th>
                                <th>Client Name</th>
                                <th>Assessment No.</th>
                                <th>Equipment Name</th>
                                <th>Operators</th>
                                <th>Completion On</th>
                                <th>Card No.</th>
                                <th>Certificate No.</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500004</a></td>
                                <td><a href="#">Sophia Wilson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500004</a></td>
                                <td>Crane Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Sophia Wilson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">David Miller</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>31 Jan, 2025 10:15 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>85%</td>
                                <td><span class="badge bg-outline-info pendingbadge badgecustomstyle"><span class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500005</a></td>
                                <td><a href="#">Liam Anderson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500005</a></td>
                                <td>Bulldozer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="Liam Anderson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Emma Watson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>01 Feb, 2025 01:45 PM</td>
                                <td><a href="#" class="hightlightKOP">#2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>90%</td>
                                <td><span class="badge bg-outline-info pendingbadge badgecustomstyle"><span class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500006</a></td>
                                <td><a href="#">Olivia Martinez</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500006</a></td>
                                <td>Concrete Mixer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" class="img-fluid" alt="Olivia Martinez">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">William Brown</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>02 Feb, 2025 09:00 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>95%</td>
                                <td><span class="badge bg-outline-info pendingbadge badgecustomstyle"><span class="badge-label">Approved</span>
                                        <iconify-icon icon="lets-icons:done-all-alt-round-light"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                                <iconify-icon icon="la:tools" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Equipment Name</option>
                                                    <option>Crane System</option>
                                                    <option>Hydraulic Press</option>
                                                    <option>Cooling Tower</option>
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
                                <th>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input selectAll" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                                </th>
                                <th>Job Order ID</th>
                                <th>Client Name</th>
                                <th>Assessment No.</th>
                                <th>Equipment Name</th>
                                <th>Operators</th>
                                <th>Completion On</th>
                                <th>Card No.</th>
                                <th>Certificate No.</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500007</a></td>
                            <td><a href="#">Daniel Roberts</a></td>
                            <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500007</a></td>
                            <td>Forklift Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Daniel Roberts">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Mason Clark</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>03 Feb, 2025 02:30 PM</td>
                            <td><a href="#" class="hightlightKOP">#2500007</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500007</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>45%</td>
                            <td><span class="badge badge-soft-danger">Failed</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500008</a></td>
                            <td><a href="#">Emma Davis</a></td>
                            <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500008</a></td>
                            <td>Excavator Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="Emma Davis">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Liam Harris</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>04 Feb, 2025 11:15 AM</td>
                            <td><a href="#" class="hightlightKOP">#2500008</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500008</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>50%</td>
                            <td><span class="badge badge-soft-danger">Failed</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP">#JO2500009</a></td>
                            <td><a href="#">Noah Smith</a></td>
                            <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500009</a></td>
                            <td>Welding Machine Operator</td>
                            <td>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="#" class="avatar avatar-md avatar-rounded">
                                        <img src="assets/img/users/user-11.jpg" class="img-fluid" alt="Noah Smith">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium"><a href="#">Sophia Thomas</a></h6>
                                    </div>
                                </div>
                            </td>
                            <td>05 Feb, 2025 03:45 PM</td>
                            <td><a href="#" class="hightlightKOP">#2500009</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td><a href="#" class="hightlightKOP">Crt2500009</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                            <td>40%</td>
                            <td><span class="badge badge-soft-danger">Failed</span></td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
            <div class="tab-pane text-muted" id="nav-closedjobs" role="tabpanel">
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
                                                <iconify-icon icon="la:tools" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Equipment Name</option>
                                                    <option>Crane System</option>
                                                    <option>Hydraulic Press</option>
                                                    <option>Cooling Tower</option>
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
                            <th>
                                <div class="form-check form-check-md">
                                    <input class="form-check-input selectAll" type="checkbox">
                                    <label class="form-check-label" for="training"></label>
                                </div>
                                </th>
                                <th>Job Order ID</th>
                                <th>Client Name</th>
                                <th>Assessment No.</th>
                                <th>Equipment Name</th>
                                <th>Operators</th>
                                <th>Completion On</th>
                                <th>Card No.</th>
                                <th>Certificate No.</th>
                                <th>Score</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP greenColor">#JO2500004</a></td>
                                <td><a href="#">Sophia Wilson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500004</a></td>
                                <td>Crane Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Sophia Wilson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">David Miller</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>31 Jan, 2025 10:15 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500004</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>85%</td>
                                <td> <span class="badge bg-outline-closed pendingbadge badgecustomstyle"><span
                                            class="badge-label">Closed</span>
                                            <iconify-icon icon="material-symbols-light:tab-close-outline"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP greenColor">#JO2500005</a></td>
                                <td><a href="#">Liam Anderson</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500005</a></td>
                                <td>Bulldozer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-10.jpg" class="img-fluid" alt="Liam Anderson">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Emma Watson</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>01 Feb, 2025 01:45 PM</td>
                                <td><a href="#" class="hightlightKOP">#2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500005</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>90%</td>
                                <td> <span class="badge bg-outline-closed pendingbadge badgecustomstyle"><span
                                            class="badge-label">Closed</span>
                                            <iconify-icon icon="material-symbols-light:tab-close-outline"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input  row-checkbox" type="checkbox">
                                        <label class="form-check-label" for="training"></label>
                                    </div>
                                </td>
                                <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOP greenColor">#JO2500006</a></td>
                                <td><a href="#">Olivia Martinez</a></td>
                                <td><a href="opretaor-edit-form.php" class="hightlightKOPID">#Asmt2500006</a></td>
                                <td>Concrete Mixer Operator</td>
                                <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" class="img-fluid" alt="Olivia Martinez">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">William Brown</a></h6>
                                        </div>
                                    </div>
                                </td>
                                <td>02 Feb, 2025 09:00 AM</td>
                                <td><a href="#" class="hightlightKOP">#2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td><a href="#" class="hightlightKOP">Crt2500006</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                <td>95%</td>
                                <td> <span class="badge bg-outline-closed pendingbadge badgecustomstyle"><span
                                            class="badge-label">Closed</span>
                                            <iconify-icon icon="material-symbols-light:tab-close-outline"></iconify-icon>
                                    </span></td>
                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="job-order-details-inspection-assessment.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
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
        </div>

    </div>

</div>


<?php include("footer.php") ?>


<!-- Add SweetAlert2 Library (If not already included) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Select all tables
    const tables = document.querySelectorAll(".common-datatable");

    tables.forEach((table) => {
        const selectAllCheckbox = table.querySelector(".selectAll");
        const rowCheckboxes = table.querySelectorAll(".row-checkbox");

        if (selectAllCheckbox) {
            selectAllCheckbox.addEventListener("change", function () {
                rowCheckboxes.forEach((checkbox) => {
                    checkbox.checked = selectAllCheckbox.checked;
                });
            });

            rowCheckboxes.forEach((checkbox) => {
                checkbox.addEventListener("change", function () {
                    if (!checkbox.checked) {
                        selectAllCheckbox.checked = false;
                    } else {
                        selectAllCheckbox.checked = [...rowCheckboxes].every((cb) => cb.checked);
                    }
                });
            });
        }
    });

    // Handle the download button click event (Works for all tables)
    document.querySelector(".downloadBtn").addEventListener("click", function (event) {
        event.preventDefault();

        // Find all checked job orders across all tables
        const selectedRows = document.querySelectorAll(".row-checkbox:checked");

        if (selectedRows.length === 0) {
            Swal.fire({
                icon: "warning",
                title: "No Job Order Selected",
                text: "You have not selected any job order to download.",
                confirmButtonText: "OK"
            });
            return;
        }

        // Show download selection SweetAlert
        Swal.fire({
            html: `
            <div class="mainBox">
               <div class="MNop">
                 <div class="iconKO"><iconify-icon icon="material-symbols:download"></iconify-icon></div>
                  <h6>What do you want to download? <span>Select and download multiple documents with checkboxes</span></h6>
               </div>
               <div class="bdBody">
                 <div class="checkboxList">
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-certificate" checked>
                        <label class="form-check-label" for="swal-certificate">Certification Form</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-checklist" checked>
                        <label class="form-check-label" for="swal-checklist">Certificate</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-fir" checked>
                        <label class="form-check-label" for="swal-fir">Assessment Card</label>
                    </div>
                  
               </div>

               <div class="letterHeadBox">
                    <p>Select the documents you want to download by checking the boxes (Certification Form, Certificate, Assessment Card), then click the download button.</p>
                    <div class="form-check form-check-md">
                        <input class="form-check-input" type="checkbox" id="swal-letterhead">
                        <label class="form-check-label" for="swal-letterhead">Do you want to download with letterhead?</label>
                    </div>
               </div>
               </div>
             
               <div class="swal-footer">
                    <button id="swal-download-btn" class="btn btn-primary">Download</button>
                    <button id="swal-cancel-btn" class="btn btn-secondary">Cancel</button>
               </div>
            </div>
            `,
            showConfirmButton: false,
            showCancelButton: false,
            didOpen: () => {
                document.getElementById("swal-download-btn").addEventListener("click", function () {
                    let selectedItems = [];
                    if (document.getElementById("swal-certificate").checked) selectedItems.push("Certificate");
                    if (document.getElementById("swal-checklist").checked) selectedItems.push("Checklist");
                    if (document.getElementById("swal-fir").checked) selectedItems.push("FIR");
             

                    if (selectedItems.length === 0) {
                        Swal.showValidationMessage("Please select at least one document.");
                        return;
                    }

                    Swal.fire({
                        html: `
                        <div style="text-align: center;">
                            <div class="swalalert_custom_icon">
                                <img src="assets/img/newimages/nutmeg.gif" alt="Success">
                            </div>
                            <h2 class="Swal_CustomTitle">Download Successfully!</h2>
                            <p>The document has been downloaded successfully.</p>
                        </div>`,
                        confirmButtonText: "OKAY"
                    });

                    console.log("Downloading documents...");
                });

                document.getElementById("swal-cancel-btn").addEventListener("click", function () {
                    Swal.close();
                });
            }
        });
    });
});


</script>


<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".renewBtn").addEventListener("click", function (event) {
        event.preventDefault();

        // Find all checked job orders
        const selectedRows = document.querySelectorAll(".row-checkbox:checked");

        if (selectedRows.length === 0) {
            Swal.fire({
                icon: "warning",
                title: "No Job Order Selected",
                text: "You have not selected any job order to merge.",
                confirmButtonText: "OK"
            });
            return;
        }

        // Get selected DLS numbers
        let dlsNumbers = [];
        selectedRows.forEach(row => {
            let dlsNumber = row.closest("tr").querySelector(".hightlightKOPID").innerText;
            dlsNumbers.push(dlsNumber);
        });

        // Generate new Job Order ID (this should ideally come from the backend)
        let newJobOrderID = `#JO${Math.floor(1000000 + Math.random() * 9000000)}`;

        // Show confirmation SweetAlert with selected DLS numbers
        Swal.fire({
            title: "Are you sure?",
            html: `Do you want to create the selected  Assessment <br> numbers  into one job?<br><strong>${dlsNumbers.join(", ")}</strong>`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, Create",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                // Show success message
                Swal.fire({
                    icon: "success",
                    title: "Assessment Combined <br> in one job",
                    html: `A new job has been created with Job Order ID: <strong>${newJobOrderID}</strong>`,
                    confirmButtonText: "OK"
                }).then(() => {
                    // Redirect to another page (modify the URL accordingly)
                    window.location.href = "renewal-jobs.php" + newJobOrderID;
                });

                console.log("Merging job orders into new job:", newJobOrderID);
            }
        });
    });
});
</script>

<style>
    div#swal2-html-container {
    padding: 0 !important;
}
.swal2-popup.swal2-modal.swal2-show {
    padding: 0;
}
.swal-footer {
    padding: 10px 15px;
    border-top: 1px solid #ececec;
    text-align: end;
}
.swal2-actions {
    padding-bottom: 20px;
}
.swal2-validation-message {
    background: #8a7f7f00;
}
div#swal2-html-container {
    font-size: 15px;
}
</style>