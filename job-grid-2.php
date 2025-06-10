<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Rangeslider CSS -->
 <link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.css">
<link rel="stylesheet" href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">

</head>
<body>
<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

  <!-- Main Wrapper -->
	<div class="main-wrapper">

<header class="header header-two">
	<div class="container">
		<div class="d-flex align-items-center justify-content-between">
			<div>
				<a href="admin-dashboard.php" class="logo">
					<img src="assets/img/logo.svg" alt="Logo">
				</a>
				<a href="admin-dashboard.php" class="dark-logo">
					<img src="assets/img/logo-white.svg" alt="Logo">
				</a>
			</div>
			<div class="d-flex align-items-center">
				<a href="login.php" class="btn btn-dark d-inline-flex align-items-center me-2"><i class="ti ti-lock me-1"></i>Log in</a>
				<a href="register.php" class="btn btn-primary d-inline-flex align-items-center"><i class="ti ti-user-circle me-1"></i>Register</a>
			</div>
		</div>
	</div>
</header>

<!-- Page Wrapper -->
<div class="page-wrapper job-wrapper ms-0">
	<div class="content px-0">
		<div class="container">
			<div class="row">
				<div class="col-xxl-3 col-lg-4 theiaStickySidebar">
					<div class="card shadow-none">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
								<h5>Filter</h5>
								<a href="#" class="text-danger">Reset</a>
							</div>
							<div class="input-icon position-relative mb-3">
								<span class="input-icon-addon">
									<i class="ti ti-map-pin-search"></i>
								</span>
								<input type="text" class="form-control" placeholder="Location">
							</div>
							<div class="accordion todo-accordion" id="accordionExample">
								<div class="accordion-item pb-3 mb-3 border-bottom">
									<div class="accordion-header" id="headingTwo">
										<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo" aria-expanded="true" role="button">
											<div class="d-flex align-items-center w-100">
												<h5 class="fw-medium">Salary Range</h5>
												<div class="ms-auto">
													<span><i class="fas fa-chevron-down"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body pt-3 mt-3">
											<div class="filter-range">
												<input type="text" id="range_03">
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item pb-3 mb-3 border-bottom">
									<div class="accordion-header" id="headingThree">
										<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-controls="collapseThree" aria-expanded="false" role="button">
											<div class="d-flex align-items-center w-100">
												<h5 class="fw-medium">Job Type</h5>
												<div class="ms-auto">
													<span><i class="fas fa-chevron-down"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body pt-3">
											<div class="d-flex align-items-center justify-content-between mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm2" checked="">
													<label class="form-check-label" for="checkebox-sm2">
														All
													</label>
												</div>
												<span class="badge badge-dark-transparent">300</span>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm3">
													<label class="form-check-label" for="checkebox-sm3">
														Full time
													</label>
												</div>
												<span class="badge badge-dark-transparent">120</span>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm4">
													<label class="form-check-label" for="checkebox-sm4">
														Part Time
													</label>
												</div>
												<span class="badge badge-dark-transparent">80</span>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm5">
													<label class="form-check-label" for="checkebox-sm5">
														Freelance
													</label>
												</div>
												<span class="badge badge-dark-transparent">30</span>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm6">
													<label class="form-check-label" for="checkebox-sm6">
														Internship
													</label>
												</div>
												<span class="badge badge-dark-transparent">20</span>
											</div>
											<div class="d-flex align-items-center justify-content-between mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm7">
													<label class="form-check-label" for="checkebox-sm7">
														Contract
													</label>
												</div>
												<span class="badge badge-dark-transparent">30</span>
											</div>
											<div class="d-flex align-items-center justify-content-between">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm8">
													<label class="form-check-label" for="checkebox-sm8">
														Volunteer
													</label>
												</div>
												<span class="badge badge-dark-transparent">20</span>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item pb-3 mb-3 border-bottom">
									<div class="accordion-header" id="headingFour">
										<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-controls="collapseFour" aria-expanded="false" role="button">
											<div class="d-flex align-items-center w-100">
												<h5 class="fw-medium">Experience</h5>
												<div class="ms-auto">
													<span><i class="fas fa-chevron-down"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body pt-3">
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm9">
													<label class="form-check-label" for="checkebox-sm9">
														Below 1 year
													</label>
												</div>
											</div>
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm10">
													<label class="form-check-label" for="checkebox-sm10">
														1 - 3 years
													</label>
												</div>
											</div>
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm11">
													<label class="form-check-label" for="checkebox-sm11">
														3 - 5 years
													</label>
												</div>
											</div>
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm12">
													<label class="form-check-label" for="checkebox-sm12">
														5 - 10 years
													</label>
												</div>
											</div>
											<div>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm13">
													<label class="form-check-label" for="checkebox-sm13">
														More than 10 years
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item pb-3 mb-3 border-bottom">
									<div class="accordion-header" id="headingFive">
										<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-controls="collapseFive" aria-expanded="false" role="button">
											<div class="d-flex align-items-center w-100">
												<h5 class="fw-medium">Work Type</h5>
												<div class="ms-auto">
													<span><i class="fas fa-chevron-down"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body pt-3">
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm14">
													<label class="form-check-label" for="checkebox-sm14">
														On Site
													</label>
												</div>
											</div>
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm15">
													<label class="form-check-label" for="checkebox-sm15">
														Remote
													</label>
												</div>
											</div>
											<div>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm16">
													<label class="form-check-label" for="checkebox-sm16">
														Hybrid
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="accordion-item mb-0">
									<div class="accordion-header" id="headingSix">
										<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-controls="collapseSix" aria-expanded="false" role="button">
											<div class="d-flex align-items-center w-100">
												<h5 class="fw-medium">Experience Level</h5>
												<div class="ms-auto">
													<span><i class="fas fa-chevron-down"></i></span>
												</div>
											</div>
										</div>
									</div>
									<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body pt-3">
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm17">
													<label class="form-check-label" for="checkebox-sm17">
														Entry Level
													</label>
												</div>
											</div>
											<div class="mb-2">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm18">
													<label class="form-check-label" for="checkebox-sm18">
														Mid Level
													</label>
												</div>
											</div>
											<div>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value="" id="checkebox-sm19">
													<label class="form-check-label" for="checkebox-sm19">
														Expert
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-9 col-lg-8">
					<div class="card">
						<div class="card-body p-3">
							<div class="row g-3">
								<div class="col-md-3">
									<div>
										<select class="select">
											<option>Category</option>
											<option>Software</option>
										</select>
									</div>
								</div>
								<div class="col-md-9">
									<div class="d-flex align-items-center">
										<div class="flex-fill me-3">
											<input type="text" class="form-control" placeholder="Search">
										</div>
										<div>
											<a href="#" class="btn btn-primary">Search</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-md-flex d-block align-items-center justify-content-between border-bottom pb-1 mb-3">
						<div class="mb-2">
							<h5>Total Jobs (68)</h5>
						</div>
						<div class="d-flex right-content align-items-center flex-wrap">
	
							<div class="me-2 mb-2">
								<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
									<a href="job-list-2.php" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
									<a href="job-grid-2.php" class="btn btn-icon btn-sm active bg-dark text-white"><i class="ti ti-layout-grid"></i></a>
								</div>
							</div>
							<div class="dropdown mb-2">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sort By : Newly Post
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Newly Post</a>
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
					<div class="row">
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/apple.svg" class="w-auto h-auto" alt="icon"></span>
												</a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Senior IOS Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/php.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Junior PHP Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/black.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Network Engineer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/react.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">React Developer </a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/laravel.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Laravel Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/devops.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">DevOps Engineer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/android.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Android Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/html.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">HTML Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/ui.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">UI/UX Designer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/grafic.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Senior IOS Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray"><img src="assets/img/icons/angular.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Angular Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xxl-4 col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="card bg-light">
										<div class="card-body p-3">
											<div class="d-flex align-items-center">
												<a href="job-details.php" class="me-2">
													<span class="avatar avatar-lg bg-gray-100"><img src="assets/img/icons/nodejs.svg" class="w-auto h-auto" alt="icon"></span></a>
												<div>
													<h6 class="fw-medium mb-1 text-truncate"><a href="job-details.php">Node js Developer</a></h6>
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
									<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
										<p class="d-inline-flex align-items-center text-gray-9 mb-0">
											<i class="ti ti-clock me-1"></i>10 hours ago
										</p>
										<div>
											<a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#apply_job">Apply Now </a>
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

</div>
<!-- /Page Wrapper -->

<!-- Apply Job -->
<div class="modal fade" id="apply_job">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Add Your Details</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="job-grid-2.php">
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Name</label>
						<input type="text" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Email Address</label>
						<input type="text" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Message</label>
						<textarea class="form-control" rows="3"></textarea>
					</div>
					<div>
						<label class="form-label">Upload your CV</label>
						<input type="file" class="form-control" id="cv_upload">
					</div>
				</div>		
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>			
			</form>
		</div>
	</div>
</div>
<!-- /Apply Job -->

</div>
<!-- /Main Wrapper -->

<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Rangeslider JS -->
<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>
<script src="assets/plugins/ion-rangeslider/js/custom-rangeslider.js"></script>
<script src="assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

</body>
</html>