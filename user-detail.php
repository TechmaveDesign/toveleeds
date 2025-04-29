<?php include("header.php") ?>
<style>
   .tabContent .tab-content.tab-mainBox {
    display: none;
}
  .tabContent .tab-content.tab-mainBox.active {
    display: block;
}
.tabsButtonBox {
    display: flex;
    align-items: center;
    gap:5px;
    /* margin-top: 1px; */
    /* border-bottom: 1px solid #ececec; */
    /* padding: 5px 5px; */
}
.tabsButtonBox .tab-button {
    display: block;
    background: #f7f7f7;
    border: none;
    /* width: 33.33%; */
    padding: 6px 15px;
    font-weight: 400;
    margin-bottom: 0;
    font-size: 14px;
    border-radius: 5px;
}
.tabsButtonBox .tab-button.active {
    background: #157bbc;
    color: #ffffff;
}

/*  */
.tabs-container {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    overflow: hidden;
    padding: 5px 10px;
    border-bottom: 1px solid #ececec;
}

  .scroll-button {
    background-color: #ffffff;
    border: none;
    padding: 0px 5px;
    cursor: pointer;
    font-size: 18px;
    z-index: 2;
    border-radius: 50px;
    margin: 5px ;
    border: 1px solid #157bbc;
    color: #157bbc;
}

  .scroll-button:hover {
    background-color: #157bbc;
    color: #fff;
  }

  .tabsButtonBox {
    display: flex;
    overflow-x: auto;
    scroll-behavior: smooth;
    white-space: nowrap;
    scrollbar-width: none;
    -ms-overflow-style: none;
    flex-grow: 1;
  }

  .tabsButtonBox::-webkit-scrollbar {
    display: none;
  }

  /* .tab-button {
    flex: 0 0 auto;
    padding: 10px 15px;
    margin: 5px;
    white-space: nowrap;
  } */
</style>
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
                                        <div class="custom-field-name">Inspector ID</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="#INSPE0001">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Inspector Name</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="Amit Patel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Designation</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input" value="Manager">
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
                                        <div class="custom-field-name">Mobile No.</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value="+927959754829"></div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Address Line 1</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value=""></div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Address Line 2</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value=""></div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Town/City</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value=""></div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Country</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value=""></div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Postal Code</div>
                                        <div class="custom-field-value">
                                            <div><input type="text" placeholder="" class="r-user-input"
                                                    value=""></div>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Role</div>
                                        <div class="">
                                            <select class="select2">
                                                <option>Select</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Supervisor">Supervisor</option>
                                                <option value="Trainer">Trainer</option>
                                                <option value="Inspector/Assessor">Inspector/Assessor</option>
                                                <option value="Accountant">Accountant</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="user-custom-field">
                                        <div class="custom-field-name">Department</div>
                                        <div class="">
                                            <div class="form-group">
                                                <!-- <label class="form-label"></label> -->
                                                <div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
                                                    <button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <span class="selected-count">Select Department</span>
                                                        <!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
                                                    </button>
                                                    <div
                                                        class="dropdown-menu customdropdownmenu_style available-users-dropdown">
                                                        <div class="filTerSearchMain">
                                                            <input type="text" class="filterclSearch available-users-search"
                                                                placeholder="Search Department">
                                                            <iconify-icon icon="basil:search-outline"></iconify-icon>
                                                        </div>
                                                        <div class="sellallitemsMain">
                                                            <div class="CustomselectallContainer">
                                                                <input type="checkbox"
                                                                    class="select-all-available-users form-check-input">
                                                                Select All
                                                            </div>
                                                            <div class="clDivider_full"></div>
                                                        </div>
                                                        <div class="Customdrpitems_container">
                                                            <div class="mainoptionContainer">
                                                                <div class="dropfilter_options">
                                                                    <input type="checkbox"
                                                                        class="individual-option form-check-input">
                                                                        Inspection
                                                                </div>
                                                            </div>
                                                            <div class="mainoptionContainer">
                                                                <div class="dropfilter_options">
                                                                    <input type="checkbox"
                                                                        class="individual-option form-check-input">
                                                                    NDT
                                                                </div>
                                                            </div>
                                                            <div class="mainoptionContainer">
                                                                <div class="dropfilter_options">
                                                                    <input type="checkbox"
                                                                        class="individual-option form-check-input">
                                                                    Training
                                                                </div>
                                                            </div>
                                                            <div class="mainoptionContainer">
                                                                <div class="dropfilter_options">
                                                                    <input type="checkbox"
                                                                        class="individual-option form-check-input">
                                                                    Operator Assessment
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <p class="no-data" style="display: none;">No data found</p>
                                                    </div>
                                                </div>
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
                                    <div class="user-custom-field">
                                    <div class="form-group">
                                    <label class="form-label">Upload Signature</label>
                                    <input name="file1" type="file" class="dropify" data-height="100" />
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
            <h2 class="mb-1">Inspector Details</h2>
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
        <div class="tabs-container">
  <button class="scroll-button scroll-left" onclick="scrollTabs(-100)" id="scrollLeft"> &#8592;</button>
  <div class="tabs tabsButtonBox" id="tabsBox" onscroll="checkScrollButtons()">
    <button class="tab-button active" onclick="showContent(event, 'tab1')">Assign Jobs</button>
    <button class="tab-button" onclick="showContent(event, 'tab2')">Assign Label Usage</button>
    <button class="tab-button" onclick="showContent(event, 'tab3')">Raised Sticker/Tag Request</button>
    <button class="tab-button" onclick="showContent(event, 'tab4')">Receive Sticker/Tag Request</button>
    <button class="tab-button" onclick="showContent(event, 'tab5')">Raised Sticker/Tag Request From Admin</button>
  </div>
  <button class="scroll-button scroll-right" onclick="scrollTabs(100)" id="scrollRight"> &#8594;</button>
