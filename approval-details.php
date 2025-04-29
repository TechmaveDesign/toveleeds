<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Approval Details</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="approval-board.php">Approval Board</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Approval Details</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
        <div class="mb-2 d-flex gap-2">
               <a href="approval-board.php" class="btn btn-back d-flex align-items-center cmnaddbtn">
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

    <div class="card tablemaincard_nopaddingleftright">
        <div class="card-body p-0">

            <div class="custom-datatable-filter">

                <header class="task-header">
                    <div class="d-flex align-items-center">
                        <div class="Ticket_apr_info whoraisedthis_action">
                            <div class="Approval_inner_column flexisers_wrap">
                                <a href="##" class="me-4">
                                    <div class="userName_container">
                                        <div class="ImageOfUser"><img src="assets/img/users/userdummy.png" alt="user"
                                                class="aprcard_userimage"></div>
                                        <div class="LabelnTitle">
                                            <label>Client Name</label>
                                            <h3> Danial Craig
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                                <a href="##">
                                    <div class="userName_container">
                                        <div class="ImageOfUser"><img src="assets/img/users/userdummy.png" alt="user"
                                                class="aprcard_userimage"></div>
                                        <div class="LabelnTitle">
                                            <label>Inspector</label>
                                            <h3> Alex Doe
                                            </h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Job ID</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">JOB-0004</a>
                                    </h3>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="enquiryRight_header_data TaskAction_wrapper ">
                        <div class="enquiryDate dueDate_container">
                            <iconify-icon icon="ion:calendar-outline"></iconify-icon>
                            <div class="duedatelabel">Submission Date : </div> Nov 01, 2024 15:20
                        </div>

                        <div class="enquiryID_container">
                            <div class="EnquiryID">Approval Status</div>
                            <div class="IDButton approval_status_update">
                                <button type="button" class="SourceDataBtn pending" id="approvalStatusBtn">
                                    Approval Pending
                                </button>
                            </div>
                        </div>

                        <button class="ApproveButton" id="approveButton" data-bs-toggle="modal" data-bs-target="#approvalModal">
        <iconify-icon icon="icon-park-outline:check"></iconify-icon>
        Approve
    </button>

                    </div>

                </header>

                <div class="approvalprogress">
                    <div class="innerprogress_container">
                        <!-- Supervisor Step -->
                        <div class="progress-step" data-status="approved">
                            <div class="step-circle">1</div>
                            <span class="step-label">Supervisor</span>
                            <span class="step-status">
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                    <span class="badge-label">Awaiting Approval</span>
                                    <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                </span>
                            </span>
                        </div>
                        <div class="progress-line"></div>

                        <!-- Technical Manager Step -->
                        <div class="progress-step" data-status="awaiting">
                            <div class="step-circle">2</div>
                            <span class="step-label">Technical Manager</span>
                            <span class="step-status">
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle">
                                    <span class="badge-label">Awaiting Approval</span>
                                    <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                </span>
                            </span>
                        </div>
                        <div class="progress-line"></div>

                        <!-- OM/GM Step -->
                        <div class="progress-step" data-status="pending">
                            <div class="step-circle">3</div>
                            <span class="step-label">OM/GM</span>
                            <span class="step-status">
                                <span class="badge bg-outline-secondary pendingbadge badgecustomstyle">
                                    <span class="badge-label">Pending</span>
                                    <iconify-icon icon="tabler:progress-alert"></iconify-icon>
                                </span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="tbuppertabs no_tab_padding_top">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
               <a class="nav-link  active" data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">
                    Request For
                </a>
                <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false">Previous Comments
                </a>

               
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress"
                    aria-selected="true">Approval Activity
                </a>

            </nav>

        </div>
        <div class="tab-content">
        <div class="tab-pane text-muted show active" id="nav-in-pending" role="tabpanel">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Approval Request List</h5>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                    <div class="me-3">
                        <div class="input-icon-end position-relative">
                            <input type="text" class="form-control date-range bookingrange"
                                placeholder="dd/mm/yyyy - dd/mm/yyyy">
                            <span class="input-icon-addon">
                                <i class="ti ti-chevron-down"></i>
                            </span>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="javascript:void(0);"
                            class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                            data-bs-toggle="dropdown">
                            Sort By : Last 7 Days
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                            </li>
                        </ul>
                    </div>
                    <button class="Downloadall_docs btn" type="button">Download All <iconify-icon
                            icon="mynaui:download"></iconify-icon></button>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter">
                <table
                        class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
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
                                <td><a href="inspection-edit-rd1-form.php"
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
                                        class="badge badge-soft-success">Completed</span>
                                </td>
                                <td>
                                    <div
                                        class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="DLS Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip"
                                            data-placement="top"
                                            title="View Job Orders"
                                            href="inspection-edit-rd1-form.php">
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
                                <td><a href="inspection-edit-rd1-form.php"
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
                                        class="badge badge-soft-success">Completed</span>
                                </td>
                                <td>
                                    <div
                                        class="d-flex align-items-center ActionDropdown">
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#"
                                        data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight"
                                        title="DLS Activity">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="hugeicons:activity-02"></iconify-icon>
                                            </span>
                                        </span>
                                        </a>
                                        <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                            data-bs-toggle="tooltip"
                                            data-placement="top"
                                            title="View Job Orders"
                                            href="inspection-edit-rd1-form.php">
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
            <div class="tab-pane  text-muted" id="nav-newjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                    <div class="card border-0 noboxshadow">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                <h5>Previous Comments</h5>
                                <div class="d-flex align-items-center">
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);"
                                            class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center"
                                            data-bs-toggle="dropdown">
                                            Sort By : Last 7 Days
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently
                                                    Added</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item rounded-1">Ascending</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"
                                                    class="dropdown-item rounded-1">Desending</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last
                                                    Month</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7
                                                    Days</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0);"
                                        class="addNoteBtn"
                                        data-bs-toggle="modal" data-bs-target="#add_notes">
                                        <i class="ti ti-circle-plus me-1"></i>
                                        Add Note
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="border rounded p-3 mb-3 previouscmt_card">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                            <img src="assets/img/profiles/avatar-02.jpg" alt="Img">
                                        </span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Darlee Robertson</h6>
                                            <span>15 Sep 2023, 12:10 pm</span>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                    <p class="mb-3">A project review evaluates the success of an initiative and
                                        identifies areas for improvement.
                                        It can also evaluate a current project to determine whether
                                        it's on the right track. Or, it can determine the success of a completed
                                        project.
                                    </p>

                                </div>
                            </div>
                            <div class="border rounded p-3 mb-3 previouscmt_card">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                            <img src="assets/img/profiles/avatar-03.jpg" alt="Img">
                                        </span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Sharon Roy</h6>
                                            <span>18 Sep 2023, 09:52 am</span>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                    <p class="mb-3">
                                        A project plan typically contains a list of the essential elements of a project,
                                        such as stakeholders, scope, timelines, estimated cost and communication
                                        methods.
                                        The project manager typically lists the information based on the assignment.
                                    </p>

                                </div>
                            </div>
                            <div class="border rounded p-3 mb-3 previouscmt_card">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                            <img src="assets/img/users/userdummy.png" alt="Img">
                                        </span>
                                        <div>
                                            <h6 class="fw-medium mb-1">Vaughan Lewis</h6>
                                            <span>20 Sep 2023, 10:26 pm</span>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                    <p class="mb-3">
                                        Projects play a crucial role in the success of organizations, and their
                                        importance cannot
                                        be overstated. Whether it's launching a new product, improving an existing
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="tab-pane  text-muted" id="nav-in-progress" role="tabpanel">
                <div class="custom-datatable-filter">
                    <div class="card border-0 noboxshadow">
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
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently
                                                Added</a>
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
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7
                                                Days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <span class="badge badge-soft-secondary  d-inline-flex align-items-center mb-3">
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
                                        <h6 class="fw-medium mb-1">Denwar responded to your appointment schedule
                                            question by call at 09:30pm.</h6>
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

