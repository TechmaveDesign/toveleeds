<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">All Checklist Templates</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Manage Templates
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Templates</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addtemplatemodal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Template
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
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false">Equipment Inspection
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">
                    Operator Assessment
                   </a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress" aria-selected="true">
                   Training
                   </a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-cart-justified"
                    aria-selected="true">NDT
                    </a>
                <!-- <a class="nav-link" data-bs-toggle="tab" role="tab" href="#nav-orders-justified"
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
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Template Name</th>
                            <th>Created On</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Air Compressor checklist</td>
                            <td>27 Dec 2024</td>
                        
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="inspection-checklist-view.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Marketing Template</td>
                            <td>25 Dec 2024</td>
                          
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="inspection-checklist-view.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Newsletter Template</td>
                            <td>22 Dec 2024</td>
                          
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="inspection-checklist-view.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Event Template</td>
                            <td>20 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="inspection-checklist-view.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
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
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Template Name</th>
                            <th>Created On</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Agricultural Tractor Operator</td>
                            <td>27 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="agriculture-assessment-view.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Rigger Level I</td>
                            <td>25 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="riger-level-1.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Newsletter Template</td>
                            <td>22 Dec 2024</td>
                          
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="agriculture-assessment-view.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Event Template</td>
                            <td>20 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="View Template"
                                        href="riger-level-1.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                              <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
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
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Template Name</th>
                            <th>Created On</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Untitled Template</td>
                            <td>27 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Marketing Template</td>
                            <td>25 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Newsletter Template</td>
                            <td>22 Dec 2024</td>
                          
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Event Template</td>
                            <td>20 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
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
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Template Name</th>
                            <th>Created On</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>Untitled Template</td>
                            <td>27 Dec 2024</td>
                            
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Marketing Template</td>
                            <td>25 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Newsletter Template</td>
                            <td>22 Dec 2024</td>
                           
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Event Template</td>
                            <td>20 Dec 2024</td>
                          
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="manage-template.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Duplicate Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:copy-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Delete Template"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="fluent:delete-24-regular"></iconify-icon>
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
            <!-- <div class="tab-pane text-muted" id="nav-orders-justified" role="tabpanel">
                <div class="custom-datatable-filter">
                    
                </div>
            </div>

            <div class="tab-pane text-muted" id="nav-draftjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                
                    
                </div>
            </div>
            <div class="tab-pane text-muted" id="nav-closedjobs" role="tabpanel">
                <div class="custom-datatable-filter">
               
                </div>
            </div> -->
        </div>

    </div>

</div>

<!-- Add Template modal start -->
<div class="modal fade custombottm_modalStyle" id="addtemplatemodal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Template</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="manage-template.php">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <img src="assets/img/newimages/list.png" alt="">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Template Name <div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter Template Title" class="form-control largeinp_height">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btnContinueProcess btn-primary editEnquiryBtn">
                        <div class="buttontext">
                            <div class="formediticon_modal">
                                <iconify-icon icon="uit:process"></iconify-icon>
                            </div>
                            Continue to Process
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add template -->

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                    <i class="ti ti-trash-x fs-36"></i>
                </span>
                <h4 class="mb-1">Confirm Delete</h4>
                <p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
                <div class="d-flex justify-content-center">
                    <a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
                    <a href="users.html" class="btn btn-danger">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Delete Modal -->

<?php include("footer.php") ?>
<!-- button submit loader js start -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.btnContinueProcess').forEach(function(button) {
            button.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent default form submission
                const form = button.closest('form');
                const inputField = form.querySelector(
                'input[type="text"]'); // Select the input field
                const errorMessage = form.querySelector(
                '.error-message'); // Check for existing error message
                if (!inputField.value.trim()) {
                    // Add a red border to highlight the empty input
                    inputField.classList.add('input-error');
                    inputField.focus();
                    // Show error message
                    if (!errorMessage) {
                        const errorElement = document.createElement('div');
                        errorElement.className = 'error-message';
                        errorElement.textContent = 'Please enter Template Title';
                        inputField.insertAdjacentElement('afterend', errorElement);
                    }
                    // Remove error when user starts typing
                    inputField.addEventListener('input', function() {
                        if (inputField.value.trim()) {
                            inputField.classList.remove('input-error');
                            const existingError = form.querySelector('.error-message');
                            if (existingError) {
                                existingError.remove();
                            }
                        }
                    });
                    return;
                }
                // Show loading dots
                button.classList.add('btn-loading');
                button.insertAdjacentHTML('beforeend', `
        <div class="loading-dots">
          <span></span><span></span><span></span>
        </div>
      `);
                // Simulate a delay before redirecting to the action page
                setTimeout(function() {
                    // Remove loading dots
                    button.classList.remove('btn-loading');
                    const loadingDots = button.querySelector('.loading-dots');
                    if (loadingDots) {
                        loadingDots.remove();
                    }
                    // Redirect to the form's action page
                    window.location.href = form.getAttribute('action');
                }, 2000); // Delay for 2 seconds (2000ms)
            });
        });
    });
</script>
<!-- button submit loader js end -->