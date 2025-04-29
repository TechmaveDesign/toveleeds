<?php include("header.php") ?>

<!-- Fancybox CSS -->
<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
<!-- Owl carousel CSS -->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<!-- Page Wrapper -->
<div class="content pb-0">

<!-- Breadcrumb -->
<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb topHeaderBredcrumb ">
    <div class="my-auto mb-2">
        <h2 class="mb-1">Job Order ID: #JO2500000</h2>
        <nav>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="index.html"><i class="ti ti-smart-home"></i></a>
                </li>
                <li class="breadcrumb-item">
                    <a href="job-orders.php">Job Orders List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Job Order Details</li>
            </ol>
        </nav>
    </div>
    <div class="d-flex  right-content align-items-center flex-wrap ">
        <div class="mb-2 me-2" id="addStickerBtn">
            <a href="#"
                class="btn btn-primary d-flex align-items-center cmnaddbtn downloadBtn">
                <iconify-icon icon="proicons:pdf"></iconify-icon> Download PDF
            </a>
        </div>

        <div class="mb-2 me-2" id="addTagBtn" style="display: none;">
            <a href="#"
                class="btn btn-primary d-flex align-items-center cmnaddbtn downloadBtn2">
                <iconify-icon icon="proicons:pdf"></iconify-icon> Download PDF
            </a>
        </div>
   
       <div class="mb-2 d-flex gap-2 me-2">
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" class="btn btn-back d-flex align-items-center cmnaddbtn attachmentBtn">
            <iconify-icon icon="akar-icons:attach"></iconify-icon> Attachments
            </a>
        </div>
        <div class="mb-2 d-flex gap-2 me-2">
            <a href="#" class="btn btn-back d-flex align-items-center cmnaddbtn" data-bs-toggle="offcanvas" data-bs-target="#paymentActivity">
            <iconify-icon icon="icon-park-outline:flash-payment"></iconify-icon> Payment Activity
            </a>

        </div>
        <div class="mb-2 d-flex gap-2">
            <a href="inspection-job-order-list.php" class="btn btn-back d-flex align-items-center cmnaddbtn">
                <iconify-icon icon="mingcute:back-line"></iconify-icon> Back
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