</div>
        <div id="tab-content" class="tabContent">
            <div id="tab1" class="tab-content tab-mainBox active">
                <h6 class="InnerTabTitle">All Assign Jobs</h6>
            <div class="tbuppertabs">
                <div class="tab-container position-relative">
                    <!-- Left arrow -->
                    <button class="scroll-btn left-arrow" aria-label="Scroll left">
                        &#8592;
                    </button>
                    
                    <!-- Tabs -->
                    <nav class="nav nav-style-6 nav-pills d-block tab-list" role="tablist">
                    <!-- <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-allLocations"
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
                        <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-closedjobs"
                            aria-selected="false">Closed Job Orders
                            <span class="badge bg-info-closed ms-1">10</span>
                        </a>
                    </nav>

                    <!-- Right arrow -->
                    <button class="scroll-btn right-arrow" aria-label="Scroll right">
                        &#8594;
                    </button>
                </div>
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
                                <th>Job Order ID</th>
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <!-- <th>assigned Inspector/Trainer</th> -->
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
                                <td>Kolkata</td>
                                <td>
                                    10/02/2024 15:15
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
                                <td>Mumbai</td>
                                <td>11/02/2024 10:45</td>
                                
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
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Department</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <!-- <th>assigned Inspector/Trainer</th> -->
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
                                <!-- <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid"
                                                alt="Stephan Peralt">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                                        </div>
                                    </div>
                                </td> -->
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
                                <!-- <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Alex Doe">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Alex Doe</a></h6>
                                        </div>
                                    </div>
                                </td> -->
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
                                <!-- <td>
                                    <div class="d-flex align-items-center file-name-icon">
                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                            <img src="assets/img/users/userdummy.png" class="img-fluid" alt="Mia Lee">
                                        </a>
                                        <div class="ms-2">
                                            <h6 class="fw-medium"><a href="#">Mia Lee</a></h6>
                                        </div>
                                    </div>
                                </td> -->
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
                                <!-- <th>assigned Inspector/Trainer</th> -->
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
                                <th>client ID</th>
                                <th>Client Name</th>
                                <th>Departments</th>
                                <th>Region</th>
                                <th>Scheduled date/time</th>
                                <!-- <th>assigned Inspector/Trainer</th> -->
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
                                <!-- <th>assigned Inspector/Trainer</th> -->
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
                                <!-- <th>assigned Inspector/Trainer</th> -->
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
            <div id="tab2" class="tab-content tab-mainBox">
            <h6 class="InnerTabTitle">All Assign Label Usage</h6>

            <div class="tbuppertabs">
                <div class="tab-container position-relative">
                    <!-- Left arrow -->
                    <!-- <button class="scroll-btn left-arrow" aria-label="Scroll left">
                        &#8592;
                    </button> -->
                    
                    <!-- Tabs -->
                    <nav class="nav nav-style-6 nav-pills d-block tab-list px-0" role="tablist">
                    <!-- <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-allLocations"
                            aria-selected="false">All Locations
                          </a> -->
                        <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newSticker"
                            aria-selected="false">Sticker Usage
                           </a>

                        <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-Tag" aria-selected="true">
                            Tag Usage
                           </a>
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

                    <!-- Right arrow -->
                    <!-- <button class="scroll-btn right-arrow" aria-label="Scroll right">
                        &#8594;
                    </button> -->
                </div>
            </div>
            <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newSticker" role="tabpanel">
                <div class="custom-datatable-filter">
                <div class="custom-datatable-filter">
                <header class="task-header">
                    <div class="d-flex align-items-center">
                        <div class="Ticket_apr_info whoraisedthis_action">
                           
                            <!-- <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Sticker Id</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">AEF - 0129</a>
                                    </h3>
                                </div>
                            </div> -->
                            <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Assign Range</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">001 - 500</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Available Range</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">300 - 500</a>
                                    </h3>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="enquiryRight_header_data TaskAction_wrapper ">
                        <div class="enquiryID_container">
                            <div class="EnquiryID">Label Status</div>
                            <div class="IDButton approval_status_update">
                                <button type="button" class="SourceDataBtn success">
                                    In Stock
                                </button>
                            </div>
                        </div>

                        <!-- <button class="ApproveButton" id="approveButton" data-bs-toggle="modal" data-bs-target="#approvalModal">
                <iconify-icon icon="icon-park-outline:check"></iconify-icon>
                Approve
                </button> -->

                    </div>

                </header>
                <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Job Order Id</th>
                                <th>Equipment</th>
                                <th>Sticker ID</th>
                                <th>Used Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12345</a></td>
                                <td>Air Compressor</td>
                                <td>001</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12345</a></td>
                                <td>Air Compressor</td>
                                <td>002</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12396</a></td>
                                <td>Asphalt Paving Machine / Paver</td>
                                <td>003</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12396</a></td>
                                <td>Backhoe Loaderr</td>
                                <td>004</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
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

            <div class="tab-pane text-muted" id="nav-in-Tag" role="tabpanel">
                <div class="custom-datatable-filter">
                <div class="custom-datatable-filter">
                <header class="task-header">
                    <div class="d-flex align-items-center">
                        <div class="Ticket_apr_info whoraisedthis_action">
                           
                            <!-- <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Tag Id</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">AEF - 0129</a>
                                    </h3>
                                </div>
                            </div> -->
                            <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Assign Range</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">001 - 500</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Available Range</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">300 - 500</a>
                                    </h3>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="enquiryRight_header_data TaskAction_wrapper ">
                        <div class="enquiryID_container">
                            <div class="EnquiryID">Label Status</div>
                            <div class="IDButton approval_status_update">
                                <button type="button" class="SourceDataBtn success">
                                    In Stock
                                </button>
                            </div>
                        </div>

                        <!-- <button class="ApproveButton" id="approveButton" data-bs-toggle="modal" data-bs-target="#approvalModal">
                <iconify-icon icon="icon-park-outline:check"></iconify-icon>
                Approve
                </button> -->

                    </div>

                </header>
                <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Job Order Id</th>
                                <th>Equipment</th>
                                <th>Tag ID</th>
                                <th>Used Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12345</a></td>
                                <td>Air Compressor</td>
                                <td>001</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12345</a></td>
                                <td>Air Compressor</td>
                                <td>002</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12396</a></td>
                                <td>Asphalt Paving Machine / Paver</td>
                                <td>003</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td><a href="inspection-job-order-detail.php">#JOB-12396</a></td>
                                <td>Backhoe Loaderr</td>
                                <td>004</td>
                                <td>
                                    10/02/2024 15:15
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Used</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
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
            <div id="tab3" class="tab-content tab-mainBox">
             <div class="topHeadKOP">
                <h6>All Raised Sticker/Tag Request</h6>
                <a href="#" class="RaisedBtn" data-bs-toggle="modal" data-bs-target="#raiseRequest"><iconify-icon icon="pepicons-pop:label"></iconify-icon> Raise Request</a>
             </div>
              <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                <div class="row">
                <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <!-- <div class="col-lg-3 col-sm-6 col-12">
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
                                        </div> -->
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
                                                <iconify-icon icon="pepicons-pop:label" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Label Type</option>
                                                    <option>Sticker</option>
                                                    <option>Tag</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="f7:status" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Status</option>
                                                    <option>Approval Pending</option>
                                                    <option>Approved</option>
                                                    <option>Collected</option>
                                                    <option>Transfered</option>

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
                </div>
                
                <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Inspector</th>
                                <th>Label Type</th>
                                <th>Requested Qty.</th>
                                <th>Requested On</th>
                                <th>Transfered Range</th>
                                <th>Transfered Qty.</th>
                                <th>Transfered On</th>
                                <th>Status</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>ST001-ST0015</td>
                                <td>15</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Collected</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-33.jpg" class="img-fluid" alt="Jessica Harper">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Jessica Harper</a></h6>
									</div>
								</div>
                                </td>
                                <td>Tag</td>
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    --
                                </td>
                                <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Approval Pending</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>

                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-29.jpg" class="img-fluid" alt="Jessica Harper">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Himani</a></h6>
									</div>
								</div>
                                </td>
                                <td>Tag</td>
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    --
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>

                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                  <div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Michael Scott">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
									</div>
								</div>
                                </td>
                                <td>Sticker</td>
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>ST001-ST0015</td>
                                <td>15</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>
                                <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span class="badge-label">Transferd</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>

                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            
                        </tbody>
                    </table>


                </div>
            </div>
            <div id="tab4" class="tab-content tab-mainBox">
            <div class="topHeadKOP">
                <h6>All Received Sticker/Tag Request</h6>
                <!-- <a href="#" class="RaisedBtn" data-bs-toggle="modal" data-bs-target="#raiseRequest"><iconify-icon icon="pepicons-pop:label"></iconify-icon> Raise Request</a> -->
             </div>
              <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                <div class="row">
                <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <!-- <div class="col-lg-3 col-sm-6 col-12">
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
                                        </div> -->
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
                                                <iconify-icon icon="pepicons-pop:label" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Label Type</option>
                                                    <option>Sticker</option>
                                                    <option>Tag</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="f7:status" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Status</option>
                                                    <option>Approval Pending</option>
                                                    <option>Approved</option>
                                                    <option>Collected</option>
                                                    <option>Transfered</option>

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
                </div>
                
                <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Inspector</th>
                                <th>Label Type</th>
                                <th>Requested Qty.</th>
                                <th>Requested On</th>
                                <th>Transfered Range</th>
                                <th>Transfered Qty.</th>
                                <th>Transfered On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
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
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>ST001-ST0015</td>
                                <td>15</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Collected</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>--</td>
     
                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-33.jpg" class="img-fluid" alt="Jessica Harper">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Jessica Harper</a></h6>
									</div>
								</div>
                                </td>
                                <td>Tag</td>
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    --
                                </td>
                                <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Approval Pending</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>--</td>

                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                <div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-29.jpg" class="img-fluid" alt="Jessica Harper">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Himani</a></h6>
									</div>
								</div>
                                </td>
                                <td>Tag</td>
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>--</td>
                                <td>--</td>
                                <td>
                                    --
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="transferBtn" data-bs-toggle="modal" data-bs-target="#transferRequest"><iconify-icon icon="mingcute:transfer-line"></iconify-icon> Transfer</a>
                                </td>

                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            <tr>
                                <td>
                                  <div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-09.jpg" class="img-fluid" alt="Michael Scott">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
									</div>
								</div>
                                </td>
                                <td>Sticker</td>
                                <td>18</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>ST001-ST0015</td>
                                <td>15</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>
                                <span class="badge bg-outline-secondary pendingbadge badgecustomstyle"><span class="badge-label">Transferd</span>
                                        <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                    </span>
                                </td>
                                <td>--</td>

                                <!-- <td>
                                    <div class="d-flex align-items-center ActionDropdown">

                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="inspection-job-order-detail.php">
                                            <span class="icon">
                                                <span class="feather-icon">
                                                    <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                                </span>
                                            </span>
                                        </a>
                                    

                                        
                                    </div>
                                </td> -->
                            </tr>
                            
                        </tbody>
                    </table>


                </div>
            </div>
            <div id="tab5" class="tab-content tab-mainBox">
            <div class="topHeadKOP">
                <h6>Raised Sticker/Tag Request From Admin</h6>
                <a href="#" class="RaisedBtn" id="RaiseRequest"><iconify-icon icon="pepicons-pop:label"></iconify-icon> Raise Request</a>
             </div>
              <div class="custom-datatable-filter">
                <div id="tablefiltesa_container">
                <div class="row">
                <div class="col-lg-12">
                                <div class="leftprFilters">
                                    <div class="row">
                                    <!-- <div class="col-lg-3 col-sm-6 col-12">
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
                                        </div> -->
                                       
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
                                        <div class="col-lg-3 col-sm-6 col-12">
                                            <div class="input-blocks">
                                                <!-- <i data-feather="box" class="info-img"></i> -->
                                                <iconify-icon icon="f7:status" class="info-img"></iconify-icon>
                                                <select class="select2">
                                                    <option disabled selected>Select Status</option>
                                                    <option>Approval Pending</option>
                                                    <option>Approved</option>
                                                    <option>Collected</option>
                                                    <option>Transfered</option>

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
                </div>
                
                <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Requested On</th>
                                <th>Label Type</th>
                                <th>Assign Range</th>
                                <th>Collected On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>Sticker</td>
                                <td>ST001-ST0015</td>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Collected</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>--</td>
     
                            </tr>
                            <tr>
                                <td>
                                    10/02/2024 
                                </td>
                                <td>Tag</td>
                                <td>--</td>
                                <td>--</td>
                                
                                <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span class="badge-label">Approval Pending</span>
                                        <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                    </span>
                                </td>
                                <td>--</td>

                            </tr>
                            <tr>
                               <td>
                                    10/02/2024 
                                </td>
                                <td>Tag</td>
                                <td>ST0110-ST00120</td>
                                <td>--</td>
                                <td>
                                    <span class="badge bg-outline-success pendingbadge badgecustomstyle"><span
                                            class="badge-label">Approved</span>
                                        <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                    </span>
                                </td>
                                <td>
                                    <a href="#" class="transferBtn" id="collect"><iconify-icon icon="fluent:collections-24-regular"></iconify-icon> Collect</a>
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

