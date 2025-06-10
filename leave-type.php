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
						<h2 class="mb-1">Settings</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Settings</li>
							</ol>
						</nav>
					</div>
					<div class="head-icons ms-2">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3">
					<li class="nav-item">
						<a class="nav-link" href="profile-settings.php"><i class="ti ti-settings me-2"></i>General Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="bussiness-settings.php"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="salary-settings.php"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="email-settings.php"><i class="ti ti-server-cog me-2"></i>System Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="payment-gateways.php"><i class="ti ti-settings-dollar me-2"></i>Financial Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="custom-css.php"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-xl-3 theiaStickySidebar">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column list-group settings-list">
									<a href="salary-settings.php" class="d-inline-flex align-items-center rounded  py-2 px-3">Salary Settings</a>
									<a href="approval-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Approval Settings</a>
									<a href="invoice-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Invoice Settings</a>
									<a href="leave-type.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Leave Type</a>
                                    <a href="custom-fields.php" class="d-inline-flex align-items-center rounded py-2 px-3">Custom Fields</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
							<div class="card-body">
								<div class="border-bottom d-flex align-items-center justify-content-between pb-3 mb-3">
									<h4>Leave Type</h4>
									<div>
										<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave Type</a>
									</div>
								</div>
                                <div class="card-body p-0">
									<div class="card mb-0">
										<div class="card-header d-flex align-items-center justify-content-between">
											<h6>Leave Type List</h6>
										</div>
										<div class="table-responsive">
											<table class="table">
												<thead class="thead-light">
													<tr>
														<th class="no-sort">
															<div class="form-check form-check-md">
																<input class="form-check-input" type="checkbox" id="select-all">
															</div>
														</th>
														<th>Leave Type</th>
														<th>Leave Days</th>
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
														<td class="text-dark">Annual Leave</td>
														<td>12</td>
													  
														<td><span class="badge badge-success"><i class="ti ti-point-filled"></i>Active</span></td>
														<td>
															<div class="action-icon d-inline-flex">
															<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves" ><i class="ti ti-edit"></i></a>
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
														<td class="text-dark">Medical Leave</td>
														<td>12</td>
													  
														<td><span class="badge badge-success"><i class="ti ti-point-filled"></i>Active</span></td>
														<td>
															<div class="action-icon d-inline-flex">
															<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves" ><i class="ti ti-edit"></i></a>
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
														<td class="text-dark">Casual Leave</td>
														<td>12</td>
													  
														<td><span class="badge badge-success"><i class="ti ti-point-filled"></i>Active</span></td>
														<td>
															<div class="action-icon d-inline-flex">
															<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves" ><i class="ti ti-edit"></i></a>
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
														<td class="text-dark">Other Leave</td>
														<td>12</td>
													  
														<td><span class="badge badge-success"><i class="ti ti-point-filled"></i>Active</span></td>
														<td>
															<div class="action-icon d-inline-flex">
															<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves" ><i class="ti ti-edit"></i></a>
																<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
					</div>
				</div>
			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

 <!-- Add Leaves -->
 <div class="modal fade" id="add_leaves">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Add Leave Type</h4>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x"></i>
					</button>
				</div>
				<form action="leave-type.php">
					<div class="modal-body pb-0">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Leave Type <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Number of days <span class="text-danger">*</span></label>
									<input type="text" class="form-control">
								</div>	
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Add Leave</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- /Add Leaves -->

	<!-- Edit Leaves -->
	<div class="modal fade" id="edit_leaves">
		<div class="modal-dialog modal-dialog-centered modal-md">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Leave Type</h4>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x"></i>
					</button>
				</div>
				<form action="leave-type.php">
					<div class="modal-body pb-0">
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Leave Type <span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="Casual Leave">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Number of days <span class="text-danger">*</span></label>
									<input type="text" class="form-control" value="12">
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
	<!-- /Edit Leaves -->

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
						<a href="leave-type.php" class="btn btn-danger">Yes, Delete</a>
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