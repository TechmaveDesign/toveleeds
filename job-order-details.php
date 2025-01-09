<?php include("header.php") ?>

<!-- Fancybox CSS -->
<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
<!-- Owl carousel CSS -->
<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Job Order Details</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="job-orders.php">Job Orders</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Job Order Details</li>
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

    <div class="card tablemaincard_nopaddingleftright">
        <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                    href="#nav-products-justified" aria-selected="false">Equipment Inspection</a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress"
                    aria-selected="true">Assessment</a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-cart-justified" aria-selected="true">
                    Process for NDT </a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders-justified"
                    aria-selected="false">Process for Training
                </a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-activity" aria-selected="false">Job Order History
                </a>

            </nav>

        </div>
        <div class="tab-content customtbPadding">
            <div class="tab-pane show active text-muted" id="nav-products-justified" role="tabpanel">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="status-tracker">
                            <div class="status-step" data-status="Order booked">
                                <div class="circle"></div>
                                <span>Order Pending</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots scheduled">
                                <div class="circle"></div>
                                <span>Order In Progress</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Deliverables ready">
                                <div class="circle"></div>
                                <span>Approved</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots complete">
                                <div class="circle"></div>
                                <span>Certificate/Sticker Approval </span>
                                <div class="arrow-icon"></div>
                            </div>
                          
                            
                        </div>

                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="bg-light rounded p-3 mb-2">
                                    <div class="text-center ">
                                        <a href="javascript:void(0);" class="avatar avatar-xl online avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" alt="Img">
                                        </a>
                                        <h5 class="mb-1"><a href="javascript:void(0);">James Hong </a></h5>
                                        <p class="fs-12">Status : <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span></p>
                                    </div>

                                </div>

                                <div class="card-body p-0">

                                    <div class="p-3 border-bottom jbClientDetails_card">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5>Client Details</h5>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="hugeicons:face-id"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Client ID</h6>
                                                <span class="d-block clientemail clientdata_text">#CL001</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="mage:email-opened"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Email</h6>
                                                <span
                                                    class="d-block clientemail clientdata_text">Jameshong324@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="solar:phone-broken"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Phone</h6>
                                                <span class="d-block clientphone clientdata_text">+ (401)
                                                    459-2434</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="fluent:location-28-regular"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Address</h6>
                                                <span class="d-block clientaddress clientdata_text">202 Oak Drive,
                                                    Building 5, Orland</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Service Type</h5>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                Equipment Inspection
                                            </span>

                                        </div>
                                    </div>

                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 middlereport_scroll">
                        <div class="card">
                            <div class="card-body pb-1">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-4">
                                    <div>
                                        <h4 class="mb-1">Equipment Inspection Report</h4>
                                        <p>Job Order ID : <span class="text-primary"> PRO-0004</span></p>
                                    </div>

                                    <a href="#" class="btn btn-primary d-flex align-items-center cmnaddbtn"><iconify-icon icon="ph:download-light"></iconify-icon> Download Certificate/Sticker</a>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i
                                                class="ti ti-square-rounded me-2"></i>Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3"><i
                                                class="ti ti-point-filled me-1"></i>InProgress</span>
                                    </div>

                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i
                                                class="ti ti-user-star me-2"></i>Assignee</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                                                <a href="#"
                                                    class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-45.jpg" alt="Img">
                                                </a>
                                                <h6 class="fs-12"><a href="#">Dwight</a></h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <h6 class="mb-1">Note for Inspection</h6>
                                            <p>The Enhanced Patient Management System (EPMS) project aims to modernize
                                                and streamline
                                                the patient management processes within. By integrating advanced
                                                technologies and optimizing existing
                                                workflows, the project seeks to improve patient care, enhance
                                                operational
                                                efficiency, and ensure compliance with regulatory standards.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="accordion-item ">
                                <div class="accordion-header" id="headingThree">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Photos of the equipment (plate/serial number)</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                                                    aria-expanded="false" aria-controls="primaryBorderThree">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderThree" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="media-images-slider owl-carousel">
                                            <a href="assets/img/newimages/equip.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip.jpg" class=" rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip3.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip3.jpg" class="rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip2.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip2.jpg" class="rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip5.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip5.jpg" class="rounded" alt="img">

                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Equipment Inspection Checklist</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="checklistsection_wrap">

                                            <div class="ReportInrSections">

                                                <div class="list-group list-group-flush">
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q1.</div> Is the equipment ready for
                                                                            use?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <p> Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing.</p>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q2.</div> Is the equipment in good
                                                                            condition?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Yes</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q3.</div> Is the equipment safe to
                                                                            operate?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Safe</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q4.</div> Does the equipment pass all
                                                                            inspection checks?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Pass</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q5.</div> Is any maintenance required
                                                                            for the equipment?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="no_optionmenu">No</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q6.</div> Is the equipment in fair
                                                                            condition for continued use?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="fairmenu_option">Fair</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="list-group">
                                                        <!-- Question 7 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q7.</div>
                                                                                Is the equipment in good working
                                                                                condition?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="response-yes">Good</div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 8 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q8.</div>
                                                                                Is the equipment currently in use?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="na_responsice_menu">N/A
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 9 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q9.</div>
                                                                                How many hours was the equipment used
                                                                                today?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">05</div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 10 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q10.</div>
                                                                                When was the last maintenance check
                                                                                performed?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">31 Dec, 2024
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 11 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q11.</div>
                                                                                What time is the next maintenance
                                                                                scheduled for?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">6:30 PM
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 12 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q12.</div>
                                                                                Attach photos of the equipment for
                                                                                documentation.
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div
                                                                                    class="media-images-slider owl-carousel">
                                                                                    <a href="assets/img/newimages/equip.jpg"
                                                                                        data-fancybox="gallery"
                                                                                        class="gallery-item">
                                                                                        <img src="assets/img/newimages/equip.jpg"
                                                                                            class="rounded"
                                                                                            alt="Equipment Image">
                                                                                    </a>
                                                                                    <a href="assets/img/newimages/equip3.jpg"
                                                                                        data-fancybox="gallery"
                                                                                        class="gallery-item">
                                                                                        <img src="assets/img/newimages/equip3.jpg"
                                                                                            class="rounded"
                                                                                            alt="Equipment Image">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Results</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="section">
                                            <div class="ReportData_fields">
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Result Status:
                                                    </div>
                                                    <div class="userenuData">
                                                        <div class="response-yes">Pass</div>
                                                    </div>
                                                </div>
                                                

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Approval</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="section">
                                            <div class="ReportData_fields">
                                            <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Status:
                                                    </div>
                                                    <div class="userenuData">
                                                    <div class="response-yes">Approved</div>
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Certificate Issued By:
                                                    </div>
                                                    <div class="userenuData">
                                                    Technical Manager – Ahmed Al-Faisal
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row ">
                                                    <div class="cu-task-label-icon__container">Certificate Type:
                                                    </div>
                                                    <div class="userenuData">
                                                    Safety Compliance Sticker
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Job order Details</h5>
                                <div class="list-group details-list-group ">
                                    <div class="list-group-item">
                                        <span>Template Name</span>
                                        <p class="text-gray-9">Monthly Maintenance</p>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Inspection Time</span>
                                            <p class="text-gray-9">4:30 PM</p>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Schedule Date</span>
                                            <p class="text-gray-9">31 Dec, 2024</p>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Assigned to</span>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-rounded me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                                </span>
                                                <p class="text-gray-9 mb-0">Stephan Peralt</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Service Type</span>
                                            <div class="d-flex align-items-center">
                                                <p class="text-gray-9 mb-0">Equipment Inspection
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <span>Additional Notes</span>
                                        <p class="text-gray-9">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Veritatis.</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- <div class="card">
                            <div class="card-header">
                                <h5>Activity</h5>
                            </div>
                            <div class="card-body">

                                <div class="notice-widget">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex overflow-hidden">
                                            <span class="bg-info avatar avatar-md me-3 rounded-circle flex-shrink-0">
                                                <i class="ti ti-checkup-list fs-16"></i>
                                            </span>
                                            <div class="overflow-hidden">
                                                <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Andrew
                                                    </span>added a New Task</p>
                                                <p class="mb-1">15 May 2024, 6:53 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex overflow-hidden me-2">
                                            <span class="bg-warning avatar avatar-md me-3 rounded-circle flex-shrink-0">
                                                <i class="ti ti-circle-dot fs-16"></i>
                                            </span>
                                            <div class="overflow-hidden">
                                                <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                                    </span>Moved task <span class="text-gray-9 fw-medium"> “Private chat
                                                        module”</span></p>
                                                <p class="mb-1">15 May 2024, 6:53 PM</p>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge badge-success me-2"><i
                                                            class="ti ti-point-filled me-1"></i>Completed</span>
                                                    <span><i class="ti ti-arrows-left-right me-2"></i></span>
                                                    <span class="badge badge-purple"><i
                                                            class="ti ti-point-filled me-1"></i>Inprogress</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="d-flex overflow-hidden me-2">
                                            <span class="bg-purple avatar avatar-md me-3 rounded-circle flex-shrink-0">
                                                <i class="ti ti-checkup-list fs-16"></i>
                                            </span>
                                            <div class="overflow-hidden">
                                                <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                                    </span>Created task <span class="text-gray-9 fw-medium"> “Private
                                                        chat module”</span></p>
                                                <p class="mb-1">15 May 2024, 6:53 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex overflow-hidden">
                                            <span
                                                class="bg-secondary avatar avatar-md me-3 rounded-circle flex-shrink-0">
                                                <i class="ti ti-photo fs-16"></i>
                                            </span>
                                            <div class="overflow-hidden">
                                                <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Hendry
                                                    </span> Updated Image <span class="text-gray-9 fw-medium">
                                                        “logo.jpg” </span></p>
                                                <p class="mb-1">15 May 2024, 6:53 PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
            <div class="tab-pane  text-muted" id="nav-in-progress" role="tabpanel">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="status-tracker">
                            <div class="status-step" data-status="Order booked">
                                <div class="circle"></div>
                                <span>Order Pending</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots scheduled">
                                <div class="circle"></div>
                                <span>Order In Progress</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Deliverables ready">
                                <div class="circle"></div>
                                <span>Approved</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots complete">
                                <div class="circle"></div>
                                <span>Certificate/Sticker Approval </span>
                                <div class="arrow-icon"></div>
                            </div>
                           
                            
                        </div>

                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="bg-light rounded p-3 mb-2">
                                    <div class="text-center ">
                                        <a href="javascript:void(0);" class="avatar avatar-xl online avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" alt="Img">
                                        </a>
                                        <h5 class="mb-1"><a href="javascript:void(0);">James Hong </a></h5>
                                        <p class="fs-12">Status : <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span></p>
                                    </div>

                                </div>

                                <div class="card-body p-0">

                                    <div class="p-3 border-bottom jbClientDetails_card">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5>Client Details</h5>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="hugeicons:face-id"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Client ID</h6>
                                                <span class="d-block clientemail clientdata_text">#CL001</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="mage:email-opened"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Email</h6>
                                                <span
                                                    class="d-block clientemail clientdata_text">Jameshong324@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="solar:phone-broken"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Phone</h6>
                                                <span class="d-block clientphone clientdata_text">+ (401)
                                                    459-2434</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="fluent:location-28-regular"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Address</h6>
                                                <span class="d-block clientaddress clientdata_text">202 Oak Drive,
                                                    Building 5, Orland</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Service Type</h5>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                Equipment Inspection
                                            </span>

                                        </div>
                                    </div>

                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 middlereport_scroll">
                        <div class="card">
                            <div class="card-body pb-1">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-4">
                                    <div>
                                        <h4 class="mb-1">Operator Assessment Report</h4>
                                        <p>Job Order ID : <span class="text-primary"> PRO-0004</span></p>
                                    </div>

                                </div>

                                <div class="ReportInrSections">
                                    <div class="ReportInrSections_title  ">
                                        <h2>Operator Details</h2>
                                    </div>

                                    <div class="ReportData_fields">
                                        <div class="cu-task-fields__row FullWidth">

                                            <div class="Attatchments_images_wrap">
                                                <div class="operator_attatchements">
                                                    <div class="cu-task-label-icon__container">Operator Photo</div>
                                                    <div class="Imageattatch_RPR_item">
                                                        <img src="assets/img/profiles/avatar-06.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="operator_attatchements">
                                                    <div class="cu-task-label-icon__container">ID Photo</div>
                                                    <div class="Imageattatch_RPR_item">
                                                        <img src="assets/img/newimages/idproof.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Aqama Number :</div>
                                            <div class="userenuData">123456789012</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Operator Name :</div>
                                            <div class="userenuData">Muhammad Faisal</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Company Name :</div>
                                            <div class="userenuData">GulfTech Solutions</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="ReportInrSections">
                                    <div class="ReportInrSections_title  ">
                                        <h2>OCR Extraction</h2>
                                    </div>

                                    <div class="ReportData_fields">

                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Extracted Name :</div>
                                            <div class="userenuData">Muhammad Faisal</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Aqama Number :</div>
                                            <div class="userenuData">123456789012</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Company Name :</div>
                                            <div class="userenuData">GulfTech Solutions</div>
                                        </div>

                                    </div>
                                </div>

                                <div class="ReportInrSections">
                                    <div class="ReportInrSections_title  ">
                                        <h2>Company Details</h2>
                                    </div>

                                    <div class="ReportData_fields">
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Company Name :</div>
                                            <div class="userenuData">GulfTech Solutions</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Phone number :</div>
                                            <div class="userenuData">+966-123-456-789</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Email address :</div>
                                            <div class="userenuData">contact@gulftechsolutions.com</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Company Registration Number :
                                            </div>
                                            <div class="userenuData">123456789-CR</div>
                                        </div>
                                        <div class="cu-task-fields__row">
                                            <div class="cu-task-label-icon__container">Industry or Business Type :
                                            </div>
                                            <div class="userenuData">Construction Equipment Manufacturing</div>
                                        </div>
                                        <div class="cu-task-fields__row FullWidth">
                                            <div class="cu-task-label-icon__container">Company Address :
                                            </div>
                                            <div class="userenuData">Tech Tower, 5th Floor,
                                                King Fahd Road, Riyadh, Saudi Arabia.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i
                                                class="ti ti-square-rounded me-2"></i>Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <span class="badge badge-soft-warning d-inline-flex align-items-center mb-3"><i
                                                class="ti ti-point-filled me-1"></i>InProgress</span>
                                    </div>

                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i
                                                class="ti ti-user-star me-2"></i>Assignee</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center mb-3">
                                            <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                                                <a href="#"
                                                    class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-45.jpg" alt="Img">
                                                </a>
                                                <h6 class="fs-12"><a href="#">Dwight</a></h6>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <h6 class="mb-1">Note for Inspection</h6>
                                            <p>The Enhanced Patient Management System (EPMS) project aims to modernize
                                                and streamline
                                                the patient management processes within. By integrating advanced
                                                technologies and optimizing existing
                                                workflows, the project seeks to improve patient care, enhance
                                                operational
                                                efficiency, and ensure compliance with regulatory standards.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="accordion-item ">
                                <div class="accordion-header" id="headingThree">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Photos of the equipment (plate/serial number)</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                                                    aria-expanded="false" aria-controls="primaryBorderThree">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderThree" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="media-images-slider owl-carousel">
                                            <a href="assets/img/newimages/equip.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip.jpg" class=" rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip3.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip3.jpg" class="rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip2.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip2.jpg" class="rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip5.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip5.jpg" class="rounded" alt="img">

                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Equipment Inspection Checklist</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="checklistsection_wrap">

                                            <div class="ReportInrSections">

                                                <div class="list-group list-group-flush">
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q1.</div> Is the equipment ready for
                                                                            use?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <p> Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing.</p>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q2.</div> Is the equipment in good
                                                                            condition?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Yes</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q3.</div> Is the equipment safe to
                                                                            operate?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Safe</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q4.</div> Does the equipment pass all
                                                                            inspection checks?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Pass</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q5.</div> Is any maintenance required
                                                                            for the equipment?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="no_optionmenu">No</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q6.</div> Is the equipment in fair
                                                                            condition for continued use?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="fairmenu_option">Fair</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="list-group">
                                                        <!-- Question 7 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q7.</div>
                                                                                Is the equipment in good working
                                                                                condition?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="response-yes">Good</div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 8 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q8.</div>
                                                                                Is the equipment currently in use?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="na_responsice_menu">N/A
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 9 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q9.</div>
                                                                                How many hours was the equipment used
                                                                                today?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">05</div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 10 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q10.</div>
                                                                                When was the last maintenance check
                                                                                performed?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">31 Dec, 2024
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 11 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q11.</div>
                                                                                What time is the next maintenance
                                                                                scheduled for?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">6:30 PM
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 12 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q12.</div>
                                                                                Attach photos of the equipment for
                                                                                documentation.
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div
                                                                                    class="media-images-slider owl-carousel">
                                                                                    <a href="assets/img/newimages/equip.jpg"
                                                                                        data-fancybox="gallery"
                                                                                        class="gallery-item">
                                                                                        <img src="assets/img/newimages/equip.jpg"
                                                                                            class="rounded"
                                                                                            alt="Equipment Image">
                                                                                    </a>
                                                                                    <a href="assets/img/newimages/equip3.jpg"
                                                                                        data-fancybox="gallery"
                                                                                        class="gallery-item">
                                                                                        <img src="assets/img/newimages/equip3.jpg"
                                                                                            class="rounded"
                                                                                            alt="Equipment Image">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Results</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="section">
                                            <div class="ReportData_fields">
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Result Status:
                                                    </div>
                                                    <div class="userenuData">
                                                        <div class="response-yes">Pass</div>
                                                    </div>
                                                </div>
                                                

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Approval</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="section">
                                            <div class="ReportData_fields">
                                            <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Status:
                                                    </div>
                                                    <div class="userenuData">
                                                    <div class="response-yes">Approved</div>
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Certificate Issued By:
                                                    </div>
                                                    <div class="userenuData">
                                                    Technical Manager – Ahmed Al-Faisal
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row ">
                                                    <div class="cu-task-label-icon__container">Certificate Type:
                                                    </div>
                                                    <div class="userenuData">
                                                    Safety Compliance Sticker
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Job order Details</h5>
                                <div class="list-group details-list-group ">
                                    <div class="list-group-item">
                                        <span>Template Name</span>
                                        <p class="text-gray-9">Monthly Maintenance</p>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Inspection Time</span>
                                            <p class="text-gray-9">4:30 PM</p>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Schedule Date</span>
                                            <p class="text-gray-9">31 Dec, 2024</p>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Assigned to</span>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-rounded me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                                </span>
                                                <p class="text-gray-9 mb-0">Stephan Peralt</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Service Type</span>
                                            <div class="d-flex align-items-center">
                                                <p class="text-gray-9 mb-0">Equipment Inspection
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <span>Additional Notes</span>
                                        <p class="text-gray-9">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Veritatis.</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- <div class="card">
        <div class="card-header">
            <h5>Activity</h5>
        </div>
        <div class="card-body">

            <div class="notice-widget">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden">
                        <span class="bg-info avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-checkup-list fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Andrew
                                </span>added a New Task</p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden me-2">
                        <span class="bg-warning avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-circle-dot fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                </span>Moved task <span class="text-gray-9 fw-medium"> “Private chat
                                    module”</span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-success me-2"><i
                                        class="ti ti-point-filled me-1"></i>Completed</span>
                                <span><i class="ti ti-arrows-left-right me-2"></i></span>
                                <span class="badge badge-purple"><i
                                        class="ti ti-point-filled me-1"></i>Inprogress</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden me-2">
                        <span class="bg-purple avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-checkup-list fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                </span>Created task <span class="text-gray-9 fw-medium"> “Private
                                    chat module”</span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex overflow-hidden">
                        <span
                            class="bg-secondary avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-photo fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Hendry
                                </span> Updated Image <span class="text-gray-9 fw-medium">
                                    “logo.jpg” </span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

                    </div>
                </div>
            </div>
            <div class="tab-pane  text-muted" id="nav-cart-justified" role="tabpanel">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="status-tracker">
                            <div class="status-step" data-status="Order booked">
                                <div class="circle"></div>
                                <span>Order Pending</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots scheduled">
                                <div class="circle"></div>
                                <span>Order In Progress</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Deliverables ready">
                                <div class="circle"></div>
                                <span>Approved</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots complete">
                                <div class="circle"></div>
                                <span>Certificate/Sticker Approval </span>
                                <div class="arrow-icon"></div>
                            </div>
                           
                            
                        </div>

                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="bg-light rounded p-3 mb-2">
                                    <div class="text-center ">
                                        <a href="javascript:void(0);" class="avatar avatar-xl online avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" alt="Img">
                                        </a>
                                        <h5 class="mb-1"><a href="javascript:void(0);">James Hong </a></h5>
                                        <p class="fs-12">Status : <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span></p>
                                    </div>

                                </div>

                                <div class="card-body p-0">

                                    <div class="p-3 border-bottom jbClientDetails_card">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5>Client Details</h5>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="hugeicons:face-id"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Client ID</h6>
                                                <span class="d-block clientemail clientdata_text">#CL001</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="mage:email-opened"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Email</h6>
                                                <span
                                                    class="d-block clientemail clientdata_text">Jameshong324@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="solar:phone-broken"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Phone</h6>
                                                <span class="d-block clientphone clientdata_text">+ (401)
                                                    459-2434</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="fluent:location-28-regular"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Address</h6>
                                                <span class="d-block clientaddress clientdata_text">202 Oak Drive,
                                                    Building 5, Orland</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Order Details</h5>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="d-inline-flex align-items-center badge-xs">
                                                NDT for 5 pressure vessels
                                            </span>

                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Quotation Amount</h5>
                                        <div class="d-flex align-items-center">
                                            <span class=" d-inline-flex align-items-center badge-xs">
                                                $2,000
                                            </span>

                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Approval Status</h5>
                                        <div class="d-flex align-items-center">
                                            <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                Approved
                                            </span>

                                        </div>
                                    </div>

                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 middlereport_scroll">
                        <div class="card">
                            <div class="card-body pb-1">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-4">
                                    <div>
                                        <h4 class="mb-1">NDT Inspection Report</h4>
                                        <p>Job Order ID : <span class="text-primary"> NDT2024-001</span></p>
                                    </div>

                                </div>

                                <div class="ReportData_fields">
                                                <div class="cu-task-fields__row flecrow_data">
                                                    <div class="cu-task-label-icon__container">Status:
                                                    </div>
                                                    <div class="userenuData">
                                                    <span class="badge badge-soft-purple d-inline-flex align-items-center "><i
                                                    class="ti ti-point-filled me-1"></i>InProgress</span>
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row flecrow_data">
                                                    <div class="cu-task-label-icon__container">Inspector Assigned:
                                                    </div>
                                                    <div class="userenuData">
                                                    <div class="d-flex align-items-center ">
                                            <div class="bg-gray-100 p-1 rounded d-flex align-items-center me-2">
                                                <a href="#"
                                                    class="avatar avatar-sm avatar-rounded border border-white flex-shrink-0 me-2">
                                                    <img src="assets/img/users/user-45.jpg" alt="Img">
                                                </a>
                                                <h6 class="fs-12"><a href="#">Dwight</a></h6>
                                            </div>

                                        </div>
                                                    </div>
                                                </div>

                                                <div class="cu-task-fields__row mb-3">
                                                    <div class="cu-task-label-icon__container">Inspection Category:
                                                    </div>
                                                    <div class="userenuData">
                                                    Pressure Vessel Inspection
                                                    </div>
                                                </div>

                                            </div>

                                            
                                
                            </div>
                        </div>
                        <div class="card">
                            <div class="accordion-item ">
                                <div class="accordion-header" id="headingThree">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Photos of the equipment (plate/serial number)</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                                                    aria-expanded="false" aria-controls="primaryBorderThree">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderThree" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="media-images-slider owl-carousel">
                                            <a href="assets/img/newimages/equip.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip.jpg" class=" rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip3.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip3.jpg" class="rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip2.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip2.jpg" class="rounded" alt="img">

                                            </a>
                                            <a href="assets/img/newimages/equip5.jpg" data-fancybox="gallery"
                                                class="gallery-item">
                                                <img src="assets/img/newimages/equip5.jpg" class="rounded" alt="img">

                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Equipment Inspection Checklist</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="checklistsection_wrap">

                                            <div class="ReportInrSections">

                                                <div class="list-group list-group-flush">
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q1.</div> Is the equipment ready for
                                                                            use?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <p> Lorem ipsum dolor sit amet consectetur
                                                                                adipisicing.</p>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q2.</div> Is the equipment in good
                                                                            condition?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Yes</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q3.</div> Is the equipment safe to
                                                                            operate?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Safe</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q4.</div> Does the equipment pass all
                                                                            inspection checks?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="response-yes">Pass</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q5.</div> Is any maintenance required
                                                                            for the equipment?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="no_optionmenu">No</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                        <div class="row align-items-center row-gap-3">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div
                                                                    class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                    <div class="strike-info QuestionTitle_wrap">
                                                                        <h4 class="fs-14 text-truncate inspQue_title">
                                                                            <div
                                                                                class="js-overflow-line-wrapper questionCount">
                                                                                Q6.</div> Is the equipment in fair
                                                                            condition for continued use?
                                                                        </h4>
                                                                        <div class="insp_quest_ans">
                                                                            <div class="fairmenu_option">Fair</div>
                                                                        </div>
                                                                    </div>
                                                                    <span
                                                                        class="badge text-dark rounded-pill ms-2 dateofsend"><i
                                                                            class="ti ti-calendar me-1"></i>15 Jan
                                                                        2025</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="list-group">
                                                        <!-- Question 7 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q7.</div>
                                                                                Is the equipment in good working
                                                                                condition?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="response-yes">Good</div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 8 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q8.</div>
                                                                                Is the equipment currently in use?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="na_responsice_menu">N/A
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 9 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q9.</div>
                                                                                How many hours was the equipment used
                                                                                today?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">05</div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 10 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q10.</div>
                                                                                When was the last maintenance check
                                                                                performed?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">31 Dec, 2024
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 11 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q11.</div>
                                                                                What time is the next maintenance
                                                                                scheduled for?
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div class="ansnumber_menu">6:30 PM
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Question 12 -->
                                                        <div
                                                            class="list-group-item QuestionAns_list_item list-item-hover shadow-sm rounded mb-2 p-3">
                                                            <div class="row align-items-center row-gap-3">
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div
                                                                        class="todo-inbox-check d-flex align-items-center flex-wrap row-gap-3 reportquestion_ans_wrap">
                                                                        <div class="strike-info QuestionTitle_wrap">
                                                                            <h4
                                                                                class="fs-14 text-truncate inspQue_title">
                                                                                <div
                                                                                    class="js-overflow-line-wrapper questionCount">
                                                                                    Q12.</div>
                                                                                Attach photos of the equipment for
                                                                                documentation.
                                                                            </h4>
                                                                            <div class="insp_quest_ans">
                                                                                <div
                                                                                    class="media-images-slider owl-carousel">
                                                                                    <a href="assets/img/newimages/equip.jpg"
                                                                                        data-fancybox="gallery"
                                                                                        class="gallery-item">
                                                                                        <img src="assets/img/newimages/equip.jpg"
                                                                                            class="rounded"
                                                                                            alt="Equipment Image">
                                                                                    </a>
                                                                                    <a href="assets/img/newimages/equip3.jpg"
                                                                                        data-fancybox="gallery"
                                                                                        class="gallery-item">
                                                                                        <img src="assets/img/newimages/equip3.jpg"
                                                                                            class="rounded"
                                                                                            alt="Equipment Image">
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span
                                                                            class="badge text-dark rounded-pill ms-2 dateofsend">
                                                                            <i class="ti ti-calendar me-1"></i>15 Jan
                                                                            2025
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Results</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="section">
                                            <div class="ReportData_fields">
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Result Status:
                                                    </div>
                                                    <div class="userenuData">
                                                        <div class="response-yes">Pass</div>
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row FullWidth">
                                                    <div class="cu-task-label-icon__container">Observations:
                                                    </div>
                                                    <div class="userenuData">
                                                    No surface cracks or deformities.
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Approval</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="section">
                                            <div class="ReportData_fields">
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Certificate Issued By:
                                                    </div>
                                                    <div class="userenuData">
                                                    Technical Manager – Ahmed Al-Faisal
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row ">
                                                    <div class="cu-task-label-icon__container">Certificate Type:
                                                    </div>
                                                    <div class="userenuData">
                                                    Safety Compliance Sticker
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Job order Details</h5>
                                <div class="list-group details-list-group ">
                                    <div class="list-group-item">
                                        <span>Template Name</span>
                                        <p class="text-gray-9">Monthly Maintenance</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Quotation Amount</span>
                                            <p class="text-gray-9">$1400</p>
                                        </div>
                                    </div>
                                    
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Inspector Code</span>
                                            <p class="text-gray-9">INSP-12345</p>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Inspection Time</span>
                                            <p class="text-gray-9">4:30 PM</p>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Inspection Date</span>
                                            <p class="text-gray-9">31 Dec, 2024</p>
                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <span>Inspection Location</span>
                                        <p class="text-gray-9">Training Hall, Main Office, Jeddah</p>
                                    </div>
                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Assigned to</span>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-rounded me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                                </span>
                                                <p class="text-gray-9 mb-0">Stephan Peralt</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                            <span>Order Details</span>
                                            <p class="text-gray-9 mb-0">NDT for 5 pressure vessels
                                            </p>

                                    </div>
                                    <div class="list-group-item">
                                        <span>Additional Notes</span>
                                        <p class="text-gray-9">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Veritatis.</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- <div class="card">
        <div class="card-header">
            <h5>Activity</h5>
        </div>
        <div class="card-body">

            <div class="notice-widget">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden">
                        <span class="bg-info avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-checkup-list fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Andrew
                                </span>added a New Task</p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden me-2">
                        <span class="bg-warning avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-circle-dot fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                </span>Moved task <span class="text-gray-9 fw-medium"> “Private chat
                                    module”</span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-success me-2"><i
                                        class="ti ti-point-filled me-1"></i>Completed</span>
                                <span><i class="ti ti-arrows-left-right me-2"></i></span>
                                <span class="badge badge-purple"><i
                                        class="ti ti-point-filled me-1"></i>Inprogress</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden me-2">
                        <span class="bg-purple avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-checkup-list fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                </span>Created task <span class="text-gray-9 fw-medium"> “Private
                                    chat module”</span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex overflow-hidden">
                        <span
                            class="bg-secondary avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-photo fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Hendry
                                </span> Updated Image <span class="text-gray-9 fw-medium">
                                    “logo.jpg” </span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

                    </div>
                </div>
            </div>
            <div class="tab-pane text-muted" id="nav-orders-justified" role="tabpanel">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="status-tracker">
                            <div class="status-step" data-status="Order booked">
                                <div class="circle"></div>
                                <span>Order Pending</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots scheduled">
                                <div class="circle"></div>
                                <span>Order In Progress</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Shoots complete">
                                <div class="circle"></div>
                                <span> Approved</span>
                                <div class="arrow-icon"></div>
                            </div>
                            <div class="status-step" data-status="Deliverables ready">
                                <div class="circle"></div>
                                <span>Certificate/Sticker Approval</span>
                                <div class="arrow-icon"></div>
                            </div>
                            
                        </div>

                    </div>
                    <div class="col-xl-3 middlereport_scroll">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="bg-light rounded p-3 mb-2">
                                    <div class="text-center ">
                                        <a href="javascript:void(0);" class="avatar avatar-xl online avatar-rounded">
                                            <img src="assets/img/users/user-11.jpg" alt="Img">
                                        </a>
                                        <h5 class="mb-1"><a href="javascript:void(0);">James Hong </a></h5>
                                        <p class="fs-12">Status : <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Active
                                            </span></p>
                                    </div>

                                </div>

                                <div class="card-body p-0">

                                    <div class="p-3 border-bottom jbClientDetails_card">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5>Client Details</h5>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="hugeicons:face-id"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Client ID</h6>
                                                <span class="d-block clientemail clientdata_text">#CL001</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center  mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="mage:email-opened"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Email</h6>
                                                <span
                                                    class="d-block clientemail clientdata_text">Jameshong324@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon mb-3">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="solar:phone-broken"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Phone</h6>
                                                <span class="d-block clientphone clientdata_text">+ (401)
                                                    459-2434</span>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center file-name-icon">
                                            <div class="avatar avatar-md border rounded-circle iconclDatainp">
                                                <iconify-icon icon="fluent:location-28-regular"></iconify-icon>
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="clientcarddata_label">Address</h6>
                                                <span class="d-block clientaddress clientdata_text">202 Oak Drive,
                                                    Building 5, Orland</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Training Type</h5>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                Operator Safety Training
                                            </span>

                                        </div>
                                    </div>

                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Quotation Amount</h5>
                                        <div class="d-flex align-items-center">
                                            <span class=" d-inline-flex align-items-center badge-xs">
                                                $2,000
                                            </span>

                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h5 class="mb-2">Approval Status</h5>
                                        <div class="d-flex align-items-center">
                                            <span
                                                class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                                Approved
                                            </span>

                                        </div>
                                    </div>

                                </div>
                                <div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 middlereport_scroll">
                        <div class="card">
                            <div class="card-body pb-1">
                                <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-4">
                                    <div>
                                        <h4 class="mb-1">Training and Assessment Report</h4>
                                        <p>Job Order ID : <span class="text-primary"> TR2024-001</span></p>
                                    </div>

                                </div>
                                <div class="row align-items-center">
                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3"><i
                                                class="ti ti-square-rounded me-2"></i>Status</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3"><i
                                                class="ti ti-point-filled me-1"></i>InProgress</span>
                                    </div>
                                    <div class="col-sm-3">
                                        <p class="d-flex align-items-center mb-3">
                                            <iconify-icon icon="tabler:face-id" class="me-2"></iconify-icon>Trainer Code
                                        </p>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="d-flex align-items-center mb-3">
                                            TR-45678
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="accordion-item ">
                                <div class="accordion-header" id="headingThree">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Attendance</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderThree"
                                                    aria-expanded="false" aria-controls="primaryBorderThree">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderThree" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="simpletable_wrap">
                                            <table class="reportdata_table">
                                                <thead>
                                                    <tr>
                                                        <th>Participant Name</th>
                                                        <th>Attendance</th>
                                                        <th>Score (%)</th>
                                                        <th>Pass/Fail</th>
                                                        <th>Comments</th>
                                                        <th>Certificate Issued</th>
                                                        <th>Issued Date</th>
                                                        <th>Approved By</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Ahmed Al-Rahim</td>
                                                        <td>Present</td>
                                                        <td>85%</td>
                                                        <td>Pass</td>
                                                        <td>Excellent performance.</td>
                                                        <td>Yes</td>
                                                        <td>01 jan, 2025</td>
                                                        <td>Stephan Peralt</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Faisal Al-Muhammad</td>
                                                        <td>Present</td>
                                                        <td>45%</td>
                                                        <td>Fail</td>
                                                        <td>Needs improvement.</td>
                                                        <td>No</td>
                                                        <td>__</td>
                                                        <td>__</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <div class="accordion-button">
                                        <div class="d-flex align-items-center flex-fill">
                                            <h5>Results</h5>
                                            <div class=" ms-auto d-flex align-items-center">

                                                <a href="#" class="d-flex align-items-center collapsed collapse-arrow"
                                                    data-bs-toggle="collapse" data-bs-target="#primaryBorderFour"
                                                    aria-expanded="false" aria-controls="primaryBorderFour">
                                                    <i class="ti ti-chevron-down fs-18"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="primaryBorderFour" class="accordion-collapse collapse show border-top"
                                    aria-labelledby="headingFour">
                                    <div class="accordion-body">
                                        <div class="section">
                                            <div class="ReportData_fields">
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Participants Passed:
                                                    </div>
                                                    <div class="userenuData">
                                                        <div class="response-yes">02</div>
                                                    </div>
                                                </div>
                                                <div class="cu-task-fields__row">
                                                    <div class="cu-task-label-icon__container">Participants Failed:
                                                    </div>
                                                    <div class="userenuData">
                                                        <div class="no_optionmenu">01</div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        <div>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-3">Job order Details</h5>
                                <div class="list-group details-list-group ">
                                    <div class="list-group-item">
                                        <span>Template Name</span>
                                        <p class="text-gray-9">Monthly Maintenance</p>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Schedule Time</span>
                                            <p class="text-gray-9">4:30 PM</p>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Schedule Date</span>
                                            <p class="text-gray-9">31 Dec, 2024</p>
                                        </div>
                                    </div>

                                    <div class="list-group-item">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <span>Trainer</span>
                                            <div class="d-flex align-items-center">
                                                <span class="avatar avatar-sm avatar-rounded me-2">
                                                    <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                                </span>
                                                <p class="text-gray-9 mb-0">Stephan Peralt</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="list-group-item">
                                        <span>Training Category</span>
                                        <p class="text-gray-9">Safety Protocols for Heavy Machinery</p>
                                    </div>
                                    <div class="list-group-item">
                                        <span>Location</span>
                                        <p class="text-gray-9">Training Hall, Main Office, Jeddah</p>
                                    </div>
                                    <div class="list-group-item">
                                        <span>Client Notified By</span>
                                        <p class="text-gray-9">Email and Phone</p>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- <div class="card">
        <div class="card-header">
            <h5>Activity</h5>
        </div>
        <div class="card-body">

            <div class="notice-widget">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden">
                        <span class="bg-info avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-checkup-list fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Andrew
                                </span>added a New Task</p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden me-2">
                        <span class="bg-warning avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-circle-dot fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                </span>Moved task <span class="text-gray-9 fw-medium"> “Private chat
                                    module”</span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-success me-2"><i
                                        class="ti ti-point-filled me-1"></i>Completed</span>
                                <span><i class="ti ti-arrows-left-right me-2"></i></span>
                                <span class="badge badge-purple"><i
                                        class="ti ti-point-filled me-1"></i>Inprogress</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex overflow-hidden me-2">
                        <span class="bg-purple avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-checkup-list fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Jermai
                                </span>Created task <span class="text-gray-9 fw-medium"> “Private
                                    chat module”</span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex overflow-hidden">
                        <span
                            class="bg-secondary avatar avatar-md me-3 rounded-circle flex-shrink-0">
                            <i class="ti ti-photo fs-16"></i>
                        </span>
                        <div class="overflow-hidden">
                            <p class="text-truncate mb-1"><span class="text-gray-9 fw-medium">Hendry
                                </span> Updated Image <span class="text-gray-9 fw-medium">
                                    “logo.jpg” </span></p>
                            <p class="mb-1">15 May 2024, 6:53 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

                    </div>
                </div>
            </div>
            <div class="tab-pane text-muted" id="nav-activity" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Activities</h5>
                            <div class="dropdown">
                                <a href="javascript:void(0);"
                                    class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center"
                                    data-bs-toggle="dropdown">
                                    Sort By : Last 7 Days
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                            <i class="ti ti-calendar me-1"></i>
                            15 Feb 2024
                        </span>
                        <div class="border rounded p-3 mb-3">
                            <div class="d-flex align-items-start">
                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-skyblue me-2"><i
                                        class="ti ti-message-circle-2 fs-20"></i></span>
                                <div>
                                    <h6 class="fw-medium mb-1">You sent 1 Message to the contact.</h6>
                                    <span>10:25 pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded p-3 mb-3">
                            <div class="d-flex align-items-start">
                                <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i
                                        class="ti ti-phone fs-20"></i></span>
                                <div>
                                    <h6 class="fw-medium mb-1">Denwar responded to your appointment schedule question by
                                        call at 09:30pm.</h6>
                                    <span>09:25 pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded p-3 mb-3">
                            <div class="d-flex align-items-start">
                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-warning me-2"><i
                                        class="ti ti-file-description fs-20"></i></span>
                                <div>
                                    <h6 class="fw-medium mb-1">Notes added by Antony</h6>
                                    <p class="mb-1">Please accept my apologies for the inconvenience caused. It would be
                                        much appreciated if it's possible to reschedule to 6:00 PM, or any other day
                                        that week.</p>
                                    <span>10.00 pm</span>
                                </div>
                            </div>
                        </div>
                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                            <i class="ti ti-calendar me-1"></i>
                            15 Feb 2024
                        </span>
                        <div class="border rounded p-3 mb-3">
                            <div class="d-flex align-items-start">
                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i
                                        class="ti ti-user-circle fs-20"></i></span>
                                <div>
                                    <h6 class="fw-medium d-flex align-items-center mb-1">
                                        Meeting With
                                        <span class="avatar avatar-sm avatar-rounded mx-1"><img
                                                src="assets/img/profiles/avatar-02.jpg" alt="Img"></span>
                                        Abraham
                                    </h6>
                                    <span>Schedueled on 05:00 pm</span>
                                </div>
                            </div>
                        </div>
                        <div class="border rounded p-3 mb-3">
                            <div class="d-flex align-items-start">
                                <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i
                                        class="ti ti-phone fs-20"></i></span>
                                <div>
                                    <h6 class="fw-medium mb-1">Drain responded to your appointment schedule question.
                                    </h6>
                                    <span>09:25 pm</span>
                                </div>
                            </div>
                        </div>
                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                            <i class="ti ti-calendar me-1"></i>
                            Upcoming Activity
                        </span>
                        <div class="border rounded p-3">
                            <div class="d-flex align-items-start mb-2">
                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i
                                        class="ti ti-user-circle fs-20"></i></span>
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

        </div>

    </div>

</div>

<?php include("footer.php") ?>

<!-- status tracker js start -->
<script>
    $(document).ready(function() {
        // Add the Iconify icon dynamically to each step
        $(".status-step .arrow-icon").html(
            '<iconify-icon icon="iconamoon:arrow-right-2-light" width="20" height="20"></iconify-icon>'
        );
        // Function to update the status
        function updateStatus(currentStatus) {
            $(".status-step").each(function() {
                const stepStatus = $(this).data("status");
                if (stepStatus === currentStatus) {
                    $(this).addClass("completed").prevAll().addClass("completed");
                    $(this).nextAll().removeClass("completed");
                }
            });
        }
        // Example: Update to "Shoots complete"
        updateStatus("Shoots complete");
    });
</script>
<!-- end -->

<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js" type=""></script>
<!-- Fancybox JS -->
<script src="assets/plugins/fancybox/jquery.fancybox.min.js" type=""></script>
<!-- Custom JS -->
<script src="assets/js/projects.js" type=""></script>