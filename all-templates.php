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
                    aria-selected="false">Equipment Inspection Checklists
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true">
                    Operator Assessment Checklists
                   </a>
                <!-- <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-progress" aria-selected="true">
                   Training
                   </a>
                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-cart-justified"
                    aria-selected="true">NDT
                    </a> -->
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
                            <th>#ID</th>
                            <th>Template Name</th>
                            <th>Map With</th>
                            <th>Created On</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                #INS-CH0001
                            </td>
                            <td>Air Compressor checklist</td>
                            <td>DLS1</td>
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
                            <td>#INS-CH0002</td>
                            <td>Marketing Template</td>
                            <td>DLS3</td>
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
                            <td>#INS-CH0003</td>
                            <td>Newsletter Template</td>
                            <td>DLS1</td>
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
                            <td>#INS-CH0004</td>
                            <td>Event Template</td>
                            <td>DLS4</td>
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
                            <th>#ID</th>
                            <th>Template Name</th>
                            <th>Map With (Equipment's)</th>
                            <th>Created On</th>
                            <!-- <th>Status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                              #OPASS-CH0001
                            </td>
                            <td>Template 1</td>
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
                            <td> #OPASS-CH0002</td>
                            <td>Template 2</td>
                            <td>Air Compressor Operator</td>
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
                            <td>#OPASS-CH0003</td>
                            <td>Template 3</td>
                            <td>Anchor Machine Operator</td>
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
                            <td>#OPASS-CH0004</td>
                            <td>Template 4</td>
                            <td>Asphalt Batching Plant Operator</td>
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
    <div class="modal-dialog modal-dialog-centered CustomWidth">
        <div class="modal-content">
            <div class="modal-header modalheader_customStyle">
              <h5 class="modal-title" id="exampleModalLabel">
                    <div class="modaltitle_icon">
                        <iconify-icon icon="fluent:form-multiple-48-regular"></iconify-icon>
                    </div>
                    <div class="enquiryChoose_Title">
                        Choose Template Type
                        <span class="modalTitlePara">
                        Get Started: Choose Equipment Inspection or Operator Assessment.
                        </span>
                    </div>
                </h5>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="manage-template.php">
                <div class="modal-body">
                <div class="selectedtype_container">
                            <div class="card cardforAcFire" data-bs-toggle="offcanvas" data-bs-target="#SingleIndividial_form" aria-controls="offcanvasExample" data-form-type="single">
                                <div class="card-content">
                                    <div class="formtypecard_icon">
                                        <iconify-icon icon="f7:person"></iconify-icon>
                                    </div>
                                    <h2 class="card-title">Equipment Inspection</h2>
                                    <div class="radio-container">
                                        <input type="radio" id="radioAcFire" name="formType" value="acFire">
                                        <label for="radioAcFire" class="radio-label"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="card CardDual" data-bs-toggle="offcanvas" data-bs-target="#Dual_form" aria-controls="offcanvasExample" data-form-type="dual">
                                <div class="card-content">
                                    <div class="formtypecard_icon">
                                        <iconify-icon icon="fluent:dual-screen-arrow-right-24-regular"></iconify-icon>
                                    </div>
                                    <h2 class="card-title">Operator Assessment</h2>
                                    <div class="radio-container">
                                        <input type="radio" id="radioFdic" name="formType" value="fdic">
                                        <label for="radioFdic" class="radio-label"></label>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- <div class="card CardGroupselection" data-bs-toggle="offcanvas" data-bs-target="#Group_form" aria-controls="offcanvasExample" data-form-type="group">
                                <div class="card-content">
                                    <div class="formtypecard_icon">
                                        <iconify-icon icon="clarity:group-line"></iconify-icon>
                                    </div>
                                    <h2 class="card-title">Group</h2>
                                    <div class="radio-container">
                                        <input type="radio" id="radiogroup" name="formType" value="group">
                                        <label for="radiogroup" class="radio-label"></label>
                                    </div>
                                </div>
                            </div>

                            <input type="hidden" name="selectedFormType" id="selectedFormType" required=""> -->
                        </div>
                        <div class="form-group DLS_formBox">
                                <label class="form-label">Map with Equipment Inspection (Equipment)<div class="requiredLabel">*</div></label>
                                <select class="form-control select2" data-placeholder="Select DLS form">
                                    <option value=""></option>
                                    <option value="Air Compressor">Air Compressor</option>
                                    <option value="Anchor Point">Anchor Point</option>
                                    <option value="Asphalt Paving Machine / Paver">Asphalt Paving Machine / Paver</option>
                                    <option value="Building Hoist">Building Hoist</option>
                                    <option value="Building Maintenance Unit (BMU)">Building Maintenance Unit (BMU)</option>
                                    <option value="Chain Sling">Chain Sling</option>
                                    <option value="Hook Block">Hook Block</option>
                                    <option value="Hydraulic Boom Mobile Crane">Hydraulic Boom Mobile Crane</option>
                                    <option value="Mobile Crane">Mobile Crane</option>
                                </select>
                            </div>
                            <div class="form-group Assessment_formBox">
                                <label class="form-label">Map with Operator Assessment Equipment<div class="requiredLabel">*</div></label>
                                <select class="form-control select2" data-placeholder="Select Equipment">
                                    <option value=""></option>
                                    <option value="Agricultural Tractor Operator">Agricultural Tractor Operator</option>
                                    <option value="Air Compressor Operator">Air Compressor Operator</option>
                                    <option value="Anchor Machine Operator">Anchor Machine Operator</option>
                                    <option value="Asphalt Batching Plant Operator">Asphalt Batching Plant Operator</option>
                                    <option value="Asphalt Milling Machine Operator">Asphalt Milling Machine Operator</option>
                                    <option value="Asphalt Mixer Operator">Asphalt Mixer Operator</option>
                                    <option value="Asphalt Paver Machine Operator / Crawler Paver Operator">Asphalt Paver Machine Operator / Crawler Paver Operator</option>
                                    <option value="Asphalt Roller Operator">Asphalt Roller Operator</option>
                                    <option value="Asphalt/Concrete Cutting Machine Operator">Asphalt/Concrete Cutting Machine Operator</option>
                                </select>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const radioAcFire = document.getElementById("radioAcFire");
        const radioFdic = document.getElementById("radioFdic");
        const dlsFormBox = document.querySelector(".DLS_formBox");
        const assessmentFormBox = document.querySelector(".Assessment_formBox");

        // Hide both divs by default
        dlsFormBox.style.display = "none";
        assessmentFormBox.style.display = "none";

        function toggleForms() {
            dlsFormBox.style.display = radioAcFire.checked ? "block" : "none";
            assessmentFormBox.style.display = radioFdic.checked ? "block" : "none";
        }

        radioAcFire.addEventListener("change", toggleForms);
        radioFdic.addEventListener("change", toggleForms);
    });
</script>