<!--Rasie sticker/Tag -->
<div class="modal fade custombottm_modalStyle" id="raiseRequest">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title locationTitleEdit">Raise Stiker/Tag Request</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="#">
				<div class="modal-body">
					<div class="row">

                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <!-- <i data-feather="box" class="info-img"></i> -->
                            <label class="form-label">Inspector</label>
                            <select class="select2">
                                <option disabled selected>Please select..</option>
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
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <!-- <i data-feather="box" class="info-img"></i> -->
                            <label class="form-label">Label Type</label>
                            <select class="select2">
                                <option disabled selected>Please select..</option>
                                <option>Sticker</option>
                                <option>Tag</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                        <label class="form-label">Quntity</label>
                        <input type="text" class="form-control">
                        </div>
                    </div>
                               
                        
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary canvasSubmit_button" data-bs-dismiss="modal" aria-label="Close">Raise Request</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Users -->

<!-- Sticker Transfer -->
<div class="modal fade custombottm_modalStyle" id="transferRequest">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title locationTitleEdit">Transfer Stiker/Tag </h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="#">
				<div class="modal-body">
					<div class="row">

                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <!-- <i data-feather="box" class="info-img"></i> -->
                            <label class="form-label">Inspector</label>
                            <input type="text" class="form-control" value="Cavin John">

                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-12">
                        <div class="form-group">
                            <!-- <i data-feather="box" class="info-img"></i> -->
                            <label class="form-label">Label Type</label>
                            <input type="text" class="form-control" value="Sticker">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-label">Quntity</label>
                        <input type="text" class="form-control" value="18">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label class="form-label">Available Range</label>
                        <input type="text" class="form-control" value="001-050">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group transFerRange">
                        <label class="form-label">Transfer Range</label>
                        <div class="row">
                            <div class="col-lg-6">
                            <input type="text" class="form-control" value="001">
                            </div>
                            <div class="col-lg-6">
                            <input type="text" class="form-control" value="050">
                            </div>
                        </div>
                        
                        
                        </div>
                    </div>
                               
                        
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary canvasSubmit_button" data-bs-dismiss="modal" aria-label="Close">Transfer</button>
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

