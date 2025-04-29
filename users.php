<?php include("header.php") ?>

<!-- Page Wrapper -->
<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb ">
		<div class="my-auto mb-2">
			<h2 class="mb-1">All User</h2>
			<nav>
				<ol class="breadcrumb mb-0">
					<li class="breadcrumb-item">
						<a href="index.html"><i class="ti ti-smart-home"></i></a>
					</li>
					<li class="breadcrumb-item">
						User Management
					</li>
					<li class="breadcrumb-item active" aria-current="page">User</li>
				</ol>
			</nav>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
			
			<div class="mb-2">
				<a href="inspector-add.php" 
					class="btn btn-primary d-flex align-items-center cmnaddbtn"><iconify-icon icon="fluent-mdl2:add-to"></iconify-icon>Add User</a>
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
							<th>User ID</th>
							<th>User Name</th>
							<th>User Email</th>
							<th>User Created On</th>
							<th>Role</th>
							<th>Department</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<a href="user-detail.php" class="hightlightKOPID">#US0001</a>
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
							<td>17 Oct 2024</td>
							<td>Inspectors
							</td>
							<td>
								<div class="departmentInspector">
								<span>Equipment Inspection</span>
								<span>Operator Assessment</span>
								</div>
							</td>
							
							<td>
								<span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center ActionDropdown">
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
										data-bs-toggle="tooltip" data-placement="top" title="View User Details"
										href="user-detail.php">
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
							<td>
							<a href="user-detail.php" class="hightlightKOPID">#US0002</a>
							</td>
							<td>
								<div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-08.jpg" class="img-fluid" alt="Thomas Bordelon">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Thomas Bordelon</a></h6>
									</div>
								</div>
							</td>
							<td>
								thomas.bordelon@example.com
							</td>
							<td>20 Jul 2024</td>
							<td>Trainer</td>
							<td>
								<div class="departmentInspector">
								<span>NDT Review</span>
								<span>Training</span>
								</div>
							</td>
							
							<td>
								<span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center ActionDropdown">
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
										data-bs-toggle="tooltip" data-placement="top" title="View User Details"
										href="user-detail.php">
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
							<td>
							<a href="user-detail.php" class="hightlightKOPID">#US0003</a>
							</td>
							<td>
								<div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-33.jpg" class="img-fluid" alt="Jessica Harper">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Jessica Harper</a></h6>
									</div>
								</div>
							</td>
							<td>
								jessica.harper@example.com
							</td>
							<td>17 Oct 2024</td>
							<td>Manager
							</td>
							<td>
								<div class="departmentInspector">
								<span>Equipment Inspection</span>
								<span>Training</span>
								</div>
							</td>
							
							<td>
								<span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center ActionDropdown">
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
										data-bs-toggle="tooltip" data-placement="top" title="View User Details"
										href="user-detail.php">
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
							<td>
							<a href="user-detail.php" class="hightlightKOPID">#US0004</a>
							</td>
							<td>
								<div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-08.jpg" class="img-fluid" alt="Michael Scott">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Michael Scott</a></h6>
									</div>
								</div>
							</td>
							<td>
								michael.scott@example.com
							</td>
							<td>20 Jul 2024</td>
							<td>Supervisor
							</td>
							<td>
								<div class="departmentInspector">
								<span>NDT Review</span>
								<span>Operator Assessment</span>
								</div>
							</td>
							
							<td>
								<span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center ActionDropdown">
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
										data-bs-toggle="tooltip" data-placement="top" title="View User Details"
										href="user-detail.php">
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
							<td>
							<a href="user-detail.php" class="hightlightKOPID">#US0005</a>
							</td>
							<td>
								<div class="d-flex align-items-center file-name-icon">
									<a href="#" class="avatar avatar-md avatar-rounded">
										<img src="assets/img/users/user-08.jpg" class="img-fluid" alt="Michael Scott">
									</a>
									<div class="ms-2">
										<h6 class="fw-medium"><a href="#">Cavin John </a></h6>
									</div>
								</div>
							</td>
							<td>
								Cavinjohn@example.com
							</td>
							<td>20 Jul 2024</td>
							<td>Accountant
							</td>
							<td>
								<div class="departmentInspector">
								<span>Equipment Inspection</span>
								<span>Operator Assessment</span>
								</div>
							</td>
							
							<td>
								<span class="badge badge-success d-inline-flex align-items-center badge-xs">
									<i class="ti ti-point-filled me-1"></i>Active
								</span>
							</td>
							<td>
								<div class="d-flex align-items-center ActionDropdown">
									<a class="btn btn-icon btn-flush-dark btn-rounded flush-soft-hover"
										data-bs-toggle="tooltip" data-placement="top" title="View User Details"
										href="user-detail.php">
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

