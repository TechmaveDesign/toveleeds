<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
		<div class="my-auto mb-2">
			<h2 class="mb-1">Clients</h2>
			<nav>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="index.html"><i class="ti ti-smart-home"></i></a>
					</li>
					<li class="breadcrumb-item">
						Home
					</li>
					<li class="breadcrumb-item active" aria-current="page">All Clients</li>
				</ol>
			</nav>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
		<div class="mb-2">
				<a href="client-add.php" 
					class="btn btn-primary d-flex align-items-center cmnaddbtn"><iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Add Client</a>
			</div>
			<!-- <div class="mb-2">
				<a href="#" data-bs-toggle="modal" data-bs-target="#add_users"
					class="btn btn-primary d-flex align-items-center cmnaddbtn"><iconify-icon icon="fluent-mdl2:add-to"></iconify-icon> Add Client</a>
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
				<table class="table common-datatable withoutActionTR nowrap w-100">
					<thead class="thead-light">
						<tr>
							<th>Client ID</th>
							<th>Client Name</th>
							<th>Client Email Address</th>
                            <th>Client Phone</th>
							<th>Address</th>
                            <th>Business type</th>
                            <th>Location</th>
							<th>Account Status</th>
                            <th>Client Created On</th>
							<th>Payment History </th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								CL001
							</td>
							<td>
								<div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-33.jpg" class="img-fluid" alt="Stephan Peralt">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Stephan Peralt</a></h6>
									</div>
								</div>
							</td>
							<td>
								stephan.peralt@example.com
							</td>
                            <td>+91-8785647567</td>
							<td>123 Main Street, Apt 4B, Springfield, IL 62704, USA</td>
                            <td>Oil and Gas Pipelines</td>
                            <td>Mumbai</td>
                            <td>
								<span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
							</td>
							<td>17 Oct 2024</td>
							<td><a href="##" class="tablelink_data">Payment History</a></td>
							
							<td>
								<div class="d-flex align-items-center ActionDropdown">
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
										data-bs-toggle="tooltip" data-placement="top" title="View Job Orders"
										href="client-detail.php">
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
									<button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
										<span class="icon">
											<span class="feather-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none" stroke="currentColor"
													stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
													class="feather feather-trash">
													<polyline points="3 6 5 6 21 6"></polyline>
													<path
														d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
													</path>
												</svg>
											</span>
										</span>
									</button>
								</div>
							</td>
						</tr>
                        <tr>
    <td>CL002</td>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/users/user-34.jpg" class="img-fluid" alt="Emma Johnson">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Emma Johnson</a></h6>
            </div>
        </div>
    </td>
    <td>emma.johnson@example.com</td>
    <td>+91-9897654321</td>
	<td>789 Pine Avenue, Floor 3, Brooklyn, NY 11201, USA</td>
    <td>Construction and Infrastructure</td>
    <td>Delhi</td>
    <td>
    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
    </td>
    <td>12 Sep 2024</td>
	<td><a href="##" class="tablelink_data">Payment History</a></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                data-bs-toggle="tooltip" data-placement="top" title="View Job Orders"
                href="client-detail.php">
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
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>CL003</td>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/users/user-28.jpg" class="img-fluid" alt="Amit Patel">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Amit Patel</a></h6>
            </div>
        </div>
    </td>
    <td>amit.patel@example.com</td>
    <td>+91-7654321098</td>
	<td>202 Oak Drive, Building 5, Orlando, FL 32801, USA</td>
    <td>Healthcare</td>
    <td>Bangalore</td>
    <td>
    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
    </td>
    <td>05 Aug 2024</td>
	<td><a href="##" class="tablelink_data">Payment History</a></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                data-bs-toggle="tooltip" data-placement="top" title="View Job Orders"
                href="client-detail.php">
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
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                        </svg>
                    </span>
                </span>
            </button>
        </div>
    </td>
