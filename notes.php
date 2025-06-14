<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Smarthr Admin Template</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
 <!-- Owl Carousel -->
 <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
<!-- Bootstrap Tagsinput CSS -->
<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

</head>
<body>
<div id="global-loader">
		<div class="page-loader"></div>
	</div>

    <div class="main-wrapper">
    <?php include 'layouts/menu.php'; ?>

 <!-- Page wrapper -->
 <div class="page-wrapper">
			<div class="content pb-4">
				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Notes</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Application
								</li>
								<li class="breadcrumb-item active" aria-current="page">Notes</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-2"></i>Export
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
							<a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_note"><i class="ti ti-circle-plus me-2"></i>Add Notes</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget">
						<div class="border rounded-3 bg-white p-3">
							<div class="mb-3 pb-3 border-bottom">
								<h4 class="d-flex align-items-center"><i class="ti ti-file-text me-2"></i>Notes List</h4>
							</div>
							<div class="border-bottom pb-3 ">
								<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
									aria-orientation="vertical">
									<button
										class="d-flex text-start align-items-center fw-medium fs-15 nav-link active mb-1"
										id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
										type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true"><i
											class="ti ti-inbox me-2"></i>All Notes<span class="ms-2">1</span></button>
									<button class="d-flex text-start align-items-center fw-medium fs-15 nav-link mb-1"
										id="v-pills-messages-tab" data-bs-toggle="pill"
										data-bs-target="#v-pills-messages" type="button" role="tab"
										aria-controls="v-pills-messages" aria-selected="false"><i
											class="ti ti-star me-2"></i>Important</button>
									<button class="d-flex text-start align-items-center fw-medium fs-15 nav-link mb-0"
										id="v-pills-settings-tab" data-bs-toggle="pill"
										data-bs-target="#v-pills-settings" type="button" role="tab"
										aria-controls="v-pills-settings" aria-selected="false"><i
											class="ti ti-trash me-2"></i>Trash</button>
								</div>
							</div>
							<div class="mt-3">
								<div class="border-bottom px-2 pb-3 mb-3">
									<h5 class="mb-2">Tags</h5>
									<div class="d-flex flex-column mt-2">
										<a href="javascript:void(0);" class="text-info mb-2"><span
												class="text-info me-2"><i
													class="fas fa-square square-rotate fs-10"></i></span>Pending</a>
										<a href="javascript:void(0);" class="text-danger mb-2"><span
												class="text-danger me-2"><i
													class="fas fa-square square-rotate fs-10"></i></span>Onhold</a>
										<a href="javascript:void(0);" class="text-warning mb-2"><span
												class="text-warning me-2"><i
													class="fas fa-square square-rotate fs-10"></i></span>Inprogress</a>
										<a href="javascript:void(0);" class="text-success"><span
												class="text-success me-2"><i
													class="fas fa-square square-rotate fs-10"></i></span>Done</a>
									</div>
								</div>
								<div class="px-2">
									<h5 class="mb-2">Priority</h5>
									<div class="d-flex flex-column mt-2">
										<a href="javascript:void(0);" class="text-warning mb-2"><span
												class="text-warning me-2"><i
													class="fas fa-square square-rotate fs-10"></i></span>Medium</a>
										<a href="javascript:void(0);" class="text-success mb-2"><span
												class="text-success me-2"><i
													class="fas fa-square square-rotate fs-10"></i></span>High</a>
										<a href="javascript:void(0);" class="text-danger"><span
												class="text-danger me-2"><i
													class="fas fa-square square-rotate fs-10"></i></span>Low</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-9 budget-role-notes">
						<div
							class="bg-white rounded-3 d-flex align-items-center justify-content-between flex-wrap mb-4 p-3 pb-0">
							<div class="d-flex align-items-center mb-3">
								<div class="me-3">
									<select class="select">
										<option>Bulk Actions</option>
										<option>Delete Marked</option>
										<option>Unmark All</option>
										<option>Mark All</option>
									</select>
								</div>
								<a href="#" class="btn btn-light">Apply</a>
							</div>
							<div class="form-sort mb-3">
								<i class="ti ti-filter feather-filter info-img"></i>
								<select class="select">
									<option>Recent</option>
									<option>Last Modified</option>
									<option>Last Modified by me</option>
								</select>
							</div>
						</div>
						<div class="tab-content" id="v-pills-tabContent2">
							<div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
								aria-labelledby="v-pills-profile-tab">
								<div class="border-bottom mb-4 pb-4">
									<div class="row">
										<div class="col-md-12">
											<div
												class="d-flex align-items-center justify-content-between flex-wrap mb-2">
												<div class="d-flex align-items-center mb-3">
													<h4>Important Notes </h4>
													<div class="owl-nav slide-nav5 text-end nav-control ms-3"></div>
												</div>
												<div class="notes-close mb-3">
													<a href="javascript:void(0);" class="text-danger fs-15"><i
															class="fas fa-times me-1"></i> Close </a>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="notes-slider owl-carousel">
												<div class="card rounded-3 mb-0">
													<div class="card-body p-4">
														<div class="d-flex align-items-center justify-content-between">
															<span
																class="badge bg-outline-warning d-inline-flex align-items-center"><i
																	class="fas fa-circle fs-6 me-1"></i>Medium</span>
															<div>
																<a href="javascript:void(0);" data-bs-toggle="dropdown"
																	aria-expanded="false">
																	<i class="fas fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu notes-menu dropdown-menu-end">
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#edit-note-units"><span><i
																				data-feather="edit"></i></span>Edit</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#delete_modal"><span><i
																				data-feather="trash-2"></i></span>Delete</a>
																	<a href="javascript:void(0);"
																		class="dropdown-item"><span><i
																				data-feather="star"></i></span>Not
																		Important</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#view-note-units"><span><i
																				data-feather="eye"></i></span>View</a>
																</div>
															</div>
														</div>
														<div class="my-3">
															<h5 class="text-truncate mb-1"><a
																	href="javascript:void(0);">Plan a trip to another
																	country</a></h5>
															<p class="mb-3 d-flex align-items-center text-dark"><i
																	class="ti ti-calendar me-1"></i>20 Jan 2024</p>
															<p class="text-truncate line-clamb-2 text-wrap">Space, the
																final frontier. These are the voyages of the Starship
																Enterprise.</p>
														</div>
														<div
															class="d-flex align-items-center justify-content-between border-top pt-3">
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);"
																	class="avatar avatar-md me-2">
																	<img src="./assets/img/profiles/avatar-01.jpg"
																		alt="Profile" class="img-fluid rounded-circle">
																</a>
																<span class="text-info d-flex align-items-center"><i
																		class="fas fa-square square-rotate fs-10 me-1"></i>Personal</span>
															</div>
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);" class="me-2">
																	<span><i
																			class="fas fa-star text-warning"></i></span>
																</a>
																<a href="javascript:void(0);">
																	<span><i class="ti ti-trash text-danger"></i></span>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="card rounded-3 mb-0">
													<div class="card-body p-4">
														<div class="d-flex align-items-center justify-content-between">
															<span
																class="badge bg-outline-danger d-inline-flex align-items-center"><i
																	class="fas fa-circle fs-6 me-1"></i>Low</span>
															<div>
																<a href="javascript:void(0);" data-bs-toggle="dropdown"
																	aria-expanded="false">
																	<i class="fas fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu notes-menu dropdown-menu-end">
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#edit-note-units"><span><i
																				data-feather="edit"></i></span>Edit</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#delete_modal"><span><i
																				data-feather="trash-2"></i></span>Delete</a>
																	<a href="javascript:void(0);"
																		class="dropdown-item"><span><i
																				data-feather="star"></i></span>Not
																		Important</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#view-note-units"><span><i
																				data-feather="eye"></i></span>View</a>
																</div>
															</div>
														</div>
														<div class="my-3">
															<h5 class="text-truncate mb-1"><a
																	href="javascript:void(0);">Improve touch typing</a>
															</h5>
															<p class="mb-3 d-flex align-items-center text-dark"><i
																	class="ti ti-calendar me-1"></i>22 Jan 2024</p>
															<p class="text-truncate line-clamb-2 text-wrap">Well, the
																way they make shows is, they make one show.</p>
														</div>
														<div
															class="d-flex align-items-center justify-content-between border-top pt-3">
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);"
																	class="avatar avatar-md me-2">
																	<img src="./assets/img/profiles/avatar-02.jpg"
																		alt="Profile" class="img-fluid rounded-circle">
																</a>
																<span class="text-success d-flex align-items-center"><i
																		class="fas fa-square square-rotate fs-10 me-1"></i>Work</span>
															</div>
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);" class="me-2">
																	<span><i
																			class="fas fa-star text-warning"></i></span>
																</a>
																<a href="javascript:void(0);">
																	<span><i class="ti ti-trash text-danger"></i></span>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="card rounded-3 mb-0">
													<div class="card-body p-4">
														<div class="d-flex align-items-center justify-content-between">
															<span
																class="badge bg-outline-danger d-inline-flex align-items-center"><i
																	class="fas fa-circle fs-6 me-1"></i>Low</span>
															<div>
																<a href="javascript:void(0);" data-bs-toggle="dropdown"
																	aria-expanded="false">
																	<i class="fas fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu notes-menu dropdown-menu-end">
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#edit-note-units"><span><i
																				data-feather="edit"></i></span>Edit</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#delete_modal"><span><i
																				data-feather="trash-2"></i></span>Delete</a>
																	<a href="javascript:void(0);"
																		class="dropdown-item"><span><i
																				data-feather="star"></i></span>Not
																		Important</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#view-note-units"><span><i
																				data-feather="eye"></i></span>View</a>
																</div>
															</div>
														</div>
														<div class="my-3">
															<h5 class="text-truncate mb-1"><a
																	href="javascript:void(0);">Learn calligraphy</a>
															</h5>
															<p class="mb-3 d-flex align-items-center text-dark"><i
																	class="ti ti-calendar me-1"></i>24 Jan 2024</p>
															<p class="text-truncate line-clamb-2 text-wrap">Calligraphy,
																the art of beautiful handwriting. The term may derive
																from the Greek words. </p>
														</div>
														<div
															class="d-flex align-items-center justify-content-between border-top pt-3">
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);"
																	class="avatar avatar-md me-2">
																	<img src="./assets/img/profiles/avatar-03.jpg"
																		alt="Profile" class="img-fluid rounded-circle">
																</a>
																<span class="text-info d-flex align-items-center"><i
																		class="fas fa-square square-rotate fs-10 me-1"></i>Social</span>
															</div>
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);" class="me-2">
																	<span><i
																			class="fas fa-star text-warning"></i></span>
																</a>
																<a href="javascript:void(0);">
																	<span><i class="ti ti-trash text-danger"></i></span>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="card rounded-3 mb-0">
													<div class="card-body p-4">
														<div class="d-flex align-items-center justify-content-between">
															<span
																class="badge bg-outline-warning d-inline-flex align-items-center"><i
																	class="fas fa-circle fs-6 me-1"></i>Medium</span>
															<div>
																<a href="javascript:void(0);" data-bs-toggle="dropdown"
																	aria-expanded="false">
																	<i class="fas fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu notes-menu dropdown-menu-end">
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#edit-note-units"><span><i
																				data-feather="edit"></i></span>Edit</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#delete_modal"><span><i
																				data-feather="trash-2"></i></span>Delete</a>
																	<a href="javascript:void(0);"
																		class="dropdown-item"><span><i
																				data-feather="star"></i></span>Not
																		Important</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#view-note-units"><span><i
																				data-feather="eye"></i></span>View</a>
																</div>
															</div>
														</div>
														<div class="my-3">
															<h5 class="text-truncate mb-1"><a
																	href="javascript:void(0);">Plan a trip to another
																	country</a></h5>
															<p class="mb-3 d-flex align-items-center text-dark"><i
																	class="ti ti-calendar me-1"></i>25 Jan 2024</p>
															<p class="text-truncate line-clamb-2 text-wrap">Space, the
																final frontier. These are the voyages of the Starship
																Enterprise.</p>
														</div>
														<div
															class="d-flex align-items-center justify-content-between border-top pt-3">
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);"
																	class="avatar avatar-md me-2">
																	<img src="./assets/img/profiles/avatar-01.jpg"
																		alt="Profile" class="img-fluid rounded-circle">
																</a>
																<span class="text-info d-flex align-items-center"><i
																		class="fas fa-square square-rotate fs-10 me-1"></i>Personal</span>
															</div>
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);" class="me-2">
																	<span><i
																			class="fas fa-star text-warning"></i></span>
																</a>
																<a href="javascript:void(0);">
																	<span><i class="ti ti-trash text-danger"></i></span>
																</a>
															</div>
														</div>
													</div>
												</div>
												<div class="card rounded-3 mb-0">
													<div class="card-body p-4">
														<div class="d-flex align-items-center justify-content-between">
															<span
																class="badge bg-outline-danger d-inline-flex align-items-center"><i
																	class="fas fa-circle fs-6 me-1"></i>Low</span>
															<div>
																<a href="javascript:void(0);" data-bs-toggle="dropdown"
																	aria-expanded="false">
																	<i class="fas fa-ellipsis-v"></i>
																</a>
																<div class="dropdown-menu notes-menu dropdown-menu-end">
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#edit-note-units"><span><i
																				data-feather="edit"></i></span>Edit</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#delete_modal"><span><i
																				data-feather="trash-2"></i></span>Delete</a>
																	<a href="javascript:void(0);"
																		class="dropdown-item"><span><i
																				data-feather="star"></i></span>Not
																		Important</a>
																	<a href="#" class="dropdown-item"
																		data-bs-toggle="modal"
																		data-bs-target="#view-note-units"><span><i
																				data-feather="eye"></i></span>View</a>
																</div>
															</div>
														</div>
														<div class="my-3">
															<h5 class="text-truncate mb-1"><a
																	href="javascript:void(0);">Improve touch typing</a>
															</h5>
															<p class="mb-3 d-flex align-items-center text-dark"><i
																	class="ti ti-calendar me-1"></i>26 Jan 2024</p>
															<p class="text-truncate line-clamb-2 text-wrap">Well, the
																way they make shows is, they make one show.</p>
														</div>
														<div
															class="d-flex align-items-center justify-content-between border-top pt-3">
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);"
																	class="avatar avatar-md me-2">
																	<img src="./assets/img/profiles/avatar-02.jpg"
																		alt="Profile" class="img-fluid rounded-circle">
																</a>
																<span class="text-success d-flex align-items-center"><i
																		class="fas fa-square square-rotate fs-10 me-1"></i>Work</span>
															</div>
															<div class="d-flex align-items-center">
																<a href="javascript:void(0);" class="me-2">
																	<span><i
																			class="fas fa-star text-warning"></i></span>
																</a>
																<a href="javascript:void(0);">
																	<span><i class="ti ti-trash text-danger"></i></span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-success d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>High</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Backup
															Files EOD</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>20 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Project files should
														be took backup before end of the day.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-05.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-info d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Personal</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-danger d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>Low</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a
															href="javascript:void(0);">Download Server Logs</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>25 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Server log is a text
														document that contains a record of all activity.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-06.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-success d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Work</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-warning d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>Medium</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Team
															meet at Starbucks</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>26 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Meeting all teamets
														at Starbucks for identifying them all.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-07.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-warning d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Social</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-success d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>High</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Create
															a compost pile</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>27 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Compost pile refers
														to fruit and vegetable scraps, used tea, coffee grounds etc..
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-08.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-warning d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Social</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-danger d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>Low</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Take a
															hike at a local park</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>28 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Hiking involves a
														long energetic walk in a natural environment.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-09.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-info d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Personal</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-info d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>medium</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a
															href="javascript:void(0);">Research a topic interested</a>
													</h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>28 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Research a topic
														interested by listen actively and attentively.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-10.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-success d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Work</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
								aria-labelledby="v-pills-messages-tab">
								<div class="row">
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-success d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>High</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Backup
															Files EOD</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>20 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Project files should
														be took backup before end of the day.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-05.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-info d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Personal</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-danger d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>Low</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a
															href="javascript:void(0);">Download Server Logs</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>25 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Server log is a text
														document that contains a record of all activity.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-06.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-success d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Work</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-warning d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>Medium</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Team
															meet at Starbucks</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>26 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Meeting all teamets
														at Starbucks for identifying them all.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-07.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-warning d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Social</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-success d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>High</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Create
															a compost pile</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>27 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Compost pile refers
														to fruit and vegetable scraps, used tea, coffee grounds etc..
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-08.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-warning d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Social</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-danger d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>Low</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Take a
															hike at a local park</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>28 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Hiking involves a
														long energetic walk in a natural environment.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-09.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-info d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Personal</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-info d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>medium</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a
															href="javascript:void(0);">Research a topic interested</a>
													</h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>28 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Research a topic
														interested by listen actively and attentively.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-10.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-success d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Work</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
								aria-labelledby="v-pills-settings-tab">
								<div class="row">
									<div class="col-12 d-flex align-items-center justify-content-end">
										<a href="#" class="btn btn-danger mb-4">
											<span> <i class="ti ti-trash f-20 me-2"></i> </span>
											Restore all
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-success d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>High</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Create
															a compost pile</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>27 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Compost pile refers
														to fruit and vegetable scraps, used tea, coffee grounds etc..
													</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-08.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-warning d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Social</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-danger d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>Low</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a href="javascript:void(0);">Take a
															hike at a local park</a></h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>28 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Hiking involves a
														long energetic walk in a natural environment.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-09.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-info d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Personal</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4 d-flex">
										<div class="card rounded-3 mb-4 flex-fill">
											<div class="card-body p-4">
												<div class="d-flex align-items-center justify-content-between">
													<span
														class="badge bg-outline-info d-inline-flex align-items-center"><i
															class="fas fa-circle fs-6 me-1"></i>medium</span>
													<div>
														<a href="javascript:void(0);" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="fas fa-ellipsis-v"></i>
														</a>
														<div class="dropdown-menu notes-menu dropdown-menu-end">
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#edit-note-units"><span><i
																		data-feather="edit"></i></span>Edit</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#delete_modal"><span><i
																		data-feather="trash-2"></i></span>Delete</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		data-feather="star"></i></span>Not Important</a>
															<a href="#" class="dropdown-item" data-bs-toggle="modal"
																data-bs-target="#view-note-units"><span><i
																		data-feather="eye"></i></span>View</a>
														</div>
													</div>
												</div>
												<div class="my-3">
													<h5 class="text-truncate mb-1"><a
															href="javascript:void(0);">Research a topic interested</a>
													</h5>
													<p class="mb-3 d-flex align-items-center text-dark"><i
															class="ti ti-calendar me-1"></i>28 Jan 2024</p>
													<p class="text-truncate line-clamb-2 text-wrap">Research a topic
														interested by listen actively and attentively.</p>
												</div>
												<div
													class="d-flex align-items-center justify-content-between border-top pt-3">
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="avatar avatar-md me-2">
															<img src="./assets/img/profiles/avatar-10.jpg" alt="Profile"
																class="img-fluid rounded-circle">
														</a>
														<span class="text-success d-flex align-items-center"><i
																class="fas fa-square square-rotate fs-10 me-1"></i>Work</span>
													</div>
													<div class="d-flex align-items-center">
														<a href="javascript:void(0);" class="me-2">
															<span><i class="fas fa-star text-warning"></i></span>
														</a>
														<a href="javascript:void(0);">
															<span><i class="ti ti-trash text-danger"></i></span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row custom-pagination">
							<div class="col-md-12">
								<div class="paginations d-flex justify-content-end">
									<span><i class="fas fa-chevron-left"></i></span>
									<ul class="d-flex align-items-center page-wrap">
										<li>
											<a href="javascript:void(0);" class="active">
												1
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												2
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												3
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												4
											</a>
										</li>
									</ul>
									<span><i class="fas fa-chevron-right"></i></span>
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
		<!-- /Page wrapper -->

		<!-- Add Note -->
		<div class="modal fade" id="add_note">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Notes</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="notes.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Note Title</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Assignee</label>
										<select class="select">
											<option>Choose</option>
											<option>Kathleen</option>
											<option>Gifford</option>
										</select>
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Tag</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Pending,Done">
									</div>
								</div>
								<div class="col-6">
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
								<div class="col-6">
									<div class="input-blocks todo-calendar">
										<label class="form-label">Due Date</label>
										<div class="input-groupicon calender-input">
											<input type="text" class="form-control  datetimepicker" placeholder="dd-mm-yyyy">
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-0 summer-description-box notes-summernote">
										<label class="form-label">Descriptions</label>
										<div class="summernote"></div>
										<small>Maximum 60 Characters</small>
									</div>
								</div>
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
		<!-- /Add Note -->

		<!-- Edit Note -->
		<div class="modal fade" id="edit-note-units">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Notes</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="notes.php">
						<div class="modal-body">
							<div class="row">
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Note Title</label>
										<input type="text" class="form-control" value="Team meet at Starbucks">
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<label class="form-label">Assignee</label>
										<select class="select">
											<option>Choose</option>
											<option selected>Kathleen</option>
											<option>Gifford</option>
										</select>
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Tag</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Pending,Done">
									</div>
								</div>
								<div class="col-6">
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
								<div class="col-6">
									<div class="input-blocks todo-calendar">
										<label class="form-label">Due Date</label>
										<div class="input-groupicon calender-input">
											<input type="text" class="form-control datetimepicker" placeholder="Select"
												value="25-10-2025">
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Select</option>
											<option selected>Active</option>
											<option>Inactive</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="mb-0 summer-description-box notes-summernote">
										<label class="form-label">Descriptions</label>
										<div class="summernote" class="mb-2"></div>
										<small>Maximum 60 Characters</small>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Note -->

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
							<a href="notes.php" class="btn btn-danger">Yes, Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Delete Modal -->

		<!-- View Note -->
		<div class="modal fade" id="view-note-units">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header">
								<div class="d-flex align-items-center">
									<h4 class="modal-title me-3">Notes</h4>
									<p class="text-info">Personal</p>
								</div>
								<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
									aria-label="Close">
									<i class="ti ti-x"></i>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-12">
										<div>
											<h4 class="mb-2">Meet Lisa to discuss project details</h4>
											<p>Hiking is a long, vigorous walk, usually on trails or footpaths in the
												countryside.
												Walking for pleasure developed in Europe during the eighteenth century.
												Religious pilgrimages have existed much longer but they involve walking long
												distances for a spiritual purpose associated with specific religions and
												also
												we achieve inner peace while we hike at a local park.</p>

											<p class="badge bg-outline-danger d-inline-flex align-items-center mb-0"><i
													class="fas fa-circle fs-6 me-1"></i> High</p>
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<a href="#" class="btn btn-danger" data-bs-dismiss="modal">Close</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /View Note -->

    </div>
<!-- end main wrapper-->
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>
<!-- Owl Carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Bootstrap Tagsinput JS -->
<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="assets/js/notes.js"></script>
</body>
</html>