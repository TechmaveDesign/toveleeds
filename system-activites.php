<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h3 class="mb-1">System Activities</h3>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.php"><i class="ti ti-smart-home"></i></a>
                    </li>
                  
                    <li class="breadcrumb-item active" aria-current="page">System Activities</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <!-- <div class="mb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#add_location"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add New Location
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
<!-- Performance Indicator list -->
<div class="card tablemaincard_nopaddingleftright">

<div class="card-body p-0">
    <div class="custom-datatable-filter">
    <div id="tablefiltesa_container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="leftprFilters">
                        <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                                <div class="input-blocks">
                                    <iconify-icon icon="iconamoon:category-light" class="info-img"></iconify-icon>
                                    <select class="select2">
                                        <option disabled selected>Select Department</option>
                                        <option>Inspection</option>
                                        <option>NDT</option>
                                        <option>Operator Assessment</option>
                                        <option>Training</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="input-blocks">
                                    <!-- <i data-feather="box" class="info-img"></i> -->
                                    <iconify-icon icon="uil:user" class="info-img"></iconify-icon>
                                    <select class="select2">
                                        <option disabled selected>Select User</option>
                                        <option>Stephan Peralt</option>
                                        <option>Emma Johnson</option>
                                        <option>Amit Patel</option>
                                        <option>Sophia Lee</option>
                                        <option>Michael Carter</option>
                                        <option>James Smith</option>
                                        <option>Emily Davis</option>
                                        <option>Anna Taylor</option>
                                        <option>John Walker</option>
                                        <option>Jessica Brown</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                                <div class="input-blocks">
                                    <!-- <i data-feather="box" class="info-img"></i> -->
                                    <iconify-icon icon="oui:app-users-roles"  class="info-img"></iconify-icon>
                                    <select class="select2">
                                        <option disabled selected>Select Role</option>
                                        <option>Administrator</option>
                                        <option>Coordinator</option>
                                        <option>Manager</option>
                                        <option>Supervisor</option>
                                        <option>Team Lead</option>
                                  
                                    </select>

                                </div>
                            </div>

                          <div class="col-lg-3">
                            <div class="rightPrFilters">
                        <div class="input-icon mb-2 position-relative">
                            <span class="input-icon-addon">
                                <i class="ti ti-calendar text-gray-9"></i>
                            </span>
                            <input type="text" class="form-control date-range bookingrange"
                                placeholder="dd/mm/yyyy - dd/mm/yyyy">
                        </div>
                        
                    </div>
                            </div>

                        </div>
                    </div>
                </div>

                

            </div>
            <!-- /Filter -->
        </div>


        <table class="table common-datatable withoutActionTR nowrap w-100">
    <thead class="thead-light">
        <tr>
            <th>User Name</th>
            <th>Role</th>
            <th>Activity Date & Time</th>
            <th>Activity</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="d-flex align-items-center file-name-icon">
                    <a href="#" class="avatar avatar-md avatar-rounded">
                        <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Stephan Peralt">
                    </a>
                    <div class="ms-2">
                        <h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
                    </div>
                </div>
            </td>
            <td>Administrator</td>
            <td>10 Jan 2025, 14:23</td>
            <td>Logged in</td>
        </tr>
        <tr>
            <td>
                <div class="d-flex align-items-center file-name-icon">
                    <a href="#" class="avatar avatar-md avatar-rounded">
                        <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Emma Johnson">
                    </a>
                    <div class="ms-2">
                        <h6 class="fw-medium"><a href="#">Emma Johnson</a></h6>
                    </div>
                </div>
            </td>
            <td>Editor</td>
            <td>10 Jan 2025, 12:45</td>
            <td>
                Time log recorded: 4 hours on <a href="#" class="text-primary">Job ID: #2091</a> by <span class="text-dark">@James</span>
            </td>
        </tr>
        <tr>
            <td>
                <div class="d-flex align-items-center file-name-icon">
                    <a href="#" class="avatar avatar-md avatar-rounded">
                        <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Amit Patel">
                    </a>
                    <div class="ms-2">
                        <h6 class="fw-medium"><a href="#">Amit Patel</a></h6>
                    </div>
                </div>
            </td>
            <td>Viewer</td>
            <td>10 Jan 2025, 11:00</td>
            <td>
                <a href="#" class="text-primary">Inspection ID: #2095</a> completed and closed by <span class="text-dark">@Michael</span>
            </td>
        </tr>
        <tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Sophia Lee">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Sophia Lee</a></h6>
            </div>
        </div>
    </td>
    <td>Administrator</td>
    <td>09 Jan 2025, 16:30</td>
    <td>
        <a href="#" class="text-primary">Inspection ID: #2074</a> assigned to <span class="text-dark">@James</span> for task completion
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="John Doe">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">John Doe</a></h6>
            </div>
        </div>
    </td>
    <td>Manager</td>
    <td>09 Jan 2025, 15:20</td>
    <td>
        <a href="#" class="text-primary">Inspection ID: #2080</a> assigned to <span class="text-dark">@Alex</span> for task completion
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Emily Clark">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Emily Clark</a></h6>
            </div>
        </div>
    </td>
    <td>Team Lead</td>
    <td>09 Jan 2025, 14:15</td>
    <td>
        <a href="#" class="text-primary">Inspection ID: #2101</a> assigned to <span class="text-dark">@Sarah</span> for task completion
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Michael Brown">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Michael Brown</a></h6>
            </div>
        </div>
    </td>
    <td>Supervisor</td>
    <td>09 Jan 2025, 13:45</td>
    <td>
        <a href="#" class="text-primary">Inspection ID: #2053</a> assigned to <span class="text-dark">@Olivia</span> for task completion
    </td>
</tr>
<tr>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/newimages/userdummy.png" class="img-fluid" alt="Jessica Green">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Jessica Green</a></h6>
            </div>
        </div>
    </td>
    <td>Coordinator</td>
    <td>09 Jan 2025, 12:30</td>
    <td>
        <a href="#" class="text-primary">Inspection ID: #2045</a> assigned to <span class="text-dark">@Lucas</span> for task completion
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

