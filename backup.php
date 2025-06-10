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
									<a href="ban-ip-address.php" class="d-inline-flex align-items-center rounded py-2 px-3">Ban IP Address</a>
									<a href="backup.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Backup</a>
									<a href="clear-cache.php" class="d-inline-flex align-items-center rounded py-2 px-3">Clear Cache</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
                            <div class="card-header px-0 mx-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h4>Backup</h4>
                                </div>
                            </div>
                            <div class="card-body pb-0 ">
                                <div class="d-flex align-items-center justify-content-between">
                                    <nav class="nav nav-pills flex-column flex-sm-row" role="tablist">
                                        <a class="flex-sm-fill text-sm-center nav-link tab-dark active" data-bs-toggle="tab"
                                            role="tab" aria-current="page" href="#system-backup"
                                            aria-selected="true">System Backup</a>
                                        <a class="flex-sm-fill text-sm-center nav-link tab-dark" data-bs-toggle="tab" role="tab"
                                            aria-current="page" href="#database-backup" aria-selected="false">Database Backup</a>
                                    </nav>
                                    <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#generate_backup">Generate Backup</a>
                                </div>
                                <div class="tab-content mt-3">
									<div class="tab-pane show active text-muted" id="system-backup" role="tabpanel">
                                        <div class="card mb-3">
                                            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                <h5>System Backup List</h5>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th class="no-sort">
                                                                    <div class="form-check form-check-md">
                                                                        <input class="form-check-input" type="checkbox" id="select-all">
                                                                    </div>
                                                                </th>
                                                                <th>File Name</th>
                                                                <th>Date</th>
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
                                                                    <p class="fs-14 fw-medium text-dark">Transaction_Logs_Backup_2024_09_Weekly.txt</p>
                                                                </td>
                                                                <td>11 Sep 2024</td>
                                                                <td>
                                                                    <div class="action-icon d-inline-flex">
                                                                        <a href="#" class="me-2"><i class="ti ti-download"></i></a>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                                                    <p class="fs-14 fw-medium text-dark">Scheduled_Tasks_Backup_Sep_2024.txt</p>
                                                                </td>
                                                                <td>11 Sep 2024</td>
                                                                <td>
                                                                    <div class="action-icon d-inline-flex">
                                                                        <a href="#" class="me-2"><i class="ti ti-download"></i></a>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                                                    <p class="fs-14 fw-medium text-dark">Employee_Session_Log_Sep_2024.txt</p>
                                                                </td>
                                                                <td>11 Sep 2024</td>
                                                                <td>
                                                                    <div class="action-icon d-inline-flex">
                                                                        <a href="#" class="me-2"><i class="ti ti-download"></i></a>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<div class="tab-pane show text-muted" id="database-backup" role="tabpanel">
                                        <div class="card mb-3">
                                            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                <h5>Datebase Backup List</h5>
                                            </div>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th class="no-sort">
                                                                    <div class="form-check form-check-md">
                                                                        <input class="form-check-input" type="checkbox" id="select-all2">
                                                                    </div>
                                                                </th>
                                                                <th>File Name</th>
                                                                <th>Date</th>
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
                                                                    <p class="fs-14 fw-medium text-dark">Full_Database_Backup_2024-09-11.sql</p>
                                                                </td>
                                                                <td>11 Sep 2024</td>
                                                                <td>
                                                                    <div class="action-icon d-inline-flex">
                                                                        <a href="#" class="me-2"><i class="ti ti-download"></i></a>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                                                    <p class="fs-14 fw-medium text-dark">Full_Database_Backup_2024-09-11.sql</p>
                                                                </td>
                                                                <td>11 Sep 2024</td>
                                                                <td>
                                                                    <div class="action-icon d-inline-flex">
                                                                        <a href="#" class="me-2"><i class="ti ti-download"></i></a>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                                                    <p class="fs-14 fw-medium text-dark">Full_Database_Backup_2024-09-11.sql</p>
                                                                </td>
                                                                <td>11 Sep 2024</td>
                                                                <td>
                                                                    <div class="action-icon d-inline-flex">
                                                                        <a href="#" class="me-2"><i class="ti ti-download"></i></a>
                                                                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
				</div>
			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

        <!-- Add New IP Addres -->
		<div class="modal fade" id="generate_backup">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Generate Backup</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="backup.php">
						<div class="modal-body">
							<p class="text-dark fw-medium mb-0">Are you sure you want to generate database backup?</p>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
							<button type="submit" class="btn btn-primary">Generate</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add New Currency -->

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
							<a href="backup.php" class="btn btn-danger">Yes, Delete</a>
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