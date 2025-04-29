<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Label Usage</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="view-labelAllotment.php">New Delhi Label's Assign</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Label Usage</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
        <div class="mb-2 d-flex gap-2">
               <a href="view-labelAllotment.php" class="btn btn-back d-flex align-items-center cmnaddbtn">
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
                                <!-- <a href="##" class="me-4">
                                    <div class="userName_container">
                                        <div class="ImageOfUser"><img src="assets/img/users/userdummy.png" alt="user"
                                                class="aprcard_userimage"></div>
                                        <div class="LabelnTitle">
                                            <label>Client Name</label>
                                            <h3> Danial Craig
                                            </h3>
                                        </div>
                                    </div>
                                </a> -->
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
                                    <label>Region</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">New Delhi</a>
                                    </h3>
                                </div>
                            </div>
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
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">S.Stk2500400 - S.Stk2500499</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="Approval_inner_column">
                                <div class="LabelnTitle">
                                    <label>Available Range</label>
                                    <h3 class="RequestID"><a href="job-order-details.php" target="_blank">S.Stk2500450 - S.Stk2500499</a>
                                    </h3>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="enquiryRight_header_data TaskAction_wrapper ">
                        <div class="enquiryDate dueDate_container">
                            <iconify-icon icon="ion:calendar-outline"></iconify-icon>
                            <div class="duedatelabel">Last Use Date : </div> Nov 01, 2024 15:20
                        </div>

                        <div class="enquiryID_container">
                            <div class="EnquiryID">Label Status</div>
                            <div class="IDButton approval_status_update">
                                <button type="button" class="SourceDataBtn success" >
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

               

            </div>
        </div>

        <div class="custom-datatable-filter">
                    <table class="table common-datatable withoutActionTR nowrap w-100">
                        <thead class="thead-light">
                            <tr>
                                <th>Job Order Id</th>
                                <th>Service Type</th>
                                <th>Used Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOPID">#JO2500002</a></td>
                            <td>Equipment Inspection, Operator Assessment</td>
                            <td>10/02/2024 15:15</td>
                            <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                    <span class="badge-label">Used</span>
                                    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="job-order-details-inspection-assessment.php">
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
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOPID">#JO2500003</a></td>
                            <td>Equipment Inspection</td>
                            <td>11/02/2024 10:30</td>
                            <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                    <span class="badge-label">Used</span>
                                    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="job-order-details-inspection-assessment.php">
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
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOPID">#JO2500004</a></td>
                            <td>Operator Assessment</td>
                            <td>12/02/2024 12:45</td>
                            <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                    <span class="badge-label">Used</span>
                                    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="job-order-details-inspection-assessment.php">
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
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOPID">#JO2500005</a></td>
                            <td>Equipment Inspection, Operator Assessment</td>
                            <td>13/02/2024 09:20</td>
                            <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                    <span class="badge-label">Used</span>
                                    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="job-order-details-inspection-assessment.php">
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
                            <td><a href="job-order-details-inspection-assessment.php" class="hightlightKOPID">#JO2500006</a></td>
                            <td>Equipment Inspection</td>
                            <td>14/02/2024 14:10</td>
                            <td>
                                <span class="badge bg-outline-success pendingbadge badgecustomstyle">
                                    <span class="badge-label">Used</span>
                                    <iconify-icon icon="weui:done2-outlined"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" href="job-order-details-inspection-assessment.php">
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
<!-- /Performance Indicator list -->

</div>


</div>

<?php include("footer.php") ?>