</div>
<!-- /Performance Indicator list -->

</div>

<!-- Add Note -->
<div class="modal fade" id="add_notes" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header header-border align-items-center justify-content-between">
                <h5 class="modal-title">Add New Note</h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="approval-details.php">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Title <span class="text-danger"> *</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Note <span class="text-danger"> *</span></label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="d-flex align-items-center justify-content-end m-0">
                        <button type="button" class="btn btn-outline-light border me-2">Cancel</button>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add Note -->

<!-- Bootstrap Modal -->
<div class="modal fade" id="approvalModal" tabindex="-1" aria-labelledby="approvalModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="approvalModalLabel">Approval Reason</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="approvalForm">
            <div class="modal-body">
                
                    <div class="mb-3">
                        <label for="approvalNote" class="form-label">Enter Approval Reason</label>
                        <textarea class="form-control" id="approvalNote" rows="3" required></textarea>
                    </div>
                   
               
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<div class="offcanvas offcanvas-end customOffcanvasWidth-400" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Recent Activity <span class="RecentActivityID"><a href="inspection-edit-rd1-form.php">#DLS2500001</a></span></h5>
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

<!-- progressbar js start -->
<script>
    // Function to update a step's badge to "Approved"
    function approveStep(stepNumber) {
        // Select the desired step using its index
        const step = document.querySelectorAll('.progress-step')[stepNumber - 1];
        // Replace the current badge with the "Approved" badge
        const statusContainer = step.querySelector('.step-status');
        statusContainer.innerHTML = `
        <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
            <i class="ti ti-point-filled me-1"></i>Approved
        </span>
    `;
        // Update the step's circle to reflect its approved state
        const circle = step.querySelector('.step-circle');
        circle.classList.remove('active');
        circle.classList.add('completed');
    }
    // Example Usage
    approveStep(1); // Approves Supervisor step
    // approveStep(2); // Approves Technical Manager step