<div class="MainInner_content_Start enquiryMainContainer">

    <!-- <div class="RightButtonAdd_inr_header">
        <h2>Door Survey</h2>
        <button type="button" class="CreateCst_button">
        <iconify-icon icon="heroicons:plus-20-solid"></iconify-icon> Create Door Survey
        </button>
        </div> -->

    <div class="mainDoorForm_container doordetail_wrapper">
        <form action="">
            <div class="row">
                <!-- Left Side: Tabs -->
                <div class="col-lg-3 custumColund_sidebar">
                    <div class="innerSidebarEnquiry">
                        <!-- <div class="backpage_container">
                        <a href="fdic-enquiry.php">
                            <div class="cu2-views-bar__controller-btn_toggle">
                                <iconify-icon icon="ic:round-arrow-back-ios"></iconify-icon>
                            </div>
                        </a>

                        <h2 class="content-header-title float-start mb-0">Back to Job Order's</h2>
                    </div> -->

                        <div class="enquiryDetailContainer">
                            <h5 class="SecTitleEnq">Job Order Details
                                <!-- <a href="#" data-bs-toggle="modal"
                                data-bs-target="#editEnquiry">
                                <iconify-icon icon="icon-park-outline:edit"></iconify-icon>
                            </a> -->
                            </h5>
                            <ul class="enquiryDetailsList ">
                                <li>
                                    <h6 class="detailLabel">
                                        Client Name
                                    </h6>
                                    <h6 class="detailEnq">James Hong</h6>
                                </li>
                                <li>
                                    <h6 class="detailLabel">
                                        Phone
                                    </h6>
                                    <h6 class="detailEnq">+ (401) 459-2434</h6>
                                </li>
                                <li>
                                    <h6 class="detailLabel">
                                        Email
                                    </h6>
                                    <h6 class="detailEnq">Jameshong324@gmail.com</h6>
                                </li>
                                <li>
                                    <h6 class="detailLabel">
                                        Region
                                    </h6>
                                    <h6 class="detailEnq">Delhi</h6>
                                    
                                </li>
                                <li>
                                    <h6 class="detailLabel">
                                        Schedule Date & Time
                                    </h6>
                                    <h6 class="detailEnq">10/02/2024 15:15</h6>
                                </li>

                                <li>
                                    <h6 class="detailLabel">
                                        Deadline
                                    </h6>
                                    <h6 class="detailEnq">10/02/2024</h6>
                                </li>


                                <li>
                                    <h6 class="detailLabel">
                                        Assigned Inspector
                                    </h6>
                                    <h6 class="detailEnq">Jack William</h6>
                                </li>
                            </ul>
                            <ul class="enquiryDetailsList">
                                <li>
                                    <h6 class="detailLabel">
                                        Address
                                    </h6>
                                    <h6 class="detailEnq"> Apt. 568 1458 Mervin Flats, Port Alverta, WI 72025-3283
                                    </h6>
                                </li>

                                <li>
                                    <h6 class="detailLabel">
                                        Additional Notes
                                    </h6>
                                    <h6 class="detailEnq">
                                        Please ensure that your doors and windows are locked at all times. Report
                                        any suspicious activity to the community office.
                                    </h6>
                                    <!-- <div class="LongMesage_container">
                                                <input class="refuge-collection-input tableLongMessage_Input" readonly value="Security Alert: Please ensure that your doors and windows are locked at all times. Report any suspicious activity to the community office.">
                                                <button class="view-btn tablemessageview_btn" type="button" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Click to view" data-bs-original-title="Security Alert: Please ensure that your doors and windows are locked at all times. Report any suspicious activity to the community office.">
                                                    <iconify-icon icon="ph:eye-duotone"></iconify-icon> 
                                                </button>
                                            </div> -->
                                </li>




                            </ul>
                        </div>
                    </div>



                </div>
                <!-- Right Side: Content -->
                <div class="col-lg-9 columnleftrightMargin_none">
                    <div class="topActionHeader TopHeadEnquiry">
                        <div class="leftSideEnquiryAction">
                            <!-- <button type="button" class="btn inspectionButton" data-bs-toggle="modal" data-bs-target="#createInspectionModal"><iconify-icon icon="solar:checklist-minimalistic-linear"></iconify-icon> Create Inspection</button>
                            <button type="button" class="btn inspectionButton" data-bs-toggle="modal" data-bs-target="#CreateJobWorkOrderModal"><iconify-icon icon="carbon:task-add"></iconify-icon>Schedule Job Work Order</button>
                            <a href="create-quotation.php"><button type="button" class="btn inspectionButton"><iconify-icon icon="iconamoon:file-document-light"></iconify-icon> Create Quotation</button></a> -->
                            <ul class="nav nav-tabs TabsStyle1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="homeIcon-tab" data-bs-toggle="tab"
                                        href="#homeIcon" aria-controls="home" role="tab" aria-selected="true">
                                        <iconify-icon icon="solar:checklist-minimalistic-linear"></iconify-icon>
                                        Equipment Inspection
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profileIcon-tab" data-bs-toggle="tab"
                                        href="#profileIcon" aria-controls="profile" role="tab"
                                        aria-selected="false">
                                        <iconify-icon icon="carbon:task-add"></iconify-icon>
                                        Operator Assessment
                                    </a>
                                </li>

                                <!-- <li class="nav-item">
                                <a class="nav-link" id="disabledIcon-tab" data-bs-toggle="tab"
                                    href="#disabledIcon" aria-controls="disabled" role="tab"
                                    aria-selected="false">
                                    <iconify-icon icon="iconamoon:file-document-light"></iconify-icon>
                                    Quotation
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="aboutIcon-tab" data-bs-toggle="tab" href="#aboutIcon"
                                    aria-controls="about" role="tab" aria-selected="false">
                                    <iconify-icon icon="material-symbols:linked-services-outline">
                                    </iconify-icon>
                                    Activity
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="NoteHeadIcon-tab" data-bs-toggle="tab"
                                    href="#NoteHeadIcon" aria-controls="Note" role="tab" aria-selected="false">
                                    <iconify-icon icon="hugeicons:note-02"></iconify-icon>
                                    Note Head
                                </a>
                            </li> -->
                            </ul>
                        </div>
                        <div class="rightSideEnquiryStatus">
                            <div class="Survey_progressStatus">
                                <iconify-icon icon="solar:check-circle-broken"></iconify-icon> Renewal Pending
                            </div>
                        </div>

                    </div>

                    <!-- <div class="NoActionSection">
                        <img src="assets/new-images/no-action-removebg-preview.png" alt="">
                        <h6>No Actions Performed</h6>
                        <p>No actions have been performed on this enquiry yet.</p>
                    </div> -->

                    <div class="CommonContainerAction">
                        <div class="tab-content">
                            <div class="tab-pane active" id="homeIcon" aria-labelledby="homeIcon-tab"
                                role="tabpanel">
                                <!-- <div class="RightButtonAdd_inr_header">
                                <h2>All Inspections</h2>
                                <button type="button" class="CreateCst_button" data-bs-toggle="modal"
                                    data-bs-target="#createInspectionModal">
                                    <iconify-icon icon="heroicons:plus-20-solid"></iconify-icon> Create
                                    Inspection
                                </button>
                            </div> -->
                                <!-- Performance Indicator list -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card tablemaincard_nopaddingleftright">

                                            <div class="card-body p-0">
                                                <div class="custom-datatable-filter">
                                                    <table
                                                        class="table common-datatable withoutActionTR nowrap w-100">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>
                                                                    <div class="form-check form-check-md">
                                                                        <input class="form-check-input selectAll" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </th>
                                                                <th>Data Log No.</th>
                                                                <th>Equipment Name</th>
                                                                <th>Completion On</th>
                                                                <th>DLS Type</th>
                                                                <th>Certificate No.</th>
                                                                <th>Checklist No.</th>
                                                                <th>FIR Form </th>
                                                                <th>RR Form</th>
                                                                <th>Sticker/Tag ID</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                               <td>
                                                                    <div class="form-check form-check-md">
                                                                        <input class="form-check-input row-checkbox" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="equipment-inspection-renewal-dls.php"
                                                                        class="hightlightKOPID">#DLS2500001</a></td>
                                                                <td>Air Compressor</td>
                                                                <td>27 Jan, 2025 11:00 AM</td>
                                                                <td>DLS1</td>
                                                                <td><a href="#"
                                                                        class="hightlightKOP">#Cert2500000</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">CL2500000</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a>
                                                                </td>
                                                                <td><a href="#" class="hightlightKOP">FIR</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td>--</td>
                                                                <td>L.Stk2500000</td>
                                                                <td><span
                                                                        class="badge badge-soft-success">Renewed</span>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center ActionDropdown">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="View Job Orders"
                                                                            href="equipment-inspection-renewal-dls.php">
                                                                            <span class="icon">
                                                                                <span class="feather-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-eye">
                                                                                        <path
                                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                        </path>
                                                                                        <circle cx="12" cy="12"
                                                                                            r="3"></circle>
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
                                                                        <input class="form-check-input row-checkbox" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="equipment-inspection-renewal-dls.php"
                                                                        class="hightlightKOPID">#DLS2500002</a></td>
                                                                <td>Hydraulic Pump</td>
                                                                <td>28 Jan, 2025 02:30 PM</td>
                                                                <td>DLS2</td>
                                                                <td><a href="#"
                                                                        class="hightlightKOP">#Cert2500001</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">CL2500001</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a>
                                                                </td>
                                                                <td><a href="#" class="hightlightKOP">FIR</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td>--</td>
                                                                <td>L.Stk2500001</td>
                                                                <td><span class="badge badge-soft-warning">In
                                                                        Progress</span></td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center ActionDropdown">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="View Job Orders"
                                                                            href="equipment-inspection-renewal-dls.php">
                                                                            <span class="icon">
                                                                                <span class="feather-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-eye">
                                                                                        <path
                                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                        </path>
                                                                                        <circle cx="12" cy="12"
                                                                                            r="3"></circle>
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
                                                                        <input class="form-check-input row-checkbox" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="equipment-inspection-renewal-dls.php"
                                                                        class="hightlightKOPID">#DLS2500003</a></td>
                                                                <td>Generator</td>
                                                                <td>29 Jan, 2025 09:15 AM</td>
                                                                <td>DLS3</td>
                                                                <td><a href="#"
                                                                        class="hightlightKOP">#Cert2500002</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">CL2500002</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a>
                                                                </td>
                                                                <td><a href="#" class="hightlightKOP">FIR</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">RR</a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td>L.Stk2500002</td>
                                                                <td><span
                                                                        class="badge badge-soft-success">Renewed</span>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center ActionDropdown">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="View Job Orders"
                                                                            href="equipment-inspection-renewal-dls.php">
                                                                            <span class="icon">
                                                                                <span class="feather-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-eye">
                                                                                        <path
                                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                        </path>
                                                                                        <circle cx="12" cy="12"
                                                                                            r="3"></circle>
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
                                                                        <input class="form-check-input row-checkbox" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="equipment-inspection-renewal-dls.php"
                                                                        class="hightlightKOPID">#DLS2500004</a></td>
                                                                <td>Cooling Tower</td>
                                                                <td>30 Jan, 2025 03:45 PM</td>
                                                                <td>DLS4</td>
                                                                <td><a href="#"
                                                                        class="hightlightKOP">#Cert2500003 </a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">CL2500003 </a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a>
                                                                </td>
                                                                <td><a href="#" class="hightlightKOP">FIR </a><a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">--</a></td>
                                                                <td>L.Stk2500003</td>
                                                                <td><span
                                                                        class="badge badge-soft-success">Renewed</span>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="d-flex align-items-center ActionDropdown">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                                                            data-bs-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="View Job Orders"
                                                                            href="equipment-inspection-renewal-dls.php">
                                                                            <span class="icon">
                                                                                <span class="feather-icon">
                                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24"
                                                                                        fill="none"
                                                                                        stroke="currentColor"
                                                                                        stroke-width="2"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        class="feather feather-eye">
                                                                                        <path
                                                                                            d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z">
                                                                                        </path>
                                                                                        <circle cx="12" cy="12"
                                                                                            r="3"></circle>
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
                                        <!-- /Performance Indicator list -->
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="profileIcon" aria-labelledby="profileIcon-tab"
                                role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card tablemaincard_nopaddingleftright">

                                            <div class="card-body p-0">
                                                <div class="custom-datatable-filter">
                                                    <table
                                                        class="table common-datatable withoutActionTR nowrap w-100">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>
                                                                    <div class="form-check form-check-md">
                                                                        <input class="form-check-input selectAll2" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </th>
                                                                <th>Assessment No.</th>
                                                                <th>Equipment Name</th>
                                                                <th>Operators</th>
                                                                <th>Completion On</th>
                                                                <th>Card No.</th>
                                                                <th>Certificate No.</th>
                                                                <th>Score</th>
                                                                <th>Status</th>
                                                                <th>Renewal Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-md">
                                                                        <input class="form-check-input row-checkbox2" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="opretaor-dls-renewal.php" class="hightlightKOPID">#Asmt2500000</a></td>
                                                                <td>Agricultural Tractor Operator</td>
                                                                <td>
                                                                    <div class="d-flex align-items-center file-name-icon">
                                                                        <a href="#" class="avatar avatar-md avatar-rounded">
                                                                            <img src="assets/img/users/user-08.jpg" class="img-fluid" alt="Michael Scott">
                                                                        </a>
                                                                        <div class="ms-2">
                                                                            <h6 class="fw-medium"><a href="#">Cavin John</a></h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>27 Jan, 2025 11:00 AM</td>
                                                                <td><a href="#" class="hightlightKOP">#2500000</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">Crt2500000</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td>60%</td>
                                                                <td><span class="badge badge-soft-success">Passed</span></td>
                                                                <td><span class="renewedStatusLine">Renewed</span></td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="opretaor-dls-renewal.php">
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
                                                                        <input class="form-check-input row-checkbox2" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="opretaor-dls-renewal.php" class="hightlightKOPID">#Asmt2500001</a></td>
                                                                <td>Forklift Operator</td>
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
                                                                <td>28 Jan, 2025 10:30 AM</td>
                                                                <td><a href="#" class="hightlightKOP">#2500001</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">Crt2500001</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td>45%</td>
                                                                <td><span class="badge badge-soft-success">Passed</span></td>
                                                                <td><span class="renewedStatusLine">Renewed</span></td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="opretaor-dls-renewal.php">
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
                                                                        <input class="form-check-input row-checkbox2" type="checkbox">
                                                                        <label class="form-check-label" for="training"></label>
                                                                    </div>
                                                                </td>
                                                                <td><a href="opretaor-dls-renewal.php" class="hightlightKOPID">#Asmt2500002</a></td>
                                                                <td>Excavator Operator</td>
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
                                                                <td>29 Jan, 2025 09:15 AM</td>
                                                                <td><a href="#" class="hightlightKOP">#2500002</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td><a href="#" class="hightlightKOP">Crt2500002</a> <a href="#" class="DownLoadBtn"><iconify-icon icon="material-symbols:download"></iconify-icon></a></td>
                                                                <td>75%</td>
                                                                <td><span class="badge badge-soft-success">Passed</span></td>
                                                                <td><span class="progressStatusLine">In Progress</span></td>
                                                                <td>
                                                                    <div class="d-flex align-items-center ActionDropdown">
                                                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="tooltip" data-placement="top" title="View Job Orders" href="opretaor-dls-renewal.php">
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
                                        <!-- /Performance Indicator list -->
                                    </div>
                                </div>

                            </div>
                            <!-- <div class="tab-pane" id="disabledIcon" aria-labelledby="disabledIcon-tab"
                                role="tabpanel">

                            </div>
                            <div class="tab-pane" id="aboutIcon" aria-labelledby="aboutIcon-tab" role="tabpanel">

                            </div>

                            <div class="tab-pane" id="NoteHeadIcon" aria-labelledby="NoteHeadIcon-tab"
                                role="tabpanel">


                            </div> -->
                        </div>

                    </div>


                </div>

            </div>


        </form>
    </div>

