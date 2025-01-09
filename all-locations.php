<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

    <!-- Breadcrumb -->
    <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
        <div class="my-auto mb-2">
            <h2 class="mb-1">All Locations</h2>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="ti ti-smart-home"></i></a>
                    </li>
                  
                    <li class="breadcrumb-item active" aria-current="page">All Locations</li>
                </ol>
            </nav>
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">

            <div class="mb-2">
                <a href="#" data-bs-toggle="modal" data-bs-target="#add_location"
                    class="btn btn-primary d-flex align-items-center cmnaddbtn">
                    <iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add New Location
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

    <!-- Performance Indicator list -->
    <div class="card tablemaincard_nopaddingleftright">

        <div class="card-body p-0">
            <div class="custom-datatable-filter">
                <table class="table common-datatable withoutActionTR nowrap w-100">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Location Name</th>
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
                            <td>Mumbai</td>
                            <td>27 Dec 2024</td>
                            <td>
                                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                                    <i class="ti ti-point-filled me-1"></i>Active
                                </span>
                            </td>
                            <td>
                                <div class="d-flex align-items-center ActionDropdown">
                                   
                                    <button type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#edit_location">
                                        <span class="icon">
                                            <span class="feather-icon">
                                            <iconify-icon icon="mage:edit"></iconify-icon>
                                            </span>
                                        </span>
                                    </button>
                                   
                                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                                        data-bs-toggle="modal" data-bs-target="#delete_modal"
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
            <td>Delhi</td>
            <td>15 Jan 2025</td>
            <td>
                <span class="badge badge-soft-danger d-inline-flex align-items-center badge-xs">
                    <i class="ti ti-point-filled me-1"></i>Inactive
                </span>
            </td>
            <td>
                <div class="d-flex align-items-center ActionDropdown">
                    <button type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#edit_location">
                        <span class="icon">
                            <span class="feather-icon">
                                <iconify-icon icon="mage:edit"></iconify-icon>
                            </span>
                        </span>
                    </button>
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#delete_modal" href="view-user-details.php">
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
            <td>Bangalore</td>
            <td>10 Feb 2025</td>
            <td>
                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                    <i class="ti ti-point-filled me-1"></i>Active
                </span>
            </td>
            <td>
                <div class="d-flex align-items-center ActionDropdown">
                    <button type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#edit_location">
                        <span class="icon">
                            <span class="feather-icon">
                                <iconify-icon icon="mage:edit"></iconify-icon>
                            </span>
                        </span>
                    </button>
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#delete_modal" href="view-user-details.php">
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
            <td>Chennai</td>
            <td>20 Mar 2025</td>
            <td>
                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                    <i class="ti ti-point-filled me-1"></i>Active
                </span>
            </td>
            <td>
                <div class="d-flex align-items-center ActionDropdown">
                    <button type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#edit_location">
                        <span class="icon">
                            <span class="feather-icon">
                                <iconify-icon icon="mage:edit"></iconify-icon>
                            </span>
                        </span>
                    </button>
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#delete_modal" href="view-user-details.php">
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
            <td>5</td>
            <td>Kolkata</td>
            <td>5 Apr 2025</td>
            <td>
                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                    <i class="ti ti-point-filled me-1"></i>Active
                </span>
            </td>
            <td>
                <div class="d-flex align-items-center ActionDropdown">
                    <button type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#edit_location">
                        <span class="icon">
                            <span class="feather-icon">
                                <iconify-icon icon="mage:edit"></iconify-icon>
                            </span>
                        </span>
                    </button>
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#delete_modal" href="view-user-details.php">
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
            <td>6</td>
            <td>Pune</td>
            <td>18 May 2025</td>
            <td>
                <span class="badge badge-soft-success d-inline-flex align-items-center badge-xs">
                    <i class="ti ti-point-filled me-1"></i>Active
                </span>
            </td>
            <td>
                <div class="d-flex align-items-center ActionDropdown">
                    <button type="button" class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#edit_location">
                        <span class="icon">
                            <span class="feather-icon">
                                <iconify-icon icon="mage:edit"></iconify-icon>
                            </span>
                        </span>
                    </button>
                    <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover" data-bs-toggle="modal" data-bs-target="#delete_modal" href="view-user-details.php">
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
    <!-- /Performance Indicator list -->

</div>

<div class="modal fade" id="add_location">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Location</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="all-locations.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Location Name</label>
										<input type="text" class="form-control">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select2">
											<option>Select</option>
											<option>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Location</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Department -->

		<!-- Edit Department -->
		<div class="modal fade" id="edit_location">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Location</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="all-locations.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Location Name</label>
										<input type="text" class="form-control" value="Mumbai">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select2">
											<option>Select</option>
											<option selected>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Location</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Department -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			
            <div class="modal-dialog modal-dialog-centered">
            <form action="">
				<div class="modal-content">
					<div class="modal-body text-center">
						<div class="deleteModal_icon">
                            <img src="assets/img/newimages/delectvector.gif" alt="">
                        </div>
						<h4 class="mb-2">Confirm Delete</h4>
						<p class="mb-3">You want to delete this location,  this cant  be undone <br> once you delete.</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a href="all-locations.php" class="btn btn-danger">Yes, Delete</a>
						</div>
					</div>
				</div>
                </form>
			</div>
           
		</div>
		<!-- /Delete Modal -->

<?php include("footer.php") ?>