<!----------------------
Dropify Code Start Here
------------------------>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
	$('.dropify').dropify();

</script>
<!----------------------
Dropify Code End Here
----------------------->

<!-- TAB JS  -->
<script>
    // script.js
function showContent(event, tabId) {
    // Remove active class from all tab buttons
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
        button.classList.remove('active');
    });

    // Remove active class from all tab contents
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(content => {
        content.classList.remove('active');
    });

    // Add active class to the clicked tab button
    event.currentTarget.classList.add('active');

    // Add active class to the corresponding tab content
    const contentToShow = document.getElementById(tabId);
    contentToShow.classList.add('active');
}

</script>

<script>
  const tabsBox = document.getElementById("tabsBox");
  const scrollLeftBtn = document.getElementById("scrollLeft");
  const scrollRightBtn = document.getElementById("scrollRight");

  function scrollTabs(amount) {
    tabsBox.scrollBy({ left: amount, behavior: "smooth" });
  }

  function checkScrollButtons() {
    // Show left button if scrolled beyond the leftmost edge
    scrollLeftBtn.style.display = tabsBox.scrollLeft > 0 ? "block" : "none";

    // Show right button if there is more content to scroll
    scrollRightBtn.style.display = 
      tabsBox.scrollLeft + tabsBox.clientWidth < tabsBox.scrollWidth ? "block" : "none";
  }

  // Check scroll buttons on window load
  window.onload = checkScrollButtons;