</div>

</div>


<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Toggle right offcanvas</button> -->

<div class="offcanvas offcanvas-end customOffcanvasWidth-400" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Attachments</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0">
  <ul class="AttachmentsDoc">
        <li>
            <a href="assets/img/newimages/idproof.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip2.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip3.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip2.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        <li>
            <a href="assets/img/newimages/equip3.jpg" class="AttachmentBox" data-fancybox="gallery" data-caption="Attachment document name">
            <div class="attachmentIcon">
            <iconify-icon icon="lets-icons:img-box"></iconify-icon>
                </div>
                <div class="attachmentContent">
                    <div class="rightSideHUi">
                        <h6>Attachment document name</h6>
                        <p>File Size : 241.8 KB</p>
                    </div>
                </div>
            </a>
            
            <div class="removeHUi">
                    <a href="#"><iconify-icon icon="tabler:trash"></iconify-icon></a>
                    <a href="#"><iconify-icon icon="material-symbols:download"></iconify-icon></a>

                </div>
        </li>
        

    </ul>
  </div>
</div>

<div class="offcanvas offcanvas-end customOffcanvasWidth-400" tabindex="-1" id="paymentActivity" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Payment Activity</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="ActivityBox">
            <!-- <span class="badge badge-soft-secondary  d-inline-flex align-items-center mb-3">
                <i class="ti ti-calendar me-1"></i>
                15 Feb 2024
            </span> -->
            <div class="border rounded p-3 mb-3">
                <div class="mainHIOp">
                    <div class="d-flex align-items-start ">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-gray me-2"><iconify-icon icon="icon-park-outline:flash-payment"></iconify-icon></span>
                        <div>
                            <h6 class="fw-medium mb-1">Cash Receipt #CH001</h6>
                            <span>18 Mar, 2025</span>
                        
                        </div>
                    </div>
                  
                    <div class="PaymentImages">
                            <a href="assets/img/newimages/equip.jpg" data-fancybox="gallery">
                                <img src="assets/img/newimages/equip.jpg" alt="" style="cursor: pointer;">
                            </a>
                        </div>
                </div>
            </div>
            <div class="border rounded p-3 mb-3">
                <div class="mainHIOp">
                    <div class="d-flex align-items-start ">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-gray me-2"><iconify-icon icon="icon-park-outline:flash-payment"></iconify-icon></span>
                        <div>
                            <h6 class="fw-medium mb-1">Purchase Order #PO001</h6>
                            <span>19 Mar, 2025</span>
                        
                        </div>
                    </div>
                  
                    <div class="PaymentImages">
                            <a href="assets/img/newimages/equip.jpg" data-fancybox="gallery">
                                <img src="assets/img/newimages/equip.jpg" alt="" style="cursor: pointer;">
                            </a>
                        </div>
                </div>
            </div>
            <div class="border rounded p-3 mb-3">
                <div class="mainHIOp">
                    <div class="d-flex align-items-start ">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-gray me-2"><iconify-icon icon="icon-park-outline:flash-payment"></iconify-icon></span>
                        <div>
                            <h6 class="fw-medium mb-1">Quotation #QT001</h6>
                            <span>20 Mar, 2025</span>
                        
                        </div>
                    </div>
                  
                    <div class="PaymentImages">
                            <a href="assets/img/newimages/equip.jpg" data-fancybox="gallery">
                                <img src="assets/img/newimages/equip.jpg" alt="" style="cursor: pointer;">
                            </a>
                        </div>
                </div>
            </div>
            <div class="border rounded p-3 mb-3">
                <div class="mainHIOp">
                    <div class="d-flex align-items-start ">
                        <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-gray me-2"><iconify-icon icon="icon-park-outline:flash-payment"></iconify-icon></span>
                        <div>
                            <h6 class="fw-medium mb-1">Invoice #INV001</h6>
                            <span>25 Mar, 2025</span>
                        
                        </div>
                    </div>
                  
                    <div class="PaymentImages">
                            <a href="assets/img/newimages/equip.jpg" data-fancybox="gallery">
                                <img src="assets/img/newimages/equip.jpg" alt="" style="cursor: pointer;">
                            </a>
                        </div>
                </div>
            </div>
            
        </div>
  </div>
