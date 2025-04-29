<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">
    <div class="client_detailContainer">
        <div class="leftSideBar">
            <form action="#">
                <div class="card sideprofile">
                    <div class="card-body">
                        <div class="sidepro">
                            <div class="nnBox">
                                <div class="avtar_box">
                                    <div class="avatar-upload">
                                        <div class="avatar-edit">
                                            <input type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
                                            <label for="imageUpload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagePreview"
                                                style="background-image: url('assets/img/newimages/userdummy.png');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clientBasic">
                                    <h5 class="clientName">Amit Patel</h5>
                                    <p class="clientEmail">amitPatel24@gmail.com</p>
                                </div>
                            </div>
                            <div class="clientDetails">
                                <div class="user-fields-container">
                                    <h5 class="infoTitle">Basic Info</h5>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Client Id</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="#CL0001" readonly>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Client Name</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="Amit Patel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Representative Name</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="Infinix">
                                            </div>
                                        </div>
                                    </div>
                                 

                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Email:</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value="amitPatel24@gmail.com"></div>
                                        </div>
                                    </div>

                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Contact No.</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value="+927959754829"></div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Location</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="B2b">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Work Location</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="B2b">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Region</div>
                                            <div class="">
                                            <select class="select2">
                                                <option>Select</option>
                                                <option value="Manager">New Delhi</option>
                                                <option value="Supervisor">Bangalore</option>
                                                <option value="Trainer">Mumbai</option>
                                                <option value="Inspector/Assessor">Pune</option>
                                                <option value="Accountant">Karnatka</option>
                                            </select>
                                            </div>
                                    </div>

                                    
                                    <div class="requestverification_button">
                                        <button type="button" class="buttonRequest_verify">
                                            <iconify-icon icon="tdesign:save"></iconify-icon> Save Changes
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>

        <div class="rightSideClientDetails">
            <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Client Details</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Details</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <!-- <div class="mb-2">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#createjoborder" aria-controls="offcanvasRight"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Create Job
                    Order
                </a>
            </div> -->
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
                <div class="tab-container position-relative">
                    <!-- Left arrow -->
                    <button class="scroll-btn left-arrow" aria-label="Scroll left">
                        &#8592;
                    </button>
                    
                    <!-- Tabs -->
                    <nav class="nav nav-style-6 nav-pills d-block tab-list" role="tablist">
                    <!-- <a class="nav-link " data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-allLocations"
                            aria-selected="false">All Locations
                          </a> -->
                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                            aria-selected="false">New Job Orders
                            <span class="badge bg-warning-transparent ms-1">08</span></a>

                        <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">Pending
                            Job Orders
                            <span class="badge bg-secondary-transparent ms-1">03</span></a>
                        <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress" aria-selected="true">In
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
                        <!-- <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-closedjobs"
                            aria-selected="false">Closed Job Orders
                            <span class="badge bg-info-closed ms-1">10</span>
                        </a> -->
                    </nav>

                    <!-- Right arrow -->
                    <button class="scroll-btn right-arrow" aria-label="Scroll right">
                        &#8594;
                    </button>
                </div>
            </div>
            <div class="tab-content">
            <!-- <div class="tab-pane text-muted" id="nav-allLocations" role="tabpanel">
                    <div class="docfilterbutton">
                        <h2 class="tabinnerTitle">All Locations</h2>
                        <div class="RightTabinr_container">
                        
                            <button class="btn btn-sm addiconiButton commonAddnewButton btn-primary ms-3" type="button"  data-bs-toggle="modal" data-bs-target="#add_Location">
                                <iconify-icon icon="lets-icons:add-round">
                                </iconify-icon> Add Location
                            </button>
                        </div>
                    </div>
                    <div class="custom-datatable-filter">
                        <table class="table common-datatable withoutActionTR nowrap w-100">
                            <thead class="thead-light">
                                <tr>
                                    <th>Representative Name</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Jim Smith</td>
                                    <td>9567823654</td>
                                    <td>jimsmith@gmail.com</td>
                                    <td>
                                    <div class="addressRep">
                                       Akshya Nagar 1st Block 1st Cross, Rammurthy nagar, Bangalore-560016 India
                                    </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span class="badge-label">Active</span>
                                            <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                        </span>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                              data-bs-toggle="modal" data-bs-target="#add_users"
                                                href="#">
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
                                    <td>Sarah Johnson</td>
                                    <td>8456237894</td>
                                    <td>sarahj@gmail.com</td>
                                    <td>
                                        <div class="addressRep">
                                            25th Main Road, Jayanagar, Bangalore-560041 India
                                        </div>
                                    </td>
                                    <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span class="badge-label">Active</span>
                                            <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                                data-bs-target="#add_users" href="#">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                    </span>
                                                </span>
                                            </a>
                                            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                    <td>Michael Brown</td>
                                    <td>7896543210</td>
                                    <td>michaelb@gmail.com</td>
                                    <td>
                                        <div class="addressRep">
                                            10th Avenue, MG Road, Bangalore-560001 India
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-outline-danger pendingbadge badgecustomstyle"><span class="badge-label">Inactive</span>
                                            <iconify-icon icon="mdi:close-circle-outline"></iconify-icon>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center ActionDropdown">
                                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal"
                                                data-bs-target="#add_users" href="#">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                                    </span>
                                                </span>
                                            </a>
                                            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                                                <span class="icon">
                                                    <span class="feather-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                </div> -->
                <div class="tab-pane show active  text-muted" id="nav-newjobs" role="tabpanel">
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
                                    <td>NDT</td>
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
                                    <td><a href="manage-template.php" target="_blank"
                                            class="tablelink_data">Pre-Construction Review</a> </td>
                                  
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
                                   
                                    <td>Inspection</td>
                                    <td>Chennai</td>
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
                                    
                                    <td>NDT</td>
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
                                   
                                    <td>Inspection</td>
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
                                    <td>Safety Compliance Check</td>
                                
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
                                                class="badge-label">Completed</span>
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
                                    <td>Training</td>
                                    <td>Banglore</td>
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
                                                class="badge-label">Completed</span>
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
                                    <td>Gujrat</td>
                                    <td>Inspection</td>
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
                                    
                                    <td>Training</td>
                                    <td>Banglore</td>
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
                                <label class="form-label">Client ID</label>
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
                                <label class="form-label">Department</label>
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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-label">Deadline</label>
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
                                <label class="form-label">Location (Client site)</label>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Select Part</label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="1">Control Panel</option>
                                    <option value="2">Motors</option>
                                    <option value="3">Sensors</option>
                                    <option value="4">Limit Switches</option>
                                    <option value="5">Remote Controls</option>
                                    <option value="6">Winch</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Checklist Template </label>
                                <select name="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Template 1">Template 1</option>
                                    <option value="Template 2">Template 2</option>
                                    <option value="Template 3">Template 3</option>
                                </select>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select name="" id="" class="form-control select2">
                                    <option disabled="" selected="" value="">Please Select...</option>
                                    <option value="Pending">Pending</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Approved">Approved</option>

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
<!-- Add client -->
<div class="modal fade custombottm_modalStyle" id="add_users">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title locationTitleEdit">Edit Location & Representative Details</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="client-detail.php">
				<div class="modal-body">
					<div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Representative Name</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Contact No.</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Representative Status</label>
                                        <select class="select2">
                                        <option disabled selected readonly>Select option</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                               <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Address Line 1</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Address Line 2 (Optional)</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Town/City</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Postal Code</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                        
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary canvasSubmit_button">Update</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Users -->

<!-- Add client -->
<div class="modal fade custombottm_modalStyle" id="add_Location">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title locationTitleEdit">Add Location & Representative Details</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="client-detail.php">
				<div class="modal-body">
					<div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Representative Name</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Contact No.</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Representative Status</label>
                                        <select class="select2">
                                        <option disabled selected readonly>Select option</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                               <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Address Line 1</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                    <label class="form-label">Address Line 2 (Optional)</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Town/City</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Country</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Postal Code</label>
                                    <input type="text" class="form-control">
                                    </div>
                                </div>
                        
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary canvasSubmit_button">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Users -->

<?php include("footer.php") ?>

<!-- pROFILE UPDATE JS -->
<script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function () {
            readURL(this);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
    const tabList = document.querySelector(".tab-list");
    const leftArrow = document.querySelector(".left-arrow");
    const rightArrow = document.querySelector(".right-arrow");

    leftArrow.addEventListener("click", () => {
        tabList.scrollBy({ left: -150, behavior: "smooth" });
    });

    rightArrow.addEventListener("click", () => {
        tabList.scrollBy({ left: 150, behavior: "smooth" });
    });
});

    </script>

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