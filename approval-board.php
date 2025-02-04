<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Approval Board</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Manage Approvals
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Approval Board</li>
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

    <!-- Performance Indicator list -->
    <div class="card tablemaincard_nopaddingleftright">
    <?php include "headers/approval-header.php"?>
        <div class="row approvalcountcards">
            <!-- Total Companies -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="countcardflex_wrap">
                        <span class="avatar avatar-lg bg-warning  flex-shrink-0">
                            <iconify-icon icon="solar:bill-check-linear" width="22" height="22"></iconify-icon>
                        </span>
                        <div class="countcardflex_content">
                            <div class="ms-2 overflow-hidden">
                                <h3>Supervisor</h3>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Pending Approvals</p>
                            </div>
                            <div class="countof-Pendings">10</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="countcardflex_wrap">
                        <span class="avatar avatar-lg bg-success  flex-shrink-0">
                            <iconify-icon icon="solar:bill-check-linear" width="22" height="22"></iconify-icon>
                        </span>
                        <div class="countcardflex_content">
                            <div class="ms-2 overflow-hidden">
                                <h3>Technical Manager</h3>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Pending Approvals</p>
                            </div>
                            <div class="countof-Pendings">14</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="countcardflex_wrap">
                        <span class="avatar avatar-lg bg-info  flex-shrink-0">
                            <iconify-icon icon="solar:bill-check-linear" width="22" height="22"></iconify-icon>
                        </span>
                        <div class="countcardflex_content">
                            <div class="ms-2 overflow-hidden">
                                <h3>OM/GM</h3>
                                <p class="fs-12 fw-medium mb-1 text-truncate">Pending Approvals</p>
                            </div>
                            <div class="countof-Pendings">06</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- count card end -->

        <div class="card-body p-0">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5 class="d-flex align-items-center">All Approvals</h5>
                <div class="d-flex align-items-center flex-wrap row-gap-3">

                    <div class="input-icon position-relative w-120 me-2">
                        <span class="input-icon-addon">
                            <i class="ti ti-calendar"></i>
                        </span>
                        <input type="text" class="form-control datetimepicker" placeholder="Submission Date">
                    </div>
                    <div class="me-2 filterselectopt">
                        <select id="" class="select2">
                            <option value="" selected disabled readonly>Select an option</option>
                            <option value="approved">approved</option>
                            <option value="Pending">Pending</option>
                            <option value="Reject">Reject</option>
                        </select>
                    </div>
                    <div class="filterselectopt w-200">
                        <select id="" class="select2">
                            <option value="" selected disabled readonly>Select an option</option>
                            <option value="Technical Manager">Technical Manager</option>
                            <option value="Supervisor">Supervisor</option>
                            <option value="OM/GM">OM/GM</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="custom-datatable-filter">
                <!-- Approval List Table -->
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead>
                        <tr>
                            <th>Job/Certificate ID</th>
                            <th>Client Name</th>
                            <th>Inspector/Trainer</th>
                            <th>Submission Date</th>
                            <th>Approval Level</th>
                            <th>Current Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>JO-001</td>
                            <td>Stephan Peralt</td>
                            <td>Alex Doe</td>
                            <td>2024-01-15</td>
                            <td>Supervisor</td>
                            <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                        class="badge-label">Pending</span>
                                    <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" href="approval-details.php"
                                        aria-label="View Details" data-bs-original-title="View Details">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
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
                            <td>CR-005</td>
                            <td>Elena Cruz</td>
                            <td>Mia Lee</td>
                            <td>2024-01-16</td>
                            <td>Technical Manager</td>
                            <td>
                                <span class="badge bg-outline-warning pendingbadge badgecustomstyle"><span
                                        class="badge-label">Pending</span>
                                    <iconify-icon icon="mynaui:info-waves"></iconify-icon>
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="tooltip" data-placement="top" href="approval-details.php"
                                        aria-label="View Details" data-bs-original-title="View Details">
                                        <span class="icon">
                                            <span class="feather-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-eye">
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

<?php include("footer.php") ?>