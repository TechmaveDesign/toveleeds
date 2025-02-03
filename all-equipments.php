<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">All Equipments</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Equipments</li>
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
        <div class="tbuppertabs">
            <nav class="nav nav-style-6 nav-pills d-block" role="tablist">
                <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page" href="#nav-newjobs"
                    aria-selected="false" id="stickerTab"> Inspection Equipments
                 </a>

                <a class="nav-link " data-bs-toggle="tab" role="tab" href="#nav-in-pending" aria-selected="true" id="tagTab">
                    Assessment Equipments
                   </a>

            </nav>

        </div>
        <div class="tab-content">
            <div class="tab-pane show active text-muted" id="nav-newjobs" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Equipment Name</th>
                            <th>Created On</th>
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
                        <td>Air Compressor Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Anchor Machine Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Batching Plant Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Milling Machine Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Mixer Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Paver Machine Operator / Crawler Paver Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Roller Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt/Concrete Cutting Machine Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Backhoe Loader Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Bitumen Tanker Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>BMU Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Boom Truck Operator</td>
                        <td>27 Dec 2024</td>
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

            <div class="tab-pane text-muted" id="nav-in-pending" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Equipment Name</th>
                            <th>Created On</th>
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
                        <td>Air Compressor Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Anchor Machine Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Batching Plant Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Milling Machine Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Mixer Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Paver Machine Operator / Crawler Paver Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt Roller Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Asphalt/Concrete Cutting Machine Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Backhoe Loader Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Bitumen Tanker Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>BMU Operator</td>
                        <td>27 Dec 2024</td>
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
                        <td>Boom Truck Operator</td>
                        <td>27 Dec 2024</td>
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
            <div class="tab-pane  text-muted" id="nav-in-progress" role="tabpanel">
                <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Template Name</th>
                            <th>Created On</th>
                            <th>Status</th>
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
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Dispatched For Printing
                                                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Dispatched
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Dispatched For Printing
                                                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Dispatched 
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                            <th>Status</th>
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
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Dispatched For Printing
                                                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Dispatched
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Dispatched For Printing
                                                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Not Dispatched 
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Manage Template"
                                        href="">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="uiw:eye-o"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" title="Send to Print"
                                        href="view-user-details.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <iconify-icon icon="ion:print-outline"></iconify-icon>

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
                                    <label class="form-label">Equipment Type<div class="requiredLabel">*</div></label>
                                    <select class="form-control select2">
                                        <option disabled selected value="">Please Select...</option>
                                        <option value="Inspection Equipment">Inspection Equipment</option>
                                        <option value="Assessment Equipment">Assessment Equipment</option>
                                    </select>
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
                            Save & continue
                        </div>
                        <iconify-icon icon="bi:arrow-right"></iconify-icon>
                    </button>
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
                                    <label class="form-label">Equipment Type<div class="requiredLabel">*</div></label>
                                    <select class="form-control select2">
                                        <option disabled  value="">Please Select...</option>
                                        <option value="Inspection Equipment" selected>Inspection Equipment</option>
                                        <option value="Assessment Equipment">Assessment Equipment</option>
                                    </select>
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
                            Save & continue
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


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const stickerBtn = document.getElementById("addStickerBtn");
        const tagBtn = document.getElementById("addTagBtn");
        const stickerTab = document.getElementById("stickerTab");
        const tagTab = document.getElementById("tagTab");

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