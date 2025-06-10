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
						<a class="nav-link active" href="bussiness-settings.php"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
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
									<a href="business-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Business Settings</a>
									<a href="seo-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">SEO Settings</a>
									<a href="localization-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Localization</a>
									<a href="prefixes.php" class="d-inline-flex align-items-center rounded py-2 px-3">Prefixes</a>
									<a href="preferences.php" class="d-inline-flex align-items-center rounded py-2 px-3">Preferences</a>
									<a href="appearance.php" class="d-inline-flex align-items-center rounded py-2 px-3">Appearance</a>
									<a href="language.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Language</a>
									<a href="authentication-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Authentication Settings</a>
									<a href="ai-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">AI Settings</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
                            <div class="card-header px-0 mx-3">
                                <h4>Language</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <div class="row align-items-center g-3">
                                            <div class="col-sm-5">
                                                <h6>Language</h6>
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="d-flex align-items-center justify-content-sm-end flex-wrap row-gap-2">
                                                    <a href="language.php" class="btn btn-sm btn-primary d-inline-flex align-items-center me-3">
                                                        <i class="ti ti-arrow-left me-2"></i>
                                                        Back to Translations
                                                    </a>
                                                    <a href="#" class="btn btn-sm btn-outline-dark d-inline-flex align-items-center me-3">
                                                        <img src="assets/img/flags/ae.png" class="me-2 avatar avatar-sm avatar-rounded" alt="Img">
                                                        Arabic
                                                    </a>
                                                    <div class="flex-shrink-0 flex-fill">
                                                        <span class="d-block">Progress</span>
                                                        <div class="d-flex align-items-center">
                                                            <div class="progress progress-xs w-100">
                                                                <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span class="d-inline-flex fs-12 ms-2">80%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="w-50">English</th>
                                                        <th class="w-50">Arabic</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td><input type="text" class="form-control text-end" value="اسم"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td><input type="text" class="form-control text-end" value="عنوان البريد الإلكتروني"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td><input type="text" class="form-control text-end" value="هاتف"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Designation</td>
                                                        <td><input type="text" class="form-control text-end" value="تعيين">                                   </tr>
                                                    <tr>
                                                        <td>Joining Date</td>
                                                        <td><input type="text" class="form-control text-end" value="تاريخ الانضمام"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status</td>
                                                        <td><input type="text" class="form-control text-end" value="حالة"></td>
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



    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

</body>
</html>