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
						<h2 class="mb-1">Jobs</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Jobs</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="job-list.php" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
								<a href="job-grid.php" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-layout-grid"></i></a>
							</div>
						</div>
						<div class="me-2 mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Export
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_post" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Post Job</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card">
					<div class="card-body p-3">
						<div class="d-flex align-items-center justify-content-between">
							<h5>Job Grid</h5>
                            <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                                <div class="me-3">
                                    <div class="input-icon-end position-relative">
                                        <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                        <span class="input-icon-addon">
                                            <i class="ti ti-chevron-down"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="dropdown me-3">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Role
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Senior IOS Developer</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Junior PHP Developer</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Network Engineer</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown me-3">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Status
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Sort By : Last 7 Days
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/apple.svg" class="w-auto h-auto" alt="icon"></span>
											</a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Senior IOS Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                   	 	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										New York, USA
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										30, 000 - 35, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										2 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/php.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Junior PHP Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Los Angeles, USA
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										20, 000 - 25, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										4 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/black.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Network Engineer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Bristol, UK
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										30, 000 - 35, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										1 year of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/react.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">React Developer </a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Birmingham, UK
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										28, 000 - 32, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										3 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/laravel.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Laravel Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Washington, USA
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										32, 000 - 36, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										1 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/devops.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">DevOps Engineer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Coventry, UK
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										25, 000 - 35, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										6 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/android.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Android Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                        </div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Chicago, USA
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										28, 000 - 32, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										5 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/html.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">HTML Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Carlisle, UK
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										25, 000 - 28, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										3 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/ui.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">UI/UX Designer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										UI/UX Designer
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										20, 000 - 25, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										4 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/grafic.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Senior IOS Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										San Diego, USA
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										22, 000 - 28, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										3 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/angular.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Angular Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Sheffield, UK
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										28, 000 - 30, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										2 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
                                </div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="card bg-light">
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="me-2">
                                                <span class="avatar avatar-lg bg-gray-100"><img src="assets/img/icons/nodejs.svg" class="w-auto h-auto" alt="icon"></span></a>
                                            <div>
                                                <h6 class="fw-medium mb-1 text-truncate"><a href="#">Node js Developer</a></h6>
                                                <p class="fs-12 text-gray fw-normal">25 Applicants</p>
                                            </div>
                                    	</div>
                                    </div>
								</div>
								<div class="d-flex flex-column mb-3">
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-map-pin-check text-gray-5 me-2"></i>
										Boston, USA
									</p>
									<p class="text-dark d-inline-flex align-items-center mb-2">
										<i class="ti ti-currency-dollar text-gray-5 me-2"></i>
										25, 000 - 28, 000 / month
									</p>
									<p class="text-dark d-inline-flex align-items-center">
										<i class="ti ti-briefcase text-gray-5 me-2"></i>
										3 years of experience
									</p>
                                   
								</div>
                                <div class="mb-3">
                                    <span class="badge badge-pink-transparent me-1">Full Time</span>
                                    <span class="badge bg-secondary-transparent">Expert</span>
                                </div>
                                <div class="progress progress-xs mb-2">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 30%"></div>
								</div>
                                <div>
                                    <p class="fs-12 text-gray fw-normal">10 of 25 filled</p>
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

		<!-- Add Post -->
		<div class="modal fade" id="add_post">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Post Job</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="job-grid.php">
						<div class="modal-body pb-0">
							<div class="row">
                                <div class="contact-grids-tab pt-0">
                                    <ul class="nav nav-underline" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                          <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Location</button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
                                                    <div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
                                                        <img src="assets/img/profiles/avatar-30.jpg" alt="img" class="rounded-circle">
                                                    </div>                                              
                                                    <div class="profile-upload">
                                                        <div class="mb-2">
                                                            <h6 class="mb-1">Upload Profile Image</h6>
                                                            <p class="fs-12">Image should be below 4 mb</p>
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
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Job Title <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control">
                                                </div>									
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Job Description <span class="text-danger"> *</span></label>
                                                    <textarea rows="3" class="form-control"></textarea>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Job Category <span class="text-danger"> *</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>IOS</option>
                                                        <option>Web & Application</option>
                                                        <option>Networking</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Job Type <span class="text-danger"> *</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>Full Time</option>
                                                        <option>Part Time</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Job Level <span class="text-danger"> *</span></label>
                                                    <select class="select">
														<option>Select</option>
                                                        <option>Team Lead</option>
                                                        <option>Manager</option>
														<option>Senior</option>
														<option>junior</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Experience <span class="text-danger"> *</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>Entry Level</option>
                                                        <option>Mid Level</option>
                                                        <option>Expert</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Qualification <span class="text-danger"> *</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>Bachelore Degree</option>
                                                        <option>Master Degree</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Gender <span class="text-danger"> *</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Min. Sallary <span class="text-danger"> *</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>10k - 15k</option>
                                                        <option>15k -20k</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Max. Sallary <span class="text-danger"> *</span></label>
                                                    <select class="select">
                                                        <option>Select</option>
                                                        <option>40k - 50k</option>
                                                        <option>50k - 60k</option>
                                                    </select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3 ">
                                                    <label class="form-label">Job Expired Date <span class="text-danger"> *</span></label>
                                                    <div class="input-icon-end position-relative">
														<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
														<span class="input-icon-addon">
															<i class="ti ti-calendar text-gray-7"></i>
														</span>
													</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Required Skills</label>
                                                    <input type="text" class="form-control">
                                                </div>									
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Save & Next</button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Address <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control">
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
													<label class="form-label">Country <span class="text-danger"> *</span></label>
													<select class="select">
														<option>Select</option>
														<option>USA</option>
														<option>Canada</option>
														<option>Germany</option>
														<option>France</option>
													</select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">State <span class="text-danger"> *</span></label>
                                                    <select class="select">
														<option>Select</option>
														<option>California</option>
														<option>New York</option>
														<option>Texas</option>
														<option>Florida</option>
													</select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
													<label class="form-label">City <span class="text-danger"> *</span></label>
                                                    <select class="select">
														<option>Select</option>
														<option>Los Angeles</option>
														<option>San Diego</option>
														<option>Fresno</option>
														<option>San Francisco</option>
													</select>
                                                </div>									
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Zip Code <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control">
                                                </div>									
                                            </div>
                                            <div class="col-md-12">
                                                <div class="map-grid mb-3">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6509170.989457427!2d-123.80081967108484!3d37.192957227641294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C%20USA!5e0!3m2!1sen!2sin!4v1669181581381!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100"></iframe>
                                                </div>									
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Post</button>
                                        </div>
                                    </div>
                                </div>								
							</div>
						</div>						
					</form>
				</div>
			</div>
		</div>
		<!-- /Post Job -->

        <!-- Add Job Success -->
		<div class="modal fade" id="success_modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-xm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center p-3">
							<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i class="ti ti-check fs-24"></i></span>
							<h5 class="mb-2">Job Posted Successfully</h5>
							<div>
								<div class="row g-2">
									<div class="col-12">
										<a href="job-grid.php" class="btn btn-dark w-100">Back to List</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Client Success -->


    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>