</tr>
<tr>
    <td>CL004</td>
    <td>
        <div class="d-flex align-items-center file-name-icon">
            <a href="#" class="avatar avatar-md avatar-rounded">
                <img src="assets/img/users/user-37.jpg" class="img-fluid" alt="Sophia Lee">
            </a>
            <div class="ms-2">
                <h6 class="fw-medium"><a href="#">Sophia Lee</a></h6>
            </div>
        </div>
    </td>
    <td>sophia.lee@example.com</td>
    <td>+91-9988776655</td>
	<td>404 Cedar Court, Unit B2, Denver, CO 80202, USA</td>
    <td>Technology and IT</td>
    <td>Hyderabad</td>
    <td>
        <span class="badge badge-success d-inline-flex align-items-center badge-xs">
            <i class="ti ti-point-filled me-1"></i>Active
        </span>
    </td>
    <td>29 Jul 2024</td>
	<td><a href="##" class="tablelink_data">Payment History</a></td>
    <td>
        <div class="d-flex align-items-center ActionDropdown">
            <a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
                data-bs-toggle="tooltip" data-placement="top" title="View Job Orders"
                href="client-detail.php">
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
            <button class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover del-button">
                <span class="icon">
                    <span class="feather-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path
                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                        </svg>
                    </span>
                </span>
            </button>
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

<!-- Add client -->
<div class="modal fade custombottm_modalStyle" id="add_users">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Client</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="clients.php">
				<div class="modal-body">
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Client ID</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Client Name</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Client Phone Number</label>
								<input type="text" class="form-control">
							</div>
						</div>
                        <div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Email Address</label>
								<input type="email" class="form-control">
							</div>
						</div>
                        <div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Business Type</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Location</label>
								<select class="select2">
									<option disabled selected readonly>Select option</option>
									<option value="Bangalore">Bangalore</option>
									<option value="Delhi">Delhi</option>
									<option value="Hyderabad">Hyderabad</option>
									<option value="Mumbai">Mumbai</option>

								</select>
							</div>
						</div>
                        <div class="col-md-12">
							<div class="form-group">
								<label class="form-label">Account Status</label>
								<select class="select2">
                                <option disabled selected readonly>Select option</option>
									<option value="Active">Active</option>
									<option value="Inactive">Inactive</option>
								</select>
							</div>
						</div>
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary canvasSubmit_button">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Users -->

<!-- Edit  Users -->
<div class="modal fade" id="edit_user">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit User</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="users.php">
				<div class="modal-body">
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Employee ID</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Employee Name</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Contact Details</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Password</label>
								<div class="pass-group">
									<input type="password" class="pass-input form-control">
									<span class="ti toggle-password ti-eye-off"></span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Confirm Password</label>
								<div class="pass-group">
									<input type="password" class="pass-inputs form-control">
									<span class="ti toggle-passwords ti-eye-off"></span>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Role</label>
								<select class="select2">
									<option>Select</option>
									<option value="Manager">Manager</option>
									<option value="Supervisor">Supervisor</option>
									<option value="Trainer">Trainer</option>
									<option value="Inspector/Assessor">Inspector/Assessor</option>
									<option value="Accountant">Accountant</option>

								</select>
							</div>
						</div>
						<!-- <div class="col-md-12">
									<div class="card">
										<div class="card-body p-0">
											<div class="table-responsive">
												<table class="table ">
													<thead class="thead-light">
														<tr>
															<th>Module Permissions</th>
															<th>Read</th>
															<th>Write</th>
															<th>Create</th>
															<th>Delete</th>
															<th>Import</th>
															<th>Export</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<h6 class="fs-14 fw-normal text-gray-9">Inspectors</h6>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<h6 class="fs-14 fw-normal text-gray-9">Holidays</h6>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<h6 class="fs-14 fw-normal text-gray-9">Leaves</h6>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
														</tr>
														<tr>
															<td>
																<h6 class="fs-14 fw-normal text-gray-9">Events</h6>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
															<td>
																<div class="form-check form-check-md">
																	<input class="form-check-input" type="checkbox">
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>								
								</div> -->
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary canvasSubmit_button">Add User</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Edit  Users -->

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