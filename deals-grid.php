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
<div id="global-loader">
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
						<h2 class="mb-1">Deals</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									CRM
								</li>
								<li class="breadcrumb-item active" aria-current="page">Deals Grid</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
								<a href="deals.php" class="btn btn-icon btn-sm me-1"><i class="ti ti-list-tree"></i></a>
								<a href="deals-grid.php" class="btn btn-icon btn-sm active bg-primary text-white"><i class="ti ti-layout-grid"></i></a>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_deals" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Deal</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Deals Grid -->
				<div class="card">
					<div class="card-body p-3">
						<div class="d-flex align-items-center justify-content-between">
							<h5>Deals Grid</h5>
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
	
				<div class="d-flex overflow-x-auto align-items-start mb-4">
					<div class="kanban-list-items bg-white">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-medium d-flex align-items-center mb-1"><i class="ti ti-circle-filled fs-8 text-purple me-2"></i>
											New
										</h4>
										<span class="fw-normal text-default">03 Deals - $16,90,000</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i
												class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="ti ti-edit"></i></a>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-purple border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">WR</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">Website Redesign</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$4,50,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												darleeo@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(163) 2459 315
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Newyork, United States
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-20.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Sharon Roy</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>85%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 10 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-purple border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">CB</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">Cloud Backup</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$5,00,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												sheron@example.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(146) 1249 296
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Exeter, United States
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-20.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Darlee Robertson</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>15%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 12 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card mb-0">
									<div class="card-body">
										<div class="d-block">
											<div class="border-purple border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">EM</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">Email Marketing</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$7,40,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												vaughan@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(135) 3489 516
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Phoenix, United States
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-21.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Vaughan Lewis</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>95%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 10 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kanban-list-items bg-white">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-medium d-flex align-items-center mb-1"><i class="ti ti-circle-filled fs-8 text-skyblue me-2"></i>Prospect</h4>
										<span class="fw-normal text-default">30 Leads - $19,94,938</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="ti ti-edit"></i></a>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-skyblue border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">AP</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">App Development</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$3,15,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												jessica@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(158) 3459 596
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Chester, United Kingdom
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-01.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Jessica Louise</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>95%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 10 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-skyblue border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">SL</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">SaaS Licensing</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$6,20,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												rachel@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(154) 6481 075
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Bristol, United Kingdom
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-23.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Rachel Hampton</a>
											</div>
											<span class="badge badge-sm badge-info-transparent">
												<i class="ti ti-progress me-1"></i>15%
											</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 12 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card mb-0">
									<div class="card-body">
										<div class="d-block">
											<div class="border-skyblue border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">MA</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">Mobile App Design</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$5,50,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												dawn@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(163) 6498 256
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Charlotte, United States
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-22.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Dawn Mercha</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>65%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 10 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kanban-list-items bg-white">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-medium d-flex align-items-center mb-1"><i class="ti ti-circle-filled fs-8 text-warning me-2"></i>Proposal</h4>
										<span class="fw-normal text-default">30 Leads - $19,94,938</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i
												class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="ti ti-edit"></i></a>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-warning border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">SS</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">SEO Services</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$8,40,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												jonelle@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(184) 6348 195
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Coventry, United Kingdom
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-24.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Jonelle Curtiss</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>60%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 10 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-warning border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">UI</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">UX/UI Design</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$4,50,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												carol@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(196) 4862 196
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												Manchester, United Kingdom
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-16.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Carol Thomas</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>15%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 12 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kanban-list-items bg-white me-0">
						<div class="card mb-0">
							<div class="card-body">
								<div class="d-flex justify-content-between align-items-center">
									<div>
										<h4 class="fw-medium d-flex align-items-center mb-1"><i class="ti ti-circle-filled fs-8 text-success me-2"></i>Won</h4>
										<span class="fw-normal text-default">30 Leads - $19,94,938</span>
									</div>
									<div class="d-flex align-items-center">
										<div class="action-icon d-inline-flex">
											<a href="javascript:void(0);"><i
												class="ti ti-circle-plus"></i></a>
											<a href="#" class="" data-bs-toggle="modal" data-bs-target="#edit_deals"><i class="ti ti-edit"></i></a>
											<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kanban-drag-wrap pt-4">
							<div>
								<div class="card kanban-card">
									<div class="card-body">
										<div class="d-block">
											<div class="border-success border border-2 mb-3"></div>
											<div class="d-flex align-items-center mb-3">
												<a href="deals-details.php"
													class="avatar avatar-lg bg-gray flex-shrink-0 me-2"><span
														class="avatar-title text-dark">CM</span></a>
												<h6 class="fw-medium"><a href="deals-details.php">Cloud Migration</a></h6>
											</div>
										</div>
										<div class="mb-3 d-flex flex-column">
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-currency-dollar text-dark me-2"></i>
												$2,45,000
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-mail text-dark me-2"></i>
												jonathan@gmail.com
											</p>
											<p class="text-default d-inline-flex align-items-center mb-2">
												<i class="ti ti-phone text-dark me-2"></i>
												(163) 2459 315
											</p>
											<p class="text-default d-inline-flex align-items-center">
												<i class="ti ti-map-pin-2 text-dark me-2"></i>
												London, United Kingdom
											</p>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<a href="javascript:void(0);" class="avatar avatar-md avatar-rounded flex-shrink-0 me-2"><img src="assets/img/profiles/avatar-10.jpg" alt="image"></a>
												<a href="javascript:void(0);" class="text-dark">Jonathan Smith</a>
											</div>
											<span class="badge badge-sm badge-info-transparent"><i
													class="ti ti-progress me-1"></i>85%</span>
										</div>
										<div
											class="d-flex align-items-center justify-content-between border-top pt-3 mt-3">
											<span class="text-dark"><i class="ti ti-calendar-due text-gray-5"></i> 10 Jan 2024</span>
											<div class="d-flex  align-items-center">
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-phone-check"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center me-2"><i class="ti ti-message-circle-2"></i></a>
												<a href="#"	class="d-flex align-items-center justify-content-center"><i	class="ti ti-color-swatch"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>						
				<!-- /Deals Grid -->
			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
			
		</div>
		<!-- /Page Wrapper -->

