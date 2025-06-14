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
									<a href="bussiness-settings.php" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Business Settings</a>
									<a href="seo-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">SEO Settings</a>
									<a href="localization-settings.php" class="d-inline-flex align-items-center rounded py-2 px-3">Localization</a>
									<a href="prefixes.php" class="d-inline-flex align-items-center rounded py-2 px-3">Prefixes</a>
									<a href="preferences.php" class="d-inline-flex align-items-center rounded py-2 px-3">Preferences</a>
									<a href="appearance.php" class="d-inline-flex align-items-center rounded py-2 px-3">Appearance</a>
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
									<h4>Business Settings</h4>
								</div>
								<form action="bussiness-settings.php">
									<div class="border-bottom mb-3">
										<div class="row">
											<div class="col-md-12">
												<div>					
													<h6 class="mb-3">Basic Information</h6>													
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Company Name</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Email Address</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Phone</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Fax</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="row align-items-center mb-3">
													<div class="col-md-2">
														<label class="form-label mb-md-0">Web</label>
													</div>
													<div class="col-md-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="border-bottom mb-3">
										<h6 class="mb-3">Company Images</h6>
										<div class="row">
											<div class="col-md-6">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl bg-white rounded border border-dashed me-2 flex-shrink-0 text-dark frames px-2">
                                                        <img src="assets/img/logo.svg" class="img-fluid" alt="logo">
                                                    </div>                                              
                                                    <div class="profile-upload">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">White Logo</h6>
                                                            <p class="fs-12">Recommended image size is 160px x 50px</p>
                                                        </div>
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                                Change
                                                                <input type="file" class="form-control image-sign" multiple="">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
											</div>
											<div class="col-md-6">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
                                                    <div class="d-flex align-items-center justify-content-center avatar bg-dark avatar-xxl rounded border border-dashed me-2 px-2 flex-shrink-0 text-dark frames">
                                                        <img src="assets/img/logo-white.svg" class="img-fluid text-white" alt="logo">
                                                    </div>                                              
                                                    <div class="profile-upload">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Dark Logo</h6>
                                                            <p class="fs-12">Recommended image size is 160px x 50px</p>
                                                        </div>
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                                Change
                                                                <input type="file" class="form-control image-sign" multiple="">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
											</div>
											<div class="col-md-6">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl bg-white rounded border border-dashed me-2 p-3 flex-shrink-0 text-dark frames">
                                                        <img src="assets/img/logo-small.svg" class="img-fluid" alt="logo">
                                                    </div>                                              
                                                    <div class="profile-upload">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">White Mini Logo</h6>
                                                            <p class="fs-12">Recommended image size is 80px x 80px</p>
                                                        </div>
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                                Change
                                                                <input type="file" class="form-control image-sign" multiple="">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
											</div>
                                            <div class="col-md-6">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl bg-dark rounded border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                        <i class="ti ti-photo text-gray-3 fs-16"></i>
                                                    </div>                                              
                                                    <div class="profile-upload">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Dark Mini Logo</h6>
                                                            <p class="fs-12">Recommended image size is 80px x 80px</p>
                                                        </div>
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                                Upload
                                                                <input type="file" class="form-control image-sign" multiple="">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
											</div>
											<div class="col-md-6">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded bg-white p-3 border border-dashed me-2 flex-shrink-0 text-dark frames">
														<img src="assets/img/logo-small.svg" class="img-fluid" alt="logo">
                                                    </div>                                              
                                                    <div class="profile-upload">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Favicon</h6>
                                                            <p class="fs-12">Recommended image size is 128px x 128px</p>
                                                        </div>
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                                Change
                                                                <input type="file" class="form-control image-sign" multiple="">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
											</div>
											<div class="col-md-6">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded bg-white p-3 border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                        <img src="assets/img/logo-small.svg" class="img-fluid" alt="logo">
                                                    </div>                                              
                                                    <div class="profile-upload">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Apple Icon</h6>
                                                            <p class="fs-12">Recommended image size is 180px x 180px</p>
                                                        </div>
                                                        <div class="profile-uploader d-flex align-items-center">
                                                            <div class="drag-upload-btn btn btn-sm btn-primary me-2">
                                                                Change
                                                                <input type="file" class="form-control image-sign" multiple="">
                                                            </div>
                                                            <a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
                                    <div class="border-bottom mb-3">
										<h6 class="mb-3">Address Information</h6>
										<div class="row">
											<div class="col-md-12">
												<div class="row align-items-center mb-3">
													<div class="col-md-2">
														<label class="form-label mb-md-0">Address</label>
													</div>
													<div class="col-md-10">
														<input type="text" class="form-control">
													</div>	
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Country</label>
													</div>
													<div class="col-md-8">
														<div>
															<select class="select">
																<option>Select</option>
																<option>USA</option>
																<option>Canada</option>
																<option>Germany</option>
																<option>France</option>
															</select>
														</div>
													</div>		
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">State</label>
													</div>
													<div class="col-md-8">
														<div>
															<select class="select">
																<option>Select</option>
																<option >California</option>
																<option>New York</option>
																<option>Texas</option>
																<option>Florida</option>
															</select>
														</div>
													</div>	
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">City</label>
													</div>
													<div class="col-md-8">
														<select class="select">
															<option>Select</option>
															<option>Los Angeles</option>
															<option>San Diego</option>
															<option>Fresno</option>
															<option>San Francisco</option>
														</select>
													</div>	
												</div>
											</div>
											<div class="col-md-6">
												<div class="row align-items-center mb-3">
													<div class="col-md-4">
														<label class="form-label mb-md-0">Postal Code</label>
													</div>
													<div class="col-md-8">
														<input type="text" class="form-control">
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
</body>
</html>