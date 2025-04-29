<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Role & Permission</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                    <li class="breadcrumb-item">
                        Home
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Role & Permission</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2 me-2" >
                <a href="create-role-permission.php"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Create Role & Permission
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
                            <th>Role</th>
                            <th>Created Date</th>
                            <th>Created by</th>
                            <th>Modified Date</th>
                            <th>Modified By</th>
                            <th>Status</th>
                            <th>Action</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Inspector</td>
                        <td>27 Dec 2024</td>
                        <td><a href="#" class="hightlightKOPID">Abii William</a></td>
                        <td>28 Dec 2024</td>
                        <td><a href="#" class="hightlightKOPID">Jim Korbat</a></td>
                        <td><span class="badge badge-soft-success">Active</span></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                               <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="edit-role-permission.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="ion:eye-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Supervisor</td>
                        <td>15 Jan 2025</td>
                        <td><a href="#" class="hightlightKOPID">David Smith</a></td>
                        <td>16 Jan 2025</td>
                        <td><a href="#" class="hightlightKOPID">John Doe</a></td>
                        <td><span class="badge badge-soft-danger">Inactive</span></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                               <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="edit-role-permission.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="ion:eye-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Certificate Reviewer</td>
                        <td>10 Feb 2025</td>
                        <td><a href="#" class="hightlightKOPID">Emma Watson</a></td>
                        <td>12 Feb 2025</td>
                        <td><a href="#" class="hightlightKOPID">Michael Johnson</a></td>
                        <td><span class="badge badge-soft-success">Active</span></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                               <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="edit-role-permission.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="ion:eye-outline"></iconify-icon>
                                            </span>
                                        </span>
                                    </a>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>Technical Manager</td>
                        <td>05 Mar 2025</td>
                        <td><a href="#" class="hightlightKOPID">Sophia Brown</a></td>
                        <td>07 Mar 2025</td>
                        <td><a href="#" class="hightlightKOPID">Chris Evans</a></td>
                        <td><span class="badge badge-soft-danger">Inactive</span></td>
                        <td>
                            <div class="d-flex align-items-center ActionDropdown">
                               <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        href="edit-role-permission.php">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="ion:eye-outline"></iconify-icon>
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



<?php include("footer.php") ?>




