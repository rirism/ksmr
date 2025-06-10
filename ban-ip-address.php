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
						<a class="nav-link" href="profile-settings.php"><i class="ti ti-settings me-2"></i>General Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="bussiness-settings.php"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="salary-settings.php"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="email-settings.php"><i class="ti ti-server-cog me-2"></i>System Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="payment-gateways.php"><i class="ti ti-settings-dollar me-2"></i>Financial Settings</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="custom-css.php"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-xl-3 theiaStickySidebar">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column list-group settings-list">
									<a href="custom-css.php" class="d-inline-flex align-items-center rounded py-2 px-3">Custom CSS</a>
									<a href="custom-js.php" class="d-inline-flex align-items-center rounded py-2 px-3">Custom JS</a>
									<a href="cronjob.php" class="d-inline-flex align-items-center rounded py-2 px-3">Cronjob</a>
									<a href="storage-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Storage</a>
									<a href="ban-ip-address.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Ban IP Address</a>
									<a href="backup.php" class="d-inline-flex align-items-center rounded py-2 px-3">Backup</a>
									<a href="clear-cache.php" class="d-inline-flex align-items-center rounded py-2 px-3">Clear Cache</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
                            <div class="card-header px-0 mx-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4>Ban IP Address</h4>
                                    <a href="#" class="btn btn-primary btn-sm d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_ban" ><i class="ti ti-circle-plus me-2"></i>Add IP Address</a>
                                </div>
                            </div>
                            <div class="card-body pb-0 ">
                                <div class="row bx-3">
                                    <div class="col-lg-6">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="d-inline-flex me-2"><i class="ti ti-ban"></i></span>
                                                        <p class="fs-14 fw-medium text-dark">198.120.16.01</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="link-default me-2" data-bs-toggle="modal" data-bs-target="#edit_ban" ><i class="ti ti-edit"></i></a>
                                                        <a href="#" class="link-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p><span class="me-2"><i class="ti ti-info-circle"></i></span>Temporarily block to protect user accounts from internet fraudsters</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="d-inline-flex me-2"><i class="ti ti-ban"></i></span>
                                                        <p class="fs-14 fw-medium text-dark">198.160.11.20</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="link-default me-2" data-bs-toggle="modal" data-bs-target="#edit_ban" ><i class="ti ti-edit"></i></a>
                                                        <a href="#" class="link-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p><span class="me-2"><i class="ti ti-info-circle"></i></span>Unauthorized access attempts, or other signs of a potential security</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="d-inline-flex me-2"><i class="ti ti-ban"></i></span>
                                                        <p class="fs-14 fw-medium text-dark">198.123.10.2</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="link-default me-2" data-bs-toggle="modal" data-bs-target="#edit_ban" ><i class="ti ti-edit"></i></a>
                                                        <a href="#" class="link-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p><span class="me-2"><i class="ti ti-info-circle"></i></span>Attempts to scrape large amounts of HR data from the system without authorization.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                                    <div class="d-flex align-items-center">
                                                        <span class="d-inline-flex me-2"><i class="ti ti-ban"></i></span>
                                                        <p class="fs-14 fw-medium text-dark">198.110.01.05</p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="link-default me-2" data-bs-toggle="modal" data-bs-target="#edit_ban" ><i class="ti ti-edit"></i></a>
                                                        <a href="#" class="link-default" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p><span class="me-2"><i class="ti ti-info-circle"></i></span>Found downloading or uploading inappropriate content</p>
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
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

        <!-- Add New IP Addres -->
		<div class="modal fade" id="add_ban">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New IP Address</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="ban-ip-address.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">IP Address</label>
										<input type="text" class="form-control" placeholder="Enter Currency Name">
									</div>
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-primary">Add IP Address</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add New Currency -->

        <!-- Edit IP Address -->
		<div class="modal fade" id="edit_ban">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit IP Address</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="ban-ip-address.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">IP Address</label>
										<input type="text" class="form-control" value="198.120.16.01">
									</div>
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control">Temporarily block to protect user accounts from internet fraudsters</textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit IP Address -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Confirm Deletion</h4>
						<p class="mb-3">You want to delete all the marked items, this cant be undone once you delete.</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Cancel</a>
							<a href="ban-ip-address.php" class="btn btn-danger">Yes, Delete</a>
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