</div>
<?php include("footer.php") ?>
<!-- Fancybox JS -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js" type=""></script>

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
                        <label class="form-check-label" for="swal-certificate">Certificate</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-checklist" checked>
                        <label class="form-check-label" for="swal-checklist">Checklist</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-fir" checked>
                        <label class="form-check-label" for="swal-fir">FIR</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-rr" checked>
                        <label class="form-check-label" for="swal-rr">RR</label>
                    </div>
               </div>

               <div class="letterHeadBox">
                    <p>Select the documents you want to download by checking the boxes (Certificate, Checklist, FIR, RR), then click the download button.</p>
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
                    if (document.getElementById("swal-rr").checked) selectedItems.push("RR");

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
    // Select all tables
    const tables = document.querySelectorAll(".common-datatable");

    tables.forEach((table) => {
        const selectAllCheckbox = table.querySelector(".selectAll2");
        const rowCheckboxes = table.querySelectorAll(".row-checkbox2");

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
    document.querySelector(".downloadBtn2").addEventListener("click", function (event) {
        event.preventDefault();

        // Find all checked job orders across all tables
        const selectedRows = document.querySelectorAll(".row-checkbox2:checked");

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
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-certification-form" checked>
                        <label class="form-check-label" for="swal-certification-form">Certification Form</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-certificate" checked>
                        <label class="form-check-label" for="swal-certificate">Certificate</label>
                    </div>
                    <div class="form-check form-check-md">
                        <input class="form-check-input swal-checkbox" type="checkbox" id="swal-assessment-card" checked>
                        <label class="form-check-label" for="swal-assessment-card">Assessment Card</label>
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
                    if (document.getElementById("swal-certification-form").checked) selectedItems.push("Certification Form");
                    if (document.getElementById("swal-certificate").checked) selectedItems.push("Certificate");
                    if (document.getElementById("swal-assessment-card").checked) selectedItems.push("Assessment Card");

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
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stickerBtn = document.getElementById("addStickerBtn");
        const tagBtn = document.getElementById("addTagBtn");
        const stickerTab = document.getElementById("homeIcon-tab");
        const tagTab = document.getElementById("profileIcon-tab");

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

