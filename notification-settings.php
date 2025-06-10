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
						<a class="nav-link active" href="profile-settings.php"><i class="ti ti-settings me-2"></i>General Settings</a>
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
						<a class="nav-link" href="custom-css.php"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
					</li>
				</ul>
				<div class="row">
					<div class="col-xl-3 theiaStickySidebar">
						<div class="card">
							<div class="card-body">
								<div class="d-flex flex-column list-group settings-list">
									<a href="profile-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Profile Settings</a>
									<a href="security-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Security Settings</a>
									<a href="notification-settings.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Notifications</a>
									<a href="connected-apps.php" class="d-inline-flex align-items-center rounded py-2 px-3">Connected Apps</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
							<div class="card-body">
								<div class="border-bottom mb-3 pb-3">
									<h4>Notifications</h4>
								</div>
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th class="w-75 ps-2 border-0">Modules</th>
												<th class="border-0">Push</th>
												<th class="border-0">SMS</th>
												<th class="pe-0 border-0">Email</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="ps-0">
													<h5 class="mb-1 fw-medium">New Hire and Onboarding Notifications</h5>
													<p>Alerts when a new hire is added to the system.</p>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td class="pe-0">
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
											</tr>
											<tr>
												<td class="ps-0">
													<h5 class="mb-1 fw-medium">Time Off and Leave Requests</h5>
													<p>Notifications when leave requests are approved or rejected.</p>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td class="pe-0">
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
											</tr>
											<tr>
												<td class="ps-0">
													<h5 class="mb-1 fw-medium">Employee Performance and Review Updates</h5>
													<p>Notifications when leave requests are approved or rejected.</p>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td class="pe-0">
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
											</tr>
											<tr>
												<td class="ps-0">
													<h5 class="mb-1 fw-medium">Payroll and Compensation</h5>
													<p>Alerts when payroll is processed or pending approval.</p>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td class="pe-0">
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
											</tr>
											<tr>
												<td class="ps-0">
													<h5 class="mb-1 fw-medium">Job Applications and Recruitment</h5>
													<p>Alerts for new applications or stage updates.</p>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td>
													<div class="form-check form-check-md form-switch me-2">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
													</div>
												</td>
												<td class="pe-0">
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch" checked>
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
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>