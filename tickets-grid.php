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
                        <h2 class="mb-1">Tickets</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Employee
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Tickets Grid</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="me-2 mb-2">
                            <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                                <a href="tickets.php" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
                                <a href="tickets-grid.php" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-layout-grid"></i></a>
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
                            <a href="#" data-bs-toggle="modal" data-bs-target="#add_ticket" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Ticket</a>
                        </div>
                        <div class="head-icons ms-2">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <div class="flex-fill">
                                            <div class="border border-dashed border-primary rounded-circle d-inline-flex align-items-center justify-content-center p-1 mb-3">
                                                <span class="avatar avatar-lg avatar-rounded bg-primary-transparent "><i class="ti ti-ticket fs-20"></i></span>
                                            </div>
                                            <p class="fw-medium fs-12 mb-1">New Tickets</p>
                                            <h4>120</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end d-flex">
                                        <div class="d-flex flex-column justify-content-between align-items-end">
                                            <span class="badge bg-transparent-purple d-inline-flex align-items-center mb-3">
												<i class="ti ti-arrow-wave-right-down me-1"></i>
												+19.01%
											</span>
                                            <div class="ticket-chart-1">8,5,6,3,4,6,7,3,8,6,4,7</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <div class="flex-fill">
                                            <div class="border border-dashed border-purple rounded-circle d-inline-flex align-items-center justify-content-center p-1 mb-3">
                                                <span class="avatar avatar-lg avatar-rounded bg-transparent-purple"><i class="ti ti-folder-open fs-20"></i></span>
                                            </div>
                                            <p class="fw-medium fs-12 mb-1">Open Tickets</p>
                                            <h4>60</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end d-flex">
                                        <div class="d-flex flex-column justify-content-between align-items-end">
                                            <span class="badge bg-transparent-dark text-dark d-inline-flex align-items-center mb-3">
												<i class="ti ti-arrow-wave-right-down me-1"></i>
												+19.01%
											</span>
                                            <div class="ticket-chart-2">8,5,6,3,4,6,7,3,8,6,4,7</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <div class="flex-fill">
                                            <div class="border border-dashed border-success rounded-circle d-inline-flex align-items-center justify-content-center p-1 mb-3">
                                                <span class="avatar avatar-lg avatar-rounded bg-success-transparent"><i class="ti ti-checks fs-20"></i></span>
                                            </div>
                                            <p class="fw-medium fs-12 mb-1">Solved Tickets</p>
                                            <h4>50</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end d-flex">
                                        <div class="d-flex flex-column justify-content-between align-items-end">
                                            <span class="badge bg-info-transparent d-inline-flex align-items-center mb-3">
												<i class="ti ti-arrow-wave-right-down me-1"></i>
												+19.01%
											</span>
                                            <div class="ticket-chart-3">8,5,6,3,4,6,7,3,8,6,4,7</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 d-flex">
                                        <div class="flex-fill">
                                            <div class="border border-dashed border-info rounded-circle d-inline-flex align-items-center justify-content-center p-1 mb-3">
                                                <span class="avatar avatar-lg avatar-rounded bg-info-transparent"><i class="ti ti-progress-alert fs-20"></i></span>
                                            </div>
                                            <p class="fw-medium fs-12 mb-1">Pending Tickets</p>
                                            <h4>10</h4>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end d-flex">
                                        <div class="d-flex flex-column justify-content-between align-items-end">
                                            <span class="badge bg-secondary-transparent d-inline-flex align-items-center mb-3">
												<i class="ti ti-arrow-wave-right-down me-1"></i>
												+19.01%
											</span>
                                            <div class="ticket-chart-4">8,5,6,3,4,6,7,3,8,6,4,7</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                            <h5>Ticket Grid</h5>
                            <div class="d-flex align-items-center flex-wrap row-gap-3">
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
										Priority
									</a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Priority</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">High</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Low</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Medium</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
										Select Status
									</a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Open</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">On Hold</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Reopened</a>
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
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                    <div>
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-49.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Laptop Issue</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 001</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">Hardware Issues</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-secondary d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Low
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-09.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Payment Issue</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 002</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">Software Issues</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-01.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Bug Report</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 003</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">IT Support</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-33.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Access Denied</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 004</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">IT Support</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-34.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Display Glitch</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 005</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">Hardware Issues</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-02.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Security Alert</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 006</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">IT Support</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-35.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Connectivity Issue</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 007</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">Connectivity</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-36.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Update Error</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 008</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">IT Support</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-37.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Login Failure</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 009</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">IT Support</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-38.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Server Timeout</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 010</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">Connectivity</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-30.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Email Client Setup</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 011</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">IT Support</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
                                        <a href="ticket-details.php" class="avatar avatar-xl avatar-rounded online border p-1 border-primary rounded-circle">
                                            <img src="assets/img/users/user-56.jpg" class="img-fluid h-auto w-auto" alt="img">
                                        </a>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-icon btn-sm rounded-circle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end p-3">
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit_ticket"><i class="ti ti-edit me-1"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item rounded-1" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-1"></i>Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="text-center mb-3">
                                    <h6 class="mb-1"><a href="ticket-details.php">Application Crashing</a></h6>
                                    <span class="badge bg-info-transparent fs-10 fw-medium">Tic - 012</span>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Category</span>
                                        <h6 class="fw-medium">Software Issues</h6>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <span>Status</span>
                                        <span class="badge bg-pink-transparent d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>Open
										</span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Priority</span>
                                        <span class="badge bg-outline-danger d-inline-flex align-items-center fs-10 fw-medium">
											<i class="ti ti-circle-filled fs-5 me-1"></i>High
										</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
                                    <div>
                                        <p class="mb-1 fs-12">Assigned To</p>
                                        <div class="d-flex align-items-center">
                                            <span class="avatar avatar-xs avatar-rounded me-2">
												<img src="assets/img/profiles/avatar-05.jpg" alt="Img">
											</span>
                                            <h6 class="fw-normal">Edgar Hansel</h6>
                                        </div>
                                    </div>
                                    <div class="icons-social d-flex align-items-center">
                                        <a href="#" class="avatar avatar-rounded avatar-sm bg-primary-transparent me-2"><i class="ti ti-message text-primary"></i></a>
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
            </div>
            <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
                <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
                <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
            </div>
        </div>
        <!-- /Page Wrapper -->

        <!-- Add Ticket -->
        <div class="modal fade" id="add_ticket">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Ticket</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="tickets-grid.php">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Event Category</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Internet Issue</option>
                                            <option>Redistribute</option>
                                            <option>Computer</option>
                                            <option>Complaint</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Subject</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Assign To</label>
                                        <input class="input-tags form-control" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">

                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Ticket Description</label>
                                        <textarea class="form-control" ></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Priority</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>High</option>
                                            <option>Low</option>
                                            <option>Medium</option>
                                        </select>
                                    </div>
                                    <div class="mb-0">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Closed</option>
                                            <option>Reopened</option>
                                            <option>Inprogress</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Add Ticket</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Ticket -->

                <!-- Add Ticket -->
                <div class="modal fade" id="edit_ticket">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Edit Ticket</h4>
                                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <i class="ti ti-x"></i>
                                </button>
                            </div>
                            <form action="tickets-grid.php">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" value="Laptop Issue">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Event Category</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>Internet Issue</option>
                                                    <option>Redistribute</option>
                                                    <option>Computer</option>
                                                    <option>Complaint</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Subject</label>
                                                <input type="text" class="form-control" value="">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Assign To</label>
                                                <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">
        
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Ticket Description</label>
                                                <textarea class="form-control" placeholder="Add Question"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Priority</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option selected>High</option>
                                                    <option>Low</option>
                                                    <option>Medium</option>
                                                </select>
                                            </div>
                                            <div class="mb-0">
                                                <label class="form-label">Status</label>
                                                <select class="select">
                                                    <option>Select</option>
                                                    <option>Closed</option>
                                                    <option selected>Reopened</option>
                                                    <option>Inprogress</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Add Ticket -->

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
                            <a href="tickets-grid.php" class="btn btn-danger">Yes, Delete</a>
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
</body>
</html>