<!-- Add Users -->
<div class="modal fade custombottm_modalStyle" id="add_users">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add Inspector</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="users.php">
				<div class="modal-body">
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Inspector ID</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Inspector Name</label>
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Designation</label>
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
						<div class="col-lg-6">
							<div class="form-group">
								<label class="form-label">Department</label>
								<div class="dropdown filterdropDownCustom available-users-dropdown-wrapper" >
									<button class="dropbtn dropdown-toggle dropmenuBtn" type="button"
										data-bs-toggle="dropdown" aria-expanded="false">
										<span class="selected-count">Select Department</span>
										<!-- <iconify-icon icon="ic:round-keyboard-arrow-down"></iconify-icon> -->
									</button>
									<div
										class="dropdown-menu customdropdownmenu_style available-users-dropdown">
										<div class="filTerSearchMain">
											<input type="text" class="filterclSearch available-users-search"
												placeholder="Search Department">
											<iconify-icon icon="basil:search-outline"></iconify-icon>
										</div>
										<div class="sellallitemsMain">
											<div class="CustomselectallContainer">
												<input type="checkbox"
													class="select-all-available-users form-check-input">
												Select All
											</div>
											<div class="clDivider_full"></div>
										</div>
										<div class="Customdrpitems_container">
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
														Inspection
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
													NDT
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
													Training
												</div>
											</div>
											<div class="mainoptionContainer">
												<div class="dropfilter_options">
													<input type="checkbox"
														class="individual-option form-check-input">
													Operator Assessment
												</div>
											</div>
										</div>

										<p class="no-data" style="display: none;">No data found</p>
									</div>
								</div>
							</div>

							</div>
						
						<!-- <div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Department</label>
								<select class="select2" multiple>
									<option>Select an option</option>
									<option value="Inspection">Inspection</option>
									<option value="NDT">NDT</option>
									<option value="Training">Training</option>
									<option value="OperatorAssessment">Operator Assessment</option>
								</select>
							</div>
						</div> -->
						<div class="col-lg-12">
							<div class="form-group">
							<label class="form-label">Upload Signature</label>
							<input name="file1" type="file" class="dropify" data-height="100" />
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
					<button type="submit" class="btn btn-primary canvasSubmit_button">Save & Continue</button>
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
				<h4 class="modal-title">Edit Inspector</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="users.php">
				<div class="modal-body">
					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Inspector ID</label>
								<input type="text" class="form-control">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Inspector Name</label>
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
						<div class="col-md-6">
							<div class="form-group">
								<label class="form-label">Department</label>
								<select class="select2">
									<option>Select an option</option>
									<option value="Inspection">Inspection</option>
									<option value="NDT">NDT</option>
									<option value="Training">Training</option>
									<option value="OperatorAssessment">Operator Assessment</option>
								</select>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
							<label class="form-label">Upload Signature</label>
							<input name="file1" type="file" class="dropify" data-height="100" />
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

<!----------------------
Dropify Code Start Here
------------------------>
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
	$('.dropify').dropify();

</script>
<!----------------------
Dropify Code End Here
----------------------->

 <!-- custom multiple select js start -->
 <script>
    $(document).ready(function () {
     // Update the count of selected options
     function updateSelectedCount(dropdownWrapper) {
         const selectedCount = dropdownWrapper.find(".individual-option:checked").length;
         const selectedCountElement = dropdownWrapper.find(".selected-count");
 
         if (selectedCount === 0) {
             selectedCountElement.text("Select Location");
         } else if (selectedCount === 1) {
             selectedCountElement.text("1 selected");
         } else {
             selectedCountElement.text(`${selectedCount} selected`);
         }
     }
 
     // Handle Select All checkbox
     $(".select-all-available-users").on("change", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const isChecked = $(this).prop("checked");
         dropdownWrapper.find(".individual-option").prop("checked", isChecked);
         updateSelectedCount(dropdownWrapper);
     });
 
     // Handle individual option selection
     $(".individual-option").on("change", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const totalOptions = dropdownWrapper.find(".individual-option").length;
         const selectedOptions = dropdownWrapper.find(".individual-option:checked").length;
 
         // Toggle the Select All checkbox
         dropdownWrapper.find(".select-all-available-users").prop("checked", totalOptions === selectedOptions);
 
         updateSelectedCount(dropdownWrapper);
     });
 
     // Reset Filter button
     $(".reset-filter").on("click", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         dropdownWrapper.find(".individual-option").prop("checked", false);
         dropdownWrapper.find(".select-all-available-users").prop("checked", false);
         updateSelectedCount(dropdownWrapper);
     });
 
     // Apply Filter button
     $(".apply-filter").on("click", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const selectedItems = dropdownWrapper.find(".individual-option:checked").map(function () {
             return $(this).parent().text().trim();
         }).get();
         console.log("Selected Items:", selectedItems);
     });
 
     // Filter search functionality
     $(".available-users-search").on("keyup", function () {
         const dropdownWrapper = $(this).closest(".available-users-dropdown-wrapper");
         const searchTerm = $(this).val().toLowerCase();
         const options = dropdownWrapper.find(".mainoptionContainer");
 
         options.filter(function () {
             $(this).toggle($(this).text().toLowerCase().includes(searchTerm));
         });
 
         const noDataMessage = dropdownWrapper.find(".no-data");
         noDataMessage.toggle(options.filter(":visible").length === 0);
     });
 });
 
 </script>