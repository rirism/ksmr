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
									<a href="notification-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Notifications</a>
									<a href="connected-apps.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Connected Apps</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
							<div class="card-body pb-0">
								<div class="border-bottom mb-3 pb-3">
									<h4>Connectd Apps</h4>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-2">
													<div class="d-flex align-items-center">
														<span class="avatar avatar-lg bg-gray-100 me-2 flex-shrink-0">
															<img src="assets/img/settings/connected-app-01.svg" class="w-auto h-auto" alt="Img">
														</span>
														<h5>Slack</h5>
													</div>
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch">
													</div>
												</div>
												<div>
													<p class="text-truncate line-clamb-2">Team communication platform with channels for group discussions and direct messaging.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-2">
													<div class="d-flex align-items-center">
														<span class="avatar avatar-lg bg-gray-100 me-2 flex-shrink-0">
															<img src="assets/img/settings/connected-app-02.svg" class="w-auto h-auto" alt="Img">
														</span>
														<h5>Google Calendar</h5>
													</div>
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch">
													</div>
												</div>
												<div>
													<p class="text-truncate line-clamb-2">Google Calendar is a web-based scheduling tool that allows users to create, manage, and share events.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-2">
													<div class="d-flex align-items-center">
														<span class="avatar avatar-lg bg-gray-100 me-2 flex-shrink-0">
															<img src="assets/img/settings/connected-app-03.svg" class="w-auto h-auto" alt="Img">
														</span>
														<h5>Gmail</h5>
													</div>
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch">
													</div>
												</div>
												<div>
													<p class="text-truncate line-clamb-2">Gmail is a free email service by Google that offers robust spam protection & 15GB of storage.</p>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between mb-2">
													<div class="d-flex align-items-center">
														<span class="avatar avatar-lg bg-gray-100 me-2 flex-shrink-0">
															<img src="assets/img/settings/connected-app-04.svg" class="w-auto h-auto" alt="Img">
														</span>
														<h5>Github</h5>
													</div>
													<div class="form-check form-check-md form-switch">
														<input class="form-check-input me-2" type="checkbox" role="switch">
													</div>
												</div>
												<div>
													<p class="text-truncate line-clamb-2">Github is a web-based platform for version control and collaboration, allowing developers to host & review code</p>
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


    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>