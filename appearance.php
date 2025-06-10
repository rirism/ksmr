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
									<a href="appearance.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Appearance</a>
									<a href="language.php" class="d-inline-flex align-items-center rounded py-2 px-3">Language</a>
									<a href="authentication-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Authentication Settings</a>
									<a href="ai-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">AI Settings</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
                            <div class="card-body">
                                <div class="border-bottom mb-3 pb-3">
                                    <h4>Appearance</h4>
                                </div>
                                <form action="appearance.php">
                                    <div class="border-bottom mb-3">
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-12 col-md-3">
                                                <div class="setting-info mb-4">
                                                    <h6 class="fs-14 fw-medium">Select Theme</h6>
                                                </div>
                                            </div>
                                            <div class="col-xl-9 col-lg-12 col-md-9">
                                                <div class="d-flex align-items-center">
                                                    <div class="me-3">
                                                        <div class="card shadow-none border-primary">
                                                            <div class="card-body">
                                                                <a href="#">
                                                                    <div class="border rounded border-gray mb-2">
                                                                        <img src="assets/img/theme/light.svg" class="img-fluid rounded" alt="theme">
                                                                    </div>
                                                                    <p class="text-dark text-center">Light</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="me-3">
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <a href="#">
                                                                    <div class="border rounded border-gray mb-2">
                                                                        <img src="assets/img/theme/dark.svg" class="img-fluid rounded" alt="theme">
                                                                    </div>
                                                                    <p class="text-dark text-center">Dark</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="card shadow-none">
                                                            <div class="card-body">
                                                                <a href="#">
                                                                    <div class="border rounded border-gray mb-2">
                                                                        <img src="assets/img/theme/automatic.svg" class="img-fluid rounded" alt="theme">
                                                                    </div>
                                                                    <p class="text-dark text-center">Automatic</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-xl-3 col-lg-12 col-md-3">
                                                <div class="setting-info mb-4">
                                                    <h6 class="fs-14 fw-medium">Accent Color</h6>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-12 col-md-4">
                                                <div class="theme-colors mb-4">
                                                    <ul class="d-flex align-items-center">
                                                        <li>
                                                            <span class="themecolorset">
                                                                <span class="primecolor bg-primary">
                                                                    <span class="colorcheck text-white"><i class="ti ti-check text-primary fs-10"></i></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="themecolorset">
                                                                <span class="primecolor bg-secondary">
                                                                    <span class="colorcheck text-white"><i class="ti ti-check text-primary fs-10"></i></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="themecolorset">
                                                                <span class="primecolor bg-info">
                                                                    <span class="colorcheck text-white"><i class="ti ti-check text-primary fs-10"></i></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="themecolorset">
                                                                <span class="primecolor bg-purple">
                                                                    <span class="colorcheck text-white"><i class="ti ti-check text-primary fs-10"></i></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="themecolorset">
                                                                <span class="primecolor bg-pink">
                                                                    <span class="colorcheck text-white"><i class="ti ti-check text-primary fs-10"></i></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="themecolorset">
                                                                <span class="primecolor bg-warning">
                                                                    <span class="colorcheck text-white"><i class="ti ti-check text-primary fs-10"></i></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                        <li>
                                                            <span class="themecolorset active">
                                                                <span class="primecolor bg-danger">
                                                                    <span class="colorcheck text-white"><i class="ti ti-check text-primary fs-10"></i></span>
                                                                </span>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-xl-3 col-lg-12 col-md-3">
                                                <div class="">
                                                    <h6 class="fs-14 fw-medium">Sidebar Size</h6>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-3">
                                                <select class="select">
                                                    <option >Select</option>
                                                    <option>Small - 85px</option>
                                                    <option>Large - 250px</option>
                                                </select>                                        
                                            </div>
                                        </div>
                                        <div class="row align-items-center mb-3">
                                            <div class="col-xl-3 col-lg-12 col-md-3">
                                                <div class="">
                                                    <h6 class="fs-14 fw-medium">Font Family</h6>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-12 col-md-3">
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Nunito</option>
                                                    <option>Poppins</option>
                                                </select>
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


    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

</body>
</html>