<!-- Add Deals -->
<div class="modal fade" id="add_deals">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Deals</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="deals-grid.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Deal Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="form-label">Pipeline <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-target="#add_pipeline" data-bs-toggle="modal"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<select class="select">
									<option>Select</option>
									<option>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Open</option>
									<option>Won</option>
									<option>Lost</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Deal Value  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Currency<span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>USD</option>
									<option>Euro</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Period <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Period Value  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Contact <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Project <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Office Management App</option>
									<option>Clinic Management </option>
									<option>Educational Platform</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Due Date <span class="text-danger"> *</span> </label>
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
								<label class="form-label">Expected Closing  Date <span class="text-danger"> *</span> </label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>	
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Assignee <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Tags  <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab,Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Followup Date   <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Source  <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Phone Calls</option>
									<option>Social Media</option>
									<option>Refferal Sites</option>
									<option>Web Analytics</option>
									<option>Previous Purchase</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Priority   <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>High</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Description    <span class="text-danger"> *</span></label>
								<textarea class="form-control"></textarea>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Add Deal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Deals -->

<!-- Edit Deals -->
<div class="modal fade" id="edit_deals">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Edit Deals</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="deals-grid.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Deal Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-6">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="form-label">Pipeline <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-target="#add_pipeline" data-bs-toggle="modal"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<select class="select">
									<option>Select</option>
									<option selected>Sales</option>
									<option>Marketing</option>
									<option>Calls</option>
								</select>
							</div>		
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Status <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>Open</option>
									<option>Won</option>
									<option>Lost</option>
								</select>
							</div>									
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Deal Value  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Currency<span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>Dollar</option>
									<option>Euro</option>
								</select>
							</div>									
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Period <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-4">
							<div class="mb-3">
								<label class="form-label">Period Value  <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Contact <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Project * <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option>Office Management App</option>
									<option selected>Clinic Management </option>
									<option>Educational Platform</option>
								</select>
							</div>									
						</div>
						<div class="col-md-6">
							<div class="mb-3">
								<label class="form-label">Due Date <span class="text-danger"> *</span> </label>
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
								<label class="form-label">Expected Closing  Date <span class="text-danger"> *</span> </label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>	
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Assignee <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Vaughan Lewis">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Tags  <span class="text-danger"> *</span></label>
								<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="Collab,Rated">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Followup Date   <span class="text-danger"> *</span></label>
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-calendar text-gray-7"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Source  <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>Phone Calls</option>
									<option>Social Media</option>
									<option>Refferal Sites</option>
									<option>Web Analytics</option>
									<option>Previous Purchase</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3 ">
								<label class="form-label">Priority   <span class="text-danger"> *</span></label>
								<select class="select">
									<option>Select</option>
									<option selected>High</option>
									<option>Low</option>
									<option>Medium</option>
								</select>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3 ">
								<label class="form-label">Description    <span class="text-danger"> *</span></label>
								<textarea class="form-control"></textarea>
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
<!-- /Edit Deals -->
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
					<a href="deals.php" class="btn btn-danger">Yes, Delete</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /Delete Modal -->

 <!-- Add Pipeline -->