</script>
<!-- progressbar js end -->

<script>
document.addEventListener("DOMContentLoaded", () => {
    const approvalForm = document.getElementById("approvalForm");
    const approvalStatusBtn = document.getElementById("approvalStatusBtn");
    const approveButton = document.getElementById("approveButton");

    // Function to update a step's badge to "Approved"
    function approveStep(stepNumber) {
        // Select the desired step using its index
        const step = document.querySelectorAll('.progress-step')[stepNumber - 1];
        // Replace the current badge with the "Approved" badge
        const statusContainer = step.querySelector('.step-status');
        statusContainer.innerHTML = `
        <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
            <i class="ti ti-point-filled me-1"></i>Approved
        </span>
    `;
        // Update the step's circle to reflect its approved state
        const circle = step.querySelector('.step-circle');
        circle.classList.remove('active');
        circle.classList.add('completed');
    }

    approvalForm.addEventListener("submit", (e) => {
        e.preventDefault();

        // Show confirmation alert using SweetAlert
        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to approve this request?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Approve it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Update Approval Status Button
                approvalStatusBtn.innerHTML = "Approved";
                approvalStatusBtn.classList.remove("pending");
                approvalStatusBtn.classList.add("approved");

                // Disable Approve Button
                approveButton.disabled = true;
                approveButton.classList.add("disabled");
                approveButton.innerHTML = `<iconify-icon icon="icon-park-outline:check"></iconify-icon> Approved`;

                // Call the approveStep function for the second step
                approveStep(2); // Approves Technical Manager step

                // Close the modal
                const modal = bootstrap.Modal.getInstance(
                    document.getElementById("approvalModal")
                );
                modal.hide();

                // Show success alert
                Swal.fire("Approved!", "Your approval has been recorded.", "success");
            }
        });
    });

    // Example usage
    approveStep(1); // Approves Supervisor step as default
});
</script>
<!-- approve condition functionalty end -->


<!-- tooltip & offcanvas both are working on anchor tag-->
<script>
   document.addEventListener("DOMContentLoaded", function() {
       var tooltipTriggerList = [].slice.call(document.querySelectorAll('[title]'));
       var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
           return new bootstrap.Tooltip(tooltipTriggerEl);
       });
   });
</script>