</script>

<!-- Include SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<script>
    $(document).ready(function () {
        $("#collect").on("click", function (e) {
            e.preventDefault();
            
            let row = $(this).closest("tr"); // Get the current row
            
            // Show SweetAlert
            Swal.fire({
                html: `
                    <div style="text-align: center;">
                        <div class="swalalert_custom_icon">
                            <img src="assets/img/newimages/nutmeg.gif" alt="Success">
                        </div>
                        <h2 class="Swal_CustomTitle">Collected Successfully!</h2>
                        <p>The item has been collected successfully.</p>
                    </div>`,
                confirmButtonText: "Okay Great",
                customClass: {
                    confirmButton: "my-ok-button"
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    // Change the status badge in the current row
                    let statusCell = row.find("td:nth-child(8)"); // 8th column
                    statusCell.html(`
                        <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                            <span class="badge-label">Collected</span>
                            <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                        </span>
                    `);
                    
                    // Remove the Collect button
                    row.find("td:last-child").html("--");
                }
            });
        });
    });
</script>




<script>
    $(document).ready(function () {
        // Raise Request Functionality
        $("#RaiseRequest").on("click", function (e) {
            e.preventDefault();
            
            Swal.fire({
                // title: "Select Label Type",
                html: `
                   <div class="LabelConet">
                     <h5>Choose the Label Type</h5>
                    <p>Choose the label type that best suits your needs</p>
                   </div>
                    <div class="radio-button-group">
                        <label class="radio-button">
                            <input type="radio" name="labelType" value="Sticker">
                            <span class="button-label">
                                <span class="radio-circle"></span> Sticker
                            </span>
                        </label>
                        <label class="radio-button">
                            <input type="radio" name="labelType" value="Tag">
                            <span class="button-label">
                                <span class="radio-circle"></span> Tag
                            </span>
                        </label>
                    </div>`,
                showCancelButton: true,
                confirmButtonText: "Place Request",
                cancelButtonText: "Cancel",
                customClass: {
                    popup: "swal-custom-popup"
                },
                preConfirm: () => {
                    let selectedLabel = $('input[name="labelType"]:checked').val();
                    if (!selectedLabel) {
                        Swal.showValidationMessage("Please select a label type!");
                    }
                    return selectedLabel;
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    let selectedLabel = result.value;

                    Swal.fire({
                        html: `
                            <div style="text-align: center;">
                                <div class="swalalert_custom_icon">
                                    <img src="assets/img/newimages/nutmeg.gif" alt="Success">
                                </div>
                                <h2 class="Swal_CustomTitle">Request Successfully Placed!</h2>
                                <p>Your request for <strong>${selectedLabel}</strong> has been placed successfully.</p>
                            </div>`,
                        confirmButtonText: "Okay",
                        customClass: {
                            confirmButton: "my-ok-button"
                        }
                    });
                }
            });
        });
    });
