<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
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
						<a class="nav-link " href="profile-settings.php"><i class="ti ti-settings me-2"></i>General Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="bussiness-settings.php"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="salary-settings.php"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="email-settings.php"><i class="ti ti-server-cog me-2"></i>System Settings</a>
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
                                    <a href="email-settings.php" class="d-inline-flex align-items-center rounded  py-2 px-3">Salary Settings</a>
									<a href="email-template.php" class="d-inline-flex align-items-center rounded  active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Email Templates</a>
									<a href="sms-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">SMS Settings</a>
									<a href="sms-template.php" class="d-inline-flex align-items-center rounded py-2 px-3">SMS Templates</a>
                                    <a href="otp-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">OTP</a>
                                    <a href="gdpr-cookies.php" class="d-inline-flex align-items-center rounded py-2 px-3">GDPR Cookies</a>
                                    <a href="maintenance-mode.php" class="d-inline-flex align-items-center rounded py-2 px-3">Maintenance Mode</a>
							
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
							<div class="card-body">
								<div class="border-bottom d-flex align-items-center justify-content-between pb-3 mb-3">
									<h4>Email Templates</h4>
                                    <a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#addtemplate"><i class="ti ti-circle-plus me-2"></i>Add Template</a>
								</div>
								<form action="email-template.php">
									<div class="border-bottom mb-3">
										<div class="row">
											<div class="col-md-4">
												<div class="mb-3">
													<div class="card">
														<div class="card-body p-3">
															<div class="d-flex align-items-center justify-content-between">
																<h6>Email Verification</h6>
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edittemplate"><i class="ti ti-edit"></i></a>
																	<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<div class="card">
														<div class="card-body p-3">
															<div class="d-flex align-items-center justify-content-between">
																<h6>Welcome Email</h6>
																<div class="d-flex align-items-center">
																	<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edittemplate"><i class="ti ti-edit"></i></a>
																	<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
												</div>
												<div class="col-md-4">
													<div class="mb-3">
														<div class="card">
															<div class="card-body p-3">
																<div class="d-flex align-items-center justify-content-between">
																	<h6>Leave Request</h6>
																	<div class="d-flex align-items-center">
																		<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edittemplate"><i class="ti ti-edit"></i></a>
																		<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<div class="col-md-4">
														<div class="mb-3">
															<div class="card">
																<div class="card-body p-3">
																	<div class="d-flex align-items-center justify-content-between">
																		<h6>Performance Review</h6>
																		<div class="d-flex align-items-center">
																			<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edittemplate"><i class="ti ti-edit"></i></a>
																			<a href="#" class="btn btn-sm btn-icon" ><i class="ti ti-trash"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-4">
														<div class="mb-3">
															<div class="card">
																<div class="card-body p-3">
																	<div class="d-flex align-items-center justify-content-between">
																		<h6>Training Session</h6>
																		<div class="d-flex align-items-center">
																			<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edittemplate"><i class="ti ti-edit"></i></a>
																			<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														</div>
														<div class="col-md-4">
															<div class="mb-3">
																<div class="card">
																	<div class="card-body p-3">
																		<div class="d-flex align-items-center justify-content-between">
																			<h6>Password Reset</h6>
																			<div class="d-flex align-items-center">
																				<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#edittemplate"><i class="ti ti-edit"></i></a>
																				<a href="#" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
												</div>
										</div>   
										</div>
									</div>
									<div class="d-flex align-items-center justify-content-end">
										<button type="button" class="btn btn-outline-light border me-3">Cancel</button>
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
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
           <!-- Add Promotion -->
           <div class="modal fade" id="addtemplate">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Template</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="email-template.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Template Content</label>
                                        <div class="summernote"></div> 
                                    </div>									
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Active</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>									
                                </div>
                               
                               
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Template</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- /Add Promotion -->

     <!-- Edit Promotion -->
     <div class="modal fade" id="edittemplate">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Template</h4>
                    <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ti ti-x"></i>
                    </button>
                </div>
                <form action="email-template.php">
                    <div class="modal-body pb-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" value="Email Verification">
                                </div>									
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Template Content</label>
                                    <div class="summernote"></div> 
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
                        <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- /Edit Promotion -->

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
							<a href="email-template.php" class="btn btn-danger">Yes, Delete</a>
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