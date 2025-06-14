<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Bootstrap Tagsinput CSS -->
 <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

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
						<h2 class="mb-1">Clients</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Client Grid</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="clients.php" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
								<a href="clients-grid.php" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-layout-grid"></i></a>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_client" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Client</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Clients Info -->
				<div class="row">
					<div class="col-xl-3 col-md-6 d-flex">
						<div class="card flex-fill">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0 me-2">
										<span class="p-2 br-10 bg-pink-transparent border border-pink d-flex align-items-center justify-content-center">
											<i class="ti ti-users-group text-pink fs-18"></i>
										</span>
									</div>
									<div>
										<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Total Clients</p>
										<h4>300</h4>
									</div>
								</div>
								<span class="badge bg-transparent-purple d-inline-flex align-items-center fw-normal">
									<i class="ti ti-arrow-wave-right-down me-1"></i>
									+19.01%
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0 me-2">
										<span class="p-2 br-10 bg-success-transparent border border-success d-flex align-items-center justify-content-center">
											<i class="ti ti-user-share fs-18"></i>
										</span>
									</div>
									<div>
										<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Active Clients</p>
										<h4>270</h4>
									</div>
								</div>
								<span class="badge bg-transparent-primary text-primary d-inline-flex align-items-center fw-normal">
									<i class="ti ti-arrow-wave-right-down me-1"></i>
									+19.01%
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0 me-2">
										<span class="p-2 br-10 bg-danger-transparent border border-danger d-flex align-items-center justify-content-center">
											<i class="ti ti-user-pause fs-18"></i>
										</span>
									</div>
									<div>
										<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">Inactive Clients</p>
										<h4>30</h4>
									</div>
								</div>
								<span class="badge bg-transparent-dark text-dark d-inline-flex align-items-center fw-normal">
									<i class="ti ti-arrow-wave-right-down me-1"></i>
									+19.01%
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-md-6 d-flex">
					<div class="card flex-fill">
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center">
									<div class="flex-shrink-0 me-2">
										<span class="p-2 br-10 bg-info-transparent border border-info d-flex align-items-center justify-content-center">
											<i class="ti ti-user-plus fs-18"></i>
										</span>
									</div>
									<div>
										<p class="fs-12 fw-medium mb-0 text-gray-5 mb-1">New Clients</p>
										<h4>300</h4>
									</div>
								</div>
								<span class="badge bg-transparent-secondary text-dark d-inline-flex align-items-center fw-normal">
									<i class="ti ti-arrow-wave-right-down me-1"></i>
									+19.01%
								</span>
							</div>
						</div>
					</div>
				</div>
				</div>
				<!-- /Clients Info -->

				<div class="card">
					<div class="card-body p-3">
						<div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
							<h5>Client Grid</h5>
							<div class="d-flex align-items-center flex-wrap row-gap-3">
								<div class="dropdown me-2">
									<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
										Select Status
									</a>
									<ul class="dropdown-menu  dropdown-menu-end p-3">
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1">Select Status</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
										</li>
										<li>
											<a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
										</li>
									</ul>
								</div>
								<div class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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

				<!-- Clients Grid -->
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-39.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Michael Walker</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">CEO</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Office Management App</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-purple" role="progressbar" style="width: 60%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-01.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-02.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-03.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+1
											</a>
										</div>
										<span class="text-purple">60%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">BrightWave Innovations</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-40.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Sophie Headrick</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Manager</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Clinic Management </p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 40%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-04.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-05.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-06.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+2
											</a>
										</div>
										<span class="text-warning">40%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">Stellar Dynamics</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-41.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Cameron Drake</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Director</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project :Educational Platform</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 15%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-07.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-08.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-09.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+2
											</a>
										</div>
										<span class="text-danger">15%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">Quantum Nexus</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-42.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Doris Crowley</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Consultant</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Navigation and Safety App</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-pink" role="progressbar" style="width: 85%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-10.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-11.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-12.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+2
											</a>
										</div>
										<span class="text-pink">85%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">EcoVision Enterprises</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-43.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Thomas Bordelon</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Manager</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Travel Planning Website</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 20%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-10.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-11.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-12.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+2
											</a>
										</div>
										<span class="text-danger">20%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">Aurora Technologies</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-45.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Kathleen Gutierrez</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Director</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Service Booking Software</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-success" role="progressbar" style="width: 95%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-13.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-14.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-15.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+3
											</a>
										</div>
										<span class="text-success">95%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">BlueSky Ventures</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-46.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Bruce Wright</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">CEO</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Hotel Booking App</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-pink" role="progressbar" style="width: 78%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-16.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-17.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-18.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+3
											</a>
										</div>
										<span class="text-pink">78%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">TerraFusion Energy</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-47.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Estelle Morgan</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Manager</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project :Car & Bike Rental Software</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 45%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-19.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-20.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-21.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+2
											</a>
										</div>
										<span class="text-warning">45%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">UrbanPulse Design</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-48.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Stephen Dias</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">CEO</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Food Order App</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-warning" role="progressbar" style="width: 35%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-22.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-23.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-24.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+2
											</a>
										</div>
										<span class="text-warning">35%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">Nimbus Networks</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-43.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Angela Thomas</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Consultant</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : POS Admin Software</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-purple" role="progressbar" style="width: 55%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-25.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-26.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-27.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+1
											</a>
										</div>
										<span class="text-purple">55%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">Epicurean Delights</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-49.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Charles  Ramos</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">CEO</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Chat & Call  Mobile App</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-danger" role="progressbar" style="width: 25%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-28.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-29.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-30.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+1
											</a>
										</div>
										<span class="text-danger">25%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">AlphaTech Solutions</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-start mb-2">
									<div class="form-check form-check-md">
										<input class="form-check-input" type="checkbox">
									</div>
									<div>
										<a href="client-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
											<img src="assets/img/users/user-50.jpg" class="img-fluid h-auto w-auto" alt="img">
										</a>
									</div>
									<div class="dropdown">
										<button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="ti ti-dots-vertical"></i>
										</button>
										<ul class="dropdown-menu dropdown-menu-end p-3">
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_client">
													<i class="ti ti-edit me-1"></i>Edit
												</a>
											</li>
											<li>
												<a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="text-center mb-3">
									<h6 class="mb-1"><a href="client-details.php">Shirley Begaye</a></h6>
									<span class="badge bg-pink-transparent fs-10 fw-medium">Manager</span>
								</div>
								<div>
									<p class="mb-2 text-truncate">Project : Invoicing & Billing Software</p>
									<div class="progress progress-xs mb-2">
										<div class="progress-bar bg-success" role="progressbar" style="width: 98%"></div>
									</div>
									<div class="d-flex align-items-center justify-content-between">
										<div class="avatar-list-stacked avatar-group-sm">
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-31.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-32.jpg" class="border border-white" alt="img">
											</span>
											<span class="avatar avatar-rounded">
												<img src="assets/img/users/user-33.jpg" class="border border-white" alt="img">
											</span>
											<a class="avatar bg-primary avatar-rounded text-fixed-white fs-12" href="javascript:void(0);">
												+1
											</a>
										</div>
										<span class="text-success">98%</span>
									</div>
								</div>
								<div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
									<div>
										<p class="mb-1 fs-12">Company</p>
										<h6 class="fw-normal text-truncate">Phoenix Solutions</h6>
									</div>
									<div class="icons-social d-flex align-items-center">
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light me-2"><i class="ti ti-message"></i></a>
										<a href="#" class="avatar avatar-rounded avatar-sm bg-light"><i class="ti ti-phone"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="text-center mb-4">
							<a href="#" class="btn btn-primary"><i class="ti ti-loader-3 me-1"></i>Load More</a>
						</div>
					</div>
				</div>
				<!-- /Clients Grid -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Client -->
		<div class="modal fade" id="add_client">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Client</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="clients.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
								  <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Basic Information</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Permissions</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
									<div class="modal-body pb-0 ">	
										<div class="row">
											<div class="col-md-12">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
													<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
														<i class="ti ti-photo"></i>
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
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">First Name <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Last Name</label>
													<input type="email" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Username <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Email<span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-input form-control">
														<span class="ti toggle-password ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-inputs form-control">
														<span class="ti toggle-passwords ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Company</label>
													<input type="text" class="form-control">
												</div>		
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Save </button>
									</div>
							</div>
							<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
								<div class="modal-body pb-0 ">	
									<div class="card bg-light-500 shadow-none">
										<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
											<h6>Enable Options</h6>
											<div class="d-flex align-items-center justify-content-end">
												<div class="form-check form-check-md form-switch me-2">
													<label class="form-check-label mt-0">
													<input class="form-check-input me-2" type="checkbox" role="switch">
														Enable all Module
													</label>
												</div>
												<div class="form-check form-check-md d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Select All
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive permission-table border rounded">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
																Holidays
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Leaves
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Clients
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Projects
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Tasks
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Chats
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Assets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Timing Sheets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Save </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Client -->

		<!-- Edit Client -->
		<div class="modal fade" id="edit_client">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Client</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="clients.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab2" role="tablist">
								<li class="nav-item" role="presentation">
								  <button class="nav-link active" id="info-tab2" data-bs-toggle="tab" data-bs-target="#basic-info2" type="button" role="tab" aria-selected="true">Basic Information</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Permissions</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent2">
							<div class="tab-pane fade show active" id="basic-info2" role="tabpanel" aria-labelledby="info-tab2" tabindex="0">
									<div class="modal-body pb-0 ">	
										<div class="row">
											<div class="col-md-12">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
													<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
														<i class="ti ti-photo"></i>
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
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">First Name <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Michael">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Last Name</label>
													<input type="email" class="form-control" value="Walker">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Username <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Michael Walker">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Email<span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="michael@example.com">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-input form-control" value="1234">
														<span class="ti toggle-password ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Confirm Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-inputs form-control" value="1234">
														<span class="ti toggle-passwords ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Phone Number <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="(163) 2459 315">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Company</label>
													<input type="text" class="form-control" value="BrightWave Innovations">
												</div>		
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-primary">Save </button>
									</div>
							</div>
							<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
								<div class="modal-body pb-0 ">	
									<div class="card bg-light-500 shadow-none">
										<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
											<h6>Enable Options</h6>
											<div class="d-flex align-items-center justify-content-end">
												<div class="form-check form-check-md form-switch me-2">
													<label class="form-check-label mt-0">
													<input class="form-check-input me-2" type="checkbox" role="switch">
														Enable all Module
													</label>
												</div>
												<div class="form-check form-check-md d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Select All
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive permission-table border rounded">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
																Holidays
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
															Leaves
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center" checked>
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Clients
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Projects
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Tasks
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Chats
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked>
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Assets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-md form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Timing Sheets
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check form-check-md d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Cancel</button>
									<button type="submit" class="btn btn-primary">Save </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Client -->

		<!-- Add Client Success -->
		<div class="modal fade" id="success_modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center p-3">
							<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i class="ti ti-check fs-24"></i></span>
							<h5 class="mb-2">Client Added Successfully</h5>
							<p class="mb-3">Stephan Peralt has been added with Client ID : <span class="text-primary">#CLT - 0024</span>
							</p>
							<div>
								<div class="row g-2">
									<div class="col-6">
										<a href="clients.php" class="btn btn-dark w-100">Back to List</a>
									</div>
									<div class="col-6">
										<a href="client-details.php" class="btn btn-primary w-100">Detail Page</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Client Success -->

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
							<a href="clients-grid.php" class="btn btn-danger">Yes, Delete</a>
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