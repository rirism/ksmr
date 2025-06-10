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
									<a href="language.php" class="d-inline-flex align-items-center rounded py-2 px-3">Language</a>
									<a href="authentication-settings.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Authentication Settings</a>
									<a href="ai-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">AI Settings</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9">
						<div class="card">
                            <div class="card-body">
                                <div class="border-bottom mb-3 pb-3">
                                    <h4>Authentication Settings</h4>
                                </div>
                                <form action="authentication-settings.php">
                                    <div class="border-bottom mb-3">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fw-medium">Allow Registration</h6>
                                                    </div>
                                                    <div class="col-md-6 d-flex align-items-center">
                                                        <div class="form-check form-switch me-2">
                                                            <input class="form-check-input" type="checkbox" role="switch">
                                                        </div>  
                                                        <div class="form-check form-check-md">
                                                            <input class="form-check-input" type="checkbox" id="checkebox-md">
                                                            <label class="form-check-label" for="checkebox-md">
                                                                Invite Only
                                                            </label>
                                                        </div>                                              
                                                    </div>
                                                </div>
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fw-medium">Verification Required</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6 d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="fw-medium">Verification Expired</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fw-medium">Referral System</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6 d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="fw-medium">Login Type</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-flex align-items-center">
                                                        <div class="form-check me-2">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-sm">
                                                            <label class="form-check-label" for="Radio-sm">
                                                                Mobile
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-2">
                                                            <input class="form-check-input" type="radio" name="Radio" id="Radio-smone">
                                                            <label class="form-check-label" for="Radio-smone">
                                                                Email
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fw-medium">Password</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fw-medium">OTP System</h6>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row row-gap-2 mb-3">
                                                    <div class="col-md-6 d-flex">
                                                        <div class="d-flex align-items-center">
                                                            <h6 class="fw-medium">OTP Type</h6>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 d-flex align-items-center">
                                                        <div class="form-check me-2">
                                                            <input class="form-check-input" type="radio" name="Radio1" id="Radio-smtwo">
                                                            <label class="form-check-label" for="Radio-smtwo">
                                                                SMS OTP
                                                            </label>
                                                        </div>
                                                        <div class="form-check me-2">
                                                            <input class="form-check-input" type="radio" name="Radio1" id="Radio-smthree">
                                                            <label class="form-check-label" for="Radio-smthree">
                                                                Email OTP
                                                            </label>
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

    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

</body>
</html>