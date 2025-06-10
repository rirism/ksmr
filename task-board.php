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
                        <h2 class="mb-1">Task Board</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Projects
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Task Board</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="dropdown me-2">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-2"></i> Export
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
                        <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_board">
                            <i class="ti ti-circle-plus me-1"></i>Add New Board
                        </a>
                        <div class="head-icons ms-2 mb-0">
                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                        <h4>Hospital Administration</h4>
                        <div class="d-flex align-items-center flex-wrap row-gap-3">
                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                <span class="avatar avatar-rounded">
									<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
								</span>
                                <span class="avatar avatar-rounded">
									<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
								</span>
                                <span class="avatar avatar-rounded">
									<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
								</span>
                                <span class="avatar avatar-rounded bg-primary fs-12">
									1+
								</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <p class="mb-0 me-3 pe-3 border-end fs-14">Total Task : <span class="text-dark"> 55 </span></p>
                                <p class="mb-0 me-3 pe-3 border-end fs-14">Pending : <span class="text-dark"> 15 </span></p>
                                <p class="mb-0 fs-14">Completed : <span class="text-dark"> 40 </span></p>
                            </div>
                            <div class="input-icon-start position-relative">
                                <span class="input-icon-addon">
									<i class="ti ti-search"></i>
								</span>
                                <input type="text" class="form-control" placeholder="Search Project">
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
                                    <h6 class="me-2">Priority</h6>
                                    <ul class="nav nav-pills border d-inline-flex p-1 rounded bg-light todo-tabs" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto active" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-selected="true">All</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-selected="false">High</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto" data-bs-toggle="pill" data-bs-target="#pills-medium" type="button" role="tab" aria-selected="false">Medium</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto" data-bs-toggle="pill" data-bs-target="#pills-low" type="button" role="tab" aria-selected="false">Low</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center justify-content-lg-end flex-wrap row-gap-3 mb-3">
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
											Clients
										</a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Clients</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Sophie</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Cameron</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Doris</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input-icon w-120 position-relative me-2">
                                        <span class="input-icon-addon">
											<i class="ti ti-calendar"></i>
										</span>
                                        <input type="text" class="form-control datetimepicker" placeholder="Created Date">
                                    </div>
                                    <div class="input-icon w-120 position-relative me-2">
                                        <span class="input-icon-addon">
											<i class="ti ti-calendar"></i>
										</span>
                                        <input type="text" class="form-control datetimepicker" placeholder="Due Date">
                                    </div>
                                    <div class="dropdown me-2">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
											Select Status
										</a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Inprogress</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">On-hold</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Completed</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center border rounded p-2">
                                        <span class="d-inline-flex me-2">Sort By : </span>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center border-0 bg-transparent p-0 text-dark" data-bs-toggle="dropdown">
												Created Date
											</a>
                                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Created Date</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">High</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Medium</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                <div class="d-flex align-items-start overflow-auto project-status pb-4">
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-transparent-purple p-1 d-flex rounded-circle me-2"><span class="bg-purple rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">To Do</h5>
                                                    <span class="badge bg-light rounded-pill">02</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 18 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-pink rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Pending</h5>
                                                    <span class="badge bg-light rounded-pill">13</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-10.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-12.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-14.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Inprogress</h5>
                                                    <span class="badge bg-light rounded-pill">04</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Doctor Module</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 35%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">35%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 20 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-15.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-17.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-18.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Inventory and Supplies</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-purple" style="width: 60%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">60%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 21 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-success p-1 d-flex rounded-circle me-2"><span class="bg-success rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Completed</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Billing and Payments</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-25.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-26.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-27.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-28.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-warning p-1 d-flex rounded-circle me-2"><span class="bg-warning rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">On-hold</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 15%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">15%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Telemedicine Implementation</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Review</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 16 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Appointment Scheduling</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 24 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel">
                                <div class="d-flex align-items-start overflow-auto project-status pb-4">
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-transparent-purple p-1 d-flex rounded-circle me-2"><span class="bg-purple rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">To Do</h5>
                                                    <span class="badge bg-light rounded-pill">02</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 18 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-pink rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Pending</h5>
                                                    <span class="badge bg-light rounded-pill">13</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-10.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-12.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-14.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Inprogress</h5>
                                                    <span class="badge bg-light rounded-pill">04</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Doctor Module</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 35%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">35%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 20 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-15.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-17.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-18.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Inventory and Supplies</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-purple" style="width: 60%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">60%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 21 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-success p-1 d-flex rounded-circle me-2"><span class="bg-success rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Completed</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Billing and Payments</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-25.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-26.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-27.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-28.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-warning p-1 d-flex rounded-circle me-2"><span class="bg-warning rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">On-hold</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 15%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">15%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Telemedicine Implementation</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Review</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 16 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Appointment Scheduling</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 24 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-medium" role="tabpanel">
                                <div class="d-flex align-items-start overflow-auto project-status pb-4">
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-transparent-purple p-1 d-flex rounded-circle me-2"><span class="bg-purple rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">To Do</h5>
                                                    <span class="badge bg-light rounded-pill">02</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 18 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-pink rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Pending</h5>
                                                    <span class="badge bg-light rounded-pill">13</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-10.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-12.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-14.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Inprogress</h5>
                                                    <span class="badge bg-light rounded-pill">04</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Doctor Module</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 35%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">35%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 20 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-15.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-17.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-18.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Inventory and Supplies</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-purple" style="width: 60%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">60%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 21 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-success p-1 d-flex rounded-circle me-2"><span class="bg-success rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Completed</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Billing and Payments</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-25.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-26.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-27.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-28.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-warning p-1 d-flex rounded-circle me-2"><span class="bg-warning rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">On-hold</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 15%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">15%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Telemedicine Implementation</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Review</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 16 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Appointment Scheduling</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 24 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-low" role="tabpanel">
                                <div class="d-flex align-items-start overflow-auto project-status pb-4">
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-transparent-purple p-1 d-flex rounded-circle me-2"><span class="bg-purple rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">To Do</h5>
                                                    <span class="badge bg-light rounded-pill">02</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 18 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-pink p-1 d-flex rounded-circle me-2"><span class="bg-pink rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Pending</h5>
                                                    <span class="badge bg-light rounded-pill">13</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient appointment booking</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 20%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">20%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-01.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-02.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-03.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-04.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Payment Gateway</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 15 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-10.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-12.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-13.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-14.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Inprogress</h5>
                                                    <span class="badge bg-light rounded-pill">04</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Doctor Module</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 35%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">35%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 20 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-15.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-16.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-17.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-18.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-19.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Inventory and Supplies</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-purple" style="width: 60%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">60%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 21 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-success p-1 d-flex rounded-circle me-2"><span class="bg-success rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Completed</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Billing and Payments</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-25.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-26.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-27.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-28.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-29.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100 me-3">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-warning p-1 d-flex rounded-circle me-2"><span class="bg-warning rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">On-hold</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-danger" style="width: 15%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">15%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-success badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Low</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Telemedicine Implementation</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-warning" style="width: 40%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">40%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 22 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-3 rounded bg-transparent-secondary w-100">
                                        <div class="bg-white p-2 rounded mb-2">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <span class="bg-soft-skyblue p-1 d-flex rounded-circle me-2"><span class="bg-skyblue rounded-circle d-block p-1"></span></span>
                                                    <h5 class="me-2">Review</h5>
                                                    <span class="badge bg-light rounded-pill">10</span>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end p-3">
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kanban-drag-wrap">
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-warning badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>Medium</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Patient Feedback</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 16 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-30.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-31.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-05.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-09.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-11.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card kanban-card mb-2">
                                                    <div class="card-body">
                                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <span class="badge bg-outline-dark me-2">Web Layout</span>
                                                                <span class="badge bg-danger badge-xs d-flex align-items-center justify-content-center"><i class="fas fa-circle fs-6 me-1"></i>High</span>
                                                            </div>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="ti ti-dots-vertical"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#edit_task"><i class="ti ti-edit me-2"></i>Edit</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash me-2"></i>Delete</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="mb-2">
                                                            <h6 class="d-flex align-items-center">Appointment Scheduling</h6>
                                                        </div>
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="progress progress-sm flex-fill" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="20">
                                                                <div class="progress-bar bg-success" style="width: 100%"></div>
                                                            </div>
                                                            <span class="d-block ms-2 text-gray-9 fw-medium">100%</span>
                                                        </div>
                                                        <p class="fw-medium mb-0">Due on : <span class="text-gray-9"> 24 Apr 2024</span></p>
                                                        <div class="d-flex align-items-center justify-content-between border-top pt-2 mt-2">
                                                            <div class="avatar-list-stacked avatar-group-sm me-3">
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-20.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-21.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-22.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-23.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded">
																	<img class="border border-white" src="assets/img/profiles/avatar-24.jpg" alt="img">
																</span>
                                                                <span class="avatar avatar-rounded bg-primary fs-12">
																	1+
																</span>
                                                            </div>
                                                            <div class="d-flex align-items-center">
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark me-2"><i class="ti ti-message-circle text-gray me-1"></i>14</a>
                                                                <a href="javascript:void(0);" class="d-flex align-items-center text-dark"><i class="ti ti-paperclip text-gray me-1"></i>14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <a href="#" class="btn btn-white border border-dashed d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#add_task">
                                                <i class="ti ti-plus me-2"></i> New Task
                                            </a>
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
                <p>Designed &amp; Developed By <a href="#" class="text-primary">Dreams</a></p>
            </div>
        </div>
        <!-- /Page Wrapper -->

        <!-- Add Task -->
        <div class="modal fade" id="add_task">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Task  </h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="tasks.php">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Due Date</label>
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
                                        <label class="form-label">Project</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Office Management</option>
                                            <option>Clinic Management </option>
                                            <option>Educational Platform</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label me-2">Team Members</label>
                                        <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput" name="Label" value="Jerald,Andrew,Philip,Davis">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tag</label>
                                        <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab,Rated">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Inprogress</option>
                                            <option>Completed</option>
                                            <option>Pending</option>
                                            <option>Onhold</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Priority</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Medium</option>
                                            <option>High</option>
                                            <option>Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Who Can See this Task?</label>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label text-dark" for="flexRadioDefault1">
                                                Public
                                            </label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
                                            <label class="form-check-label text-dark" for="flexRadioDefault2">
                                                Private
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked="">
                                            <label class="form-check-label text-dark" for="flexRadioDefault3">
                                                Admin Only
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Descriptions</label>
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Upload Attachment</label>
                                    <div class="bg-light rounded p-2">
                                        <div class="profile-uploader border-bottom mb-2 pb-2">
                                            <div class="drag-upload-btn btn btn-sm btn-white border px-3">
                                                Select File
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                            <div class="d-flex align-items-center">
                                                <h6 class="fs-12 fw-medium me-1">Logo.zip</h6>
                                                <span class="badge badge-soft-info">21MB </span>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h6 class="fs-12 fw-medium me-1">Files.zip</h6>
                                                <span class="badge badge-soft-info">25MB </span>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add New Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Task -->

        <!-- Edit Task -->
        <div class="modal fade" id="edit_task">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Task  </h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="tasks.php">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" class="form-control" value="Patient appointment booking">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Due Date</label>
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
                                        <label class="form-label">Project</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Office Management</option>
                                            <option>Clinic Management </option>
                                            <option>Educational Platform</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label me-2">Team Members</label>
                                        <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput" name="Label" value="Jerald,Andrew,Philip,Davis">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tag</label>
                                        <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Inprogress</option>
                                            <option>Completed</option>
                                            <option>Pending</option>
                                            <option>Onhold</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Priority</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Medium</option>
                                            <option>High</option>
                                            <option>Low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Who Can See this Task?</label>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                            <label class="form-check-label text-dark" for="flexRadioDefault4">
                                                Public
                                            </label>
                                        </div>
                                        <div class="form-check me-3">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked="">
                                            <label class="form-check-label text-dark" for="flexRadioDefault5">
                                                Private
                                            </label>
                                        </div>
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
                                            <label class="form-check-label text-dark" for="flexRadioDefault6">
                                                Admin Only
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label class="form-label">Descriptions</label>
                                        <div class="summernote"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Upload Attachment</label>
                                    <div class="bg-light rounded p-2">
                                        <div class="profile-uploader border-bottom mb-2 pb-2">
                                            <div class="drag-upload-btn btn btn-sm btn-white border px-3">
                                                Select File
                                                <input type="file" class="form-control image-sign" multiple="">
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                            <div class="d-flex align-items-center">
                                                <h6 class="fs-12 fw-medium me-1">Logo.zip</h6>
                                                <span class="badge badge-soft-info">21MB </span>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h6 class="fs-12 fw-medium me-1">Files.zip</h6>
                                                <span class="badge badge-soft-info">25MB </span>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Edit Task -->

        <!-- Add Board -->
        <div class="modal fade" id="add_board">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add New Board</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="task-board.php">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Board Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <label class="form-label">Board Color</label>
                            <div class="d-flex align-items-center flex-wrap row-gap-3">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add New Board</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Board -->

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
                            <a href="task-board.php" class="btn btn-danger">Yes, Delete</a>
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
<!-- Drag Card -->
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
 <!-- Bootstrap Tagsinput JS -->
 <script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
 <script src="assets/js/kanban.js"></script>
</body>
</html>