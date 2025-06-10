<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Bootstrap Tagsinput CSS -->
 <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

</head>
<body>
<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>

	<!-- Page Wrapper -->
	<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">performance Indicator</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Performance
								</li>
								<li class="breadcrumb-item active" aria-current="page">Performance Indicator</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_performance_indicator" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Indicator</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Performance Indicator list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Performance Indicator List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sort By : Last 7 Days
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
								<thead class="thead-light">
									<tr>
										<th class="no-sort">
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox" id="select-all">
											</div>
										</th>
										<th>Designation</th>
										<th>Department</th>
										<th>Approved By</th>
										<th>Created Date</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Web Designer</a></h6>
												</div>
											</div>
										</td>
										<td>Designing</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
													<p class="fs-12">Manager</p>
												</div>
											</div>
										</td>
										<td>
											14 Jan 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance-indicator"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Web Developer</a></h6>
												</div>
											</div>
										</td>
										<td>Developer</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
													<p class="fs-12">Manager</p>
												</div>
											</div>
										</td>
										<td>
											21 Jan 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance-indicator"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">IOS Developer</a></h6>
												</div>
											</div>
										</td>
										<td>Developer</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
													<p class="fs-12">Manager</p>
												</div>
											</div>
										</td>
										<td>
											18 Feb 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance-indicator"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Android Developer</a></h6>
												</div>
											</div>
										</td>
										<td>Developer</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
													<p class="fs-12">Manager</p>
												</div>
											</div>
										</td>
										<td>
											24 Feb 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance-indicator"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">DevOps Engineer</a></h6>
												</div>
											</div>
										</td>
										<td>DevOps</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Doglas Martini</a></h6>
													<p class="fs-12">Manager</p>
												</div>
											</div>
										</td>
										<td>
											11 Mar 2024
										</td>
										<td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
												<i class="ti ti-point-filled me-1"></i>Active
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_performance-indicator"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Indicator -->
		<div class="modal fade" id="add_performance_indicator">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Indicator</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="performance-indicator.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Designation</label>
										<select class="select">
											<option>Select</option>
											<option>Web Designer</option>
											<option>Web Developer</option>
											<option>IOS Developer</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<h5 class="fw-medium">Technical</h5>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Customer Experience</label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Marketing</label>
										<select class="select">
											<option>Select</option>
											<option>Expert/Leader</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Management</label>
										<select class="select">
											<option>Select</option>
											<option>Intermediate</option>
											<option>Medium</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Administration</label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Presentation Skills</label>
										<select class="select">
											<option>Select</option>
											<option>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Quality of Work</label>
										<select class="select">
											<option>Select</option>
											<option>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Efficiency</label>
										<select class="select">
											<option>Select</option>
											<option>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<h5 class="fw-medium">Organizational</h5>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Integrity</label>
										<select class="select">
											<option>Select</option>
											<option>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Professionalism</label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Team Work</label>
										<select class="select">
											<option>Select</option>
											<option>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Critical Thinking</label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Conflict Management</label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Attendance</label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Ability To Meet Deadline</label>
										<select class="select">
											<option>Select</option>
											<option>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
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
							<button type="submit" class="btn btn-primary">Add Indicator</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Indicator -->

		<!-- Edit Indicator -->
		<div class="modal fade" id="edit_performance-indicator">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit New Indicator</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="performance-indicator.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Designation</label>
										<select class="select">
											<option>Select</option>
											<option selected>Web Designer</option>
											<option>Web Developer</option>
											<option>IOS Developer</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<h5 class="fw-medium">Technical</h5>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Customer Experience</label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Marketing</label>
										<select class="select">
											<option>Select</option>
											<option selected>Expert/Leader</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Management</label>
										<select class="select">
											<option>Select</option>
											<option selected>Intermediate</option>
											<option>Medium</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Administration</label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Presentation Skills</label>
										<select class="select">
											<option>Select</option>
											<option selected>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Quality of Work</label>
										<select class="select">
											<option>Select</option>
											<option selected>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Efficiency</label>
										<select class="select">
											<option>Select</option>
											<option selected>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<h5 class="fw-medium">Organizational</h5>
									</div>
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Integrity</label>
										<select class="select">
											<option>Select</option>
											<option selected>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Professionalism</label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Team Work</label>
										<select class="select">
											<option>Select</option>
											<option selected>None</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Critical Thinking</label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Conflict Management</label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Attendance</label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-3">
									<div class="mb-3">
										<label class="form-label">Ability To Meet Deadline</label>
										<select class="select">
											<option>Select</option>
											<option selected>Advanced</option>
											<option>Intermediate</option>
											<option>Average</option>
										</select>
									</div>									
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
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
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Indicator -->

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
							<a href="performance-indicator.php" class="btn btn-danger">Yes, Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->


    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

</body>
</html>