<div class="modal fade" id="add_pipeline">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Pipeline</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="pipeline.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Pipeline Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>									
						</div>
						<div class="col-md-12">
							<div class="input-block mb-3">
								<div class="d-flex justify-content-between align-items-center">
									<label class="form-label">Pipeline Stages   <span class="text-danger"> *</span></label>
									<a href="#" class="add-new text-primary" data-bs-toggle="modal" data-bs-target="#add_stage"><i class="ti ti-plus text-primary me-1"></i>Add New</a>
								</div>
								<div class="p-3 border border-gray br-5 mb-2">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Inpipline</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
								<div class="p-3 border border-gray br-5 mb-2">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Follow Up</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
								<div class="p-3 border border-gray br-5">
									<div class="d-flex align-items-center justify-content-between">
										<div class="d-flex align-items-center">
											<span class="me-2"><i class="ti ti-grip-vertical"></i></span>
											<h6 class="fs-14 fw-normal">Schedule Service</h6>
										</div>
										<div class="d-flex align-items-center">
											<a href="#" class="text-default"><span class="me-2"><i class="ti ti-edit"></i></span></a>
											<a href="#"  class="text-default"><span><i class="ti ti-trash"></i></span></a>
										</div>
									</div>
								</div>
							</div>									
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Access</label>
								<div class="d-flex  access-item nav">
									<div class="d-flex align-items-center">
										<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#all">
											<input type="radio" class="status-radio me-2" id="all" name="status" checked >
											<label for="all">All</label>
										</div>
										<div class="radio-btn d-flex align-items-center " data-bs-toggle="tab" data-bs-target="#select-person">
											<input type="radio" class="status-radio me-2" id="select" name="status">
											<label for="select">Select Person</label>
										</div>
									</div>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade" id="select-person">
										<div class="access-wrapper">	
											<div class="p-3 border border-gray br-5 mb-2">
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center file-name-icon">
														<a href="#" class="avatar avatar-md border avatar-rounded">
															<img src="assets/img/profiles/avatar-20.jpg" class="img-fluid" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<a href="#" class="text-danger">Remove</a>
													</div>
												</div>
											</div>
											<div class="p-3 border border-gray br-5 mb-2">
												<div class="d-flex align-items-center justify-content-between">
													<div class="d-flex align-items-center file-name-icon">
														<a href="#" class="avatar avatar-md border avatar-rounded">
															<img src="assets/img/profiles/avatar-21.jpg" class="img-fluid" alt="img">
														</a>
														<div class="ms-2">
															<h6 class="fw-medium"><a href="#">Sharon Roy</a></h6>
														</div>
													</div>
													<div class="d-flex align-items-center">
														<a href="#" class="text-danger">Remove</a>
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
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary" >Add Pipeline</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add Pipeline -->

<!-- Add New Stage -->
<div class="modal fade" id="add_stage">
	<div class="modal-dialog modal-dialog-centered modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Add New Stage</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<form action="pipeline.php">
				<div class="modal-body pb-0">
					<div class="row">
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Stage Name <span class="text-danger"> *</span></label>
								<input type="text" class="form-control">
							</div>	
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
					<button type="submit" class="btn btn-primary">Add Stage</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- /Add New Stage -->

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