<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Equipments Inspections (Equipment's)</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Equipments Inspections (Equipment's)</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" >
                <a href="#" data-bs-toggle="modal" data-bs-target="#addStickerModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Equipments
                </a>
            </div>

            <!-- <div class="mb-2" id="addTagBtn" style="display: none;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#addTagModal"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add Assessment Equipments
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
    <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Equipment Name</th>
                            <th>Map With</th>
                            <th>Created On</th>
                            <th>Add/Edit/View Template</th>
                            <th>Action</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               1
                            </td>
                            <td>Air Compressor</td>
                            <td>DLS 1</td>
                            <td>27 Dec 2024</td>
                            <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Asphalt Paving Machine / Paver</td>
                        <td>DLS1</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                  
                                </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mobile Crane</td>
                        <td>DLS2</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Hydraulic Boom Mobile Crane</td>
                        <td>DLS2</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Tower Crane</td>
                        <td>DLS3</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Building Hoist</td>
                        <td>DLS4</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Suspended Cradle</td>
                        <td>DLS4</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Building Maintenance Unit  (BMU)</td>
                        <td>DLS4</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Hook Block</td>
                        <td>DLS5</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Vacuum Lifter</td>
                        <td>DLS5</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Anchor Point</td>
                        <td>DLS5</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>Chain Sling</td>
                        <td>DLS6</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>Wire Gripping Clamp</td>
                        <td>DLS7</td>
                        <td>27 Dec 2024</td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Create Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="solar:checklist-minimalistic-broken"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="Edit Checklist Template"
                                    href="manage-template.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="fluent:text-bullet-list-square-edit-20-regular"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                                <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                    data-bs-toggle="tooltip" data-placement="top" title="View Checklist Template"
                                    href="inspection-checklist-view.php">
                                    <span class="icon">
                                        <span class="feather-icon">
                                        <iconify-icon icon="carbon:task-view"></iconify-icon>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </td>
                        <td>
                        <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="#" data-bs-toggle="modal" data-bs-target="#EditStickerModal">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="cuida:edit-outline"></iconify-icon>
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

<!-- Add Template modal start -->
<div class="modal fade custombottm_modalStyle" id="addStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Equipment</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/maintenance.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Please Enter The Equipment Name" class="form-control">
                            </div>
                        
                            <div class="form-group">
                                <label class="form-label">Map with <div class="requiredLabel">*</div></label>
                                <select class="form-control select2" data-placeholder="Select DLS form">
                                    <option value=""></option>
                                    <option value="DLS1">DLS1</option>
                                    <option value="DLS2">DLS2</option>
                                    <option value="DLS3">DLS3</option>
                                    <option value="DLS4">DLS4</option>
                                    <option value="DLS5">DLS5</option>
                                    <option value="DLS6">DLS6</option>
                                    <option value="DLS7">DLS7</option>
                                    <option value="DLS8">DLS8</option>
                                    <option value="DLS9">DLS9</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save 
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tag Modal -->
<!-- Add Template modal start -->
<div class="modal fade custombottm_modalStyle" id="EditStickerModal">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Equipment</h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="">
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="iconImageSection">
                                <!-- <img src="assets/img/newimages/list.png" alt=""> -->
                                <img src="assets/img/newimages/maintenance.png" alt="tttt">
                            </div>
                        </div>

                        <div class="col-md-12">
                        <div class="form-group">
                                <label class="form-label">Equipment Name<div class="requiredLabel">*</div></label>
                                <input type="text" placeholder="Agricultural Tractor Operator" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Map with <div class="requiredLabel">*</div></label>
                                <select class="form-control select2" data-placeholder="Select DLS form">
                                    <option value=""></option>
                                    <option value="DLS1">DLS1</option>
                                    <option value="DLS2">DLS2</option>
                                    <option value="DLS3">DLS3</option>
                                    <option value="DLS4">DLS4</option>
                                    <option value="DLS5">DLS5</option>
                                    <option value="DLS6">DLS6</option>
                                    <option value="DLS7">DLS7</option>
                                    <option value="DLS8">DLS8</option>
                                    <option value="DLS9">DLS9</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                    <iconify-icon icon="ci:save"></iconify-icon>  Save & Update
                    </button>
                </div>
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
    $(document).ready(function() {
        // Initialize Select2
        $('.select2').select2();

        // Hide all DLS_formBox elements by default
        $('.DLS_formBox').hide();

        // Event listener for Equipment Type selection
        $('.form-group select').each(function() {
            $(this).on('change', function() {
                var selectedValue = $(this).val();
                var formBox = $(this).closest('.form-group').next('.DLS_formBox'); // Find the related DLS_formBox

                if (selectedValue === 'Equipment Inspection') {
                    formBox.slideDown();
                } else if (selectedValue === 'Operator Assessment') {
                    formBox.slideUp();
                }
            });
        });
    });
</script>