</script>

<!-- Custom CSS for Button-Style Radio Selection -->
<style>
    .radio-button-group {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 10px;
    }

    .radio-button {
        position: relative;
        display: inline-block;
    }

    .radio-button input {
        display: none;
    }

    .button-label {
    display: flex;
    align-items: center;
    background: #f8f8f8;
    border: 1px solid #dddddd;
    border-radius: 30px;
    padding: 8px 10px;
    font-size: 15px;
    font-weight: 400;
    color: #333;
    cursor: pointer;
    transition: 0.3s;
    position: relative;
    width: 100px;
    text-align: center;
}

.radio-circle {
    width: 16px;
    height: 16px;
    border: 2px solid #afb3af;
    border-radius: 50%;
    margin-right: 8px;
    position: relative;
    transition: 0.3s;
}
    /* Checked State */
    .radio-button input:checked + .button-label {
    background: #4CAF50;
    color: white;
    border-color: #4CAF50;
}

.radio-button input:checked + .button-label .radio-circle {
    background: white;
    border: 4px solid white;
    box-shadow: 0 0 0 4px #0e9314;
}

    .button-label:hover {
        background: #e0e0e0;
    }

    .radio-button input:checked + .button-label:hover {
        background: #4CAF50;
    }

    .swal-custom-popup {
        width: 400px;
    }
    h2#swal2-title {
    font-size: 20px;
}
div:where(.swal2-container) div:where(.swal2-html-container) {
    padding: 0;
}
.LabelConet p {
    font-size: 13px;
    margin-bottom: 22px;
}
.LabelConet h5 {
    font-size: 18px;
    margin-bottom: 5px;
}
</style>