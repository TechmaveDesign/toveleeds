<?php include("header.php") ?>

<div class="content">

	<!-- Breadcrumb -->
	<div class="d-md-flex d-block align-items-center justify-content-between mb-3">
		<div class="my-auto mb-2 dashtopTitle">
			<h2 class="mb-1">Admin Dashboard</h2>
		</div>
		<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
			<div class="dashselect_Location">
			<select class="select2">
				<option>Select Location</option>
				<option value="1">Delhi</option>
  <option value="2">Noida</option>
  <option value="3">Mumbai</option>
  <option value="4">Bangalore</option>
  <option value="5">Chennai</option>
  <option value="6">Kolkata</option>
  <option value="7">Hyderabad</option>
  <option value="8">Pune</option>
  <option value="9">Jaipur</option>
  <option value="10">Ahmedabad</option>
  <option value="11">Lucknow</option>
  <option value="12">Surat</option>
			</select>
			</div>

			<div class="input-icon mb-2 position-relative">
				<span class="input-icon-addon">
					<i class="ti ti-calendar text-gray-9"></i>
				</span>
				<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
			</div>
			<div class="ms-2 head-icons">
				<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
					data-bs-original-title="Collapse" id="collapse-header">
					<i class="ti ti-chevrons-up"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- /Breadcrumb -->

	<div class="row">

		<!-- Widget Info -->
		<div class="col-xxl-8 ">
			<div class="row ">
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-primary mb-2">
								<i class="ti ti-calendar-share fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">Equipment Inspection </h6>
							<h3 class="">120/154 </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-secondary mb-2">
								<i class="ti ti-browser fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">Operator Assessments</h6>
							<h3 class="">90/125 </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-info mb-2">
								<i class="ti ti-users-group fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">Total Trainers</h6>
							<h3 class="">69/86 </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-pink mb-2">
								<i class="ti ti-checklist fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">NDT Tasks</h6>
							<h3 class="">225/28 </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-purple mb-2">
								<i class="ti ti-moneybag fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">Approval Board</h6>
							<h3 class="">$21445 </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-danger mb-2">
								<i class="ti ti-browser fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">Job Orders</h6>
							<h3 class="">$5,544 </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-success mb-2">
								<i class="ti ti-users-group fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">Training Applications</h6>
							<h3 class="">98 </h3>
							
						</div>
					</div>
				</div>
				<div class="col-md-3 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<span class="avatar rounded-circle bg-dark mb-2">
								<i class="ti ti-user-star fs-16"></i>
							</span>
							<h6 class="fs-13 fw-medium text-default mb-1">Certificate Pending</h6>
							<h3 class="">45/48 </h3>
							
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- /Widget Info -->

		<!-- Employees By Department -->
		<div class="col-xxl-4 d-flex">
			<div class="card flex-fill">
				<div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
					<h5 class="mb-2">Tasks By Department</h5>
					<div class="dropdown ">
						<a href="javascript:void(0);"
							class="btn btn-white border btn-sm d-inline-flex align-items-center"
							data-bs-toggle="dropdown">
							<i class="ti ti-calendar me-1"></i>This Week
						</a>
						<ul class="dropdown-menu  dropdown-menu-end p-3">
							<li>
								<a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
							</li>
							<li>
								<a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-body">
					<div id="emp-department"></div>
					
				</div>
			</div>
		</div>
		<!-- /Employees By Department -->

	</div>

	<div class="row">
		<div class="col-xl-4 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
						<h5>Recent Added Customers</h5>
						<div>
							<a href="#" class="btn btn-light btn-sm px-3">View All</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex align-items-center justify-content-between mb-4">
						<div class="d-flex align-items-center">
							<a href="javascript:void(0);" class="avatar flex-shrink-0">
								<img src="assets/img/users/user-27.jpg" class="rounded-circle border border-2"
									alt="img">
							</a>
							<div class="ms-2">
								<h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Alexander Jermai</a></h6>
								<p class="fs-13">alexander.jermai@example.com</p>
							</div>
						</div>
						<div class="d-flex align-items-center">
							<a href="#" class="btn btn-light btn-icon btn-sm"><i class="ti ti-eye fs-16"></i></a>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-between mb-4">
						<div class="d-flex align-items-center">
							<a href="javascript:void(0);" class="avatar flex-shrink-0">
								<img src="assets/img/users/user-42.jpg" class="rounded-circle border border-2"
									alt="img">
							</a>
							<div class="ms-2">
								<h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Doglas Martini</a></h6>
								<p class="fs-13">doglas.martini@example.com</p>
							</div>
						</div>
						<div class="d-flex align-items-center">
							<a href="#" class="btn btn-light btn-icon btn-sm"><i class="ti ti-eye fs-16"></i></a>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-between mb-4">
						<div class="d-flex align-items-center">
							<a href="javascript:void(0);" class="avatar flex-shrink-0">
								<img src="assets/img/users/user-43.jpg" class="rounded-circle border border-2"
									alt="img">
							</a>
							<div class="ms-2">
								<h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel Esbella</a></h6>
								<p class="fs-13">daniel.esbella@example.com</p>
							</div>
						</div>
						<div class="d-flex align-items-center">
							<a href="#" class="btn btn-light btn-icon btn-sm"><i class="ti ti-eye fs-16"></i></a>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-between mb-4">
						<div class="d-flex align-items-center">
							<a href="javascript:void(0);" class="avatar flex-shrink-0">
								<img src="assets/img/users/user-11.jpg" class="rounded-circle border border-2"
									alt="img">
							</a>
							<div class="ms-2">
								<h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Daniel Esbella</a></h6>
								<p class="fs-13">daniel.esbella@example.com</p>
							</div>
						</div>
						<div class="d-flex align-items-center">
							<a href="#" class="btn btn-light btn-icon btn-sm"><i class="ti ti-eye fs-16"></i></a>
						</div>
					</div>
					<div class="d-flex align-items-center justify-content-between">
						<div class="d-flex align-items-center">
							<a href="javascript:void(0);" class="avatar flex-shrink-0">
								<img src="assets/img/users/user-45.jpg" class="rounded-circle border border-2"
									alt="img">
							</a>
							<div class="ms-2">
								<h6 class="fs-14 fw-medium text-truncate mb-1"><a href="#">Doglas Martini</a></h6>
								<p class="fs-13">doglas.martini@example.com</p>
							</div>
						</div>
						<div class="d-flex align-items-center">
							<a href="#" class="btn btn-light btn-icon btn-sm"><i class="ti ti-eye fs-16"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-2">
						<h5>Recent Activities</h5>
						<div>
							<a href="activity.html" class="btn btn-sm btn-light px-3">View All</a>
						</div>
					</div>
				</div>
				<div class="card-body schedule-timeline activity-timeline">
					<div class="d-flex align-items-start">
						<div class="avatar avatar-md avatar-rounded bg-success flex-shrink-0">
							<i class="ti ti-phone fs-20"></i>
						</div>
						<div class="flex-fill ps-3 pb-4 timeline-flow">
							<p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Drain responded to
									your appointment schedule question.</a></p>
							<span>09:25 PM</span>
						</div>
					</div>
					<div class="d-flex align-items-start">
						<div class="avatar avatar-md avatar-rounded bg-info flex-shrink-0">
							<i class="ti ti-message-circle-2 fs-20"></i>
						</div>
						<div class="flex-fill ps-3 pb-4 timeline-flow">
							<p class="fw-medium text-gray-9 mb-1"><a href="activity.html">You sent 1 Message
									to the James.</a></p>
							<span>10:25 PM</span>
						</div>
					</div>
					<div class="d-flex align-items-start">
						<div class="avatar avatar-md avatar-rounded bg-success flex-shrink-0">
							<i class="ti ti-phone fs-20"></i>
						</div>
						<div class="flex-fill ps-3 pb-4 timeline-flow">
							<p class="fw-medium text-gray-9 mb-1"><a href="activity.html">Denwar responded
									to your appointment on 25 Jan 2025, 08:15 PM</a></p>
							<span>09:25 PM</span>
						</div>
					</div>
					<div class="d-flex align-items-start">
						<div class="avatar avatar-md avatar-rounded bg-purple flex-shrink-0">
							<i class="ti ti-user-circle fs-20"></i>
						</div>
						<div class="flex-fill ps-3 timeline-flow">
							<p class="fw-medium text-gray-9 mb-1"><a href="activity.html"
									class="d-flex align-items-center">Meeting With <img
										src="assets/img/users/user-58.jpg" class="avatar avatar-sm rounded-circle mx-2"
										alt="Img">Abraham</a>
							</p>
							<span>09:25 PM</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-4 d-flex">
			<div class="card flex-fill">
				<div class="card-header">
					<div class="d-flex align-items-center justify-content-between flex-wrap">
						<h5>Notifications</h5>
						<div>
							<a href="#" class="btn btn-light btn-sm px-3">View All</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex align-items-start mb-4">
						<a href="javascript:void(0);" class="avatar flex-shrink-0">
							<img src="assets/img/users/user-27.jpg" class="rounded-circle border border-2" alt="img">
						</a>
						<div class="ms-2">
							<h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to
								Inspector Module </h6>
							<p class="fs-13 mb-2">Today at 9:42 AM</p>
							<div class="d-flex align-items-center">
								<a href="#" class="avatar avatar-sm border flex-shrink-0 me-2"><img
										src="assets/img/social/pdf-icon.svg" class="w-auto h-auto" alt="Img"></a>
								<h6 class="fw-normal"><a href="#">EY_review.pdf</a></h6>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-start mb-4">
						<a href="javascript:void(0);" class="avatar flex-shrink-0">
							<img src="assets/img/users/user-28.jpg" class="rounded-circle border border-2" alt="img">
						</a>
						<div class="ms-2">
							<h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to
								Inspector Module </h6>
							<p class="fs-13 mb-0">Today at 10:00 AM</p>
						</div>
					</div>
					<div class="d-flex align-items-start mb-4">
						<a href="javascript:void(0);" class="avatar flex-shrink-0">
							<img src="assets/img/users/user-29.jpg" class="rounded-circle border border-2" alt="img">
						</a>
						<div class="ms-2">
							<h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to
								Inspector Module </h6>
							<p class="fs-13 mb-2">Today at 10:50 AM</p>
							<div class="d-flex align-items-center">
								<a href="#" class="btn btn-primary btn-sm me-2">Approve</a>
								<a href="#" class="btn btn-outline-primary btn-sm">Decline</a>
							</div>
						</div>
					</div>
					<div class="d-flex align-items-start">
						<a href="javascript:void(0);" class="avatar flex-shrink-0">
							<img src="assets/img/users/user-33.jpg" class="rounded-circle border border-2" alt="img">
						</a>
						<div class="ms-2">
							<h6 class="fs-14 fw-medium text-truncate mb-1">Lex Murphy requested access to
								Inspector Module </h6>
							<p class="fs-13 mb-0">Today at 05:00 PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php include("footer.php") ?>