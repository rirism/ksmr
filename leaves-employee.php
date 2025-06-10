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
						<h2 class="mb-1">Leaves</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Employee
								</li>
								<li class="breadcrumb-item active" aria-current="page">Leaves</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_leaves" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Leave</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Leaves Info -->
				 <div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="card bg-black-le">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">									
                                    <div class="text-start">
                                        <p class="mb-1">Annual Leaves</p>
                                        <h4>05</h4>                                        
                                    </div>         
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <span class="avatar avatar-md d-flex">
                                                <i class="ti ti-calendar-event fs-32"></i>
                                            </span>
                                        </div>
                                    </div>                          
								</div>
                                <span class="badge bg-secondary-transparent">Remaining Leaves : 07</span>                                
							</div>
						</div>
					</div>									
					<div class="col-xl-3 col-md-6">
						<div class="card bg-blue-le">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">									
                                    <div class="text-start">
                                        <p class="mb-1">Medical Leaves</p>
                                        <h4>11</h4>                                        
                                    </div>         
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <span class="avatar avatar-md d-flex">
                                                <i class="ti ti-vaccine fs-32"></i>
                                            </span>
                                        </div>
                                    </div>                          
								</div>
                                <span class="badge bg-info-transparent">Remaining Leaves : 01</span>                                
							</div>
						</div>
					</div>
                    <div class="col-xl-3 col-md-6">
						<div class="card bg-purple-le">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">									
                                    <div class="text-start">
                                        <p class="mb-1">Casual Leaves</p>
                                        <h4>02</h4>                                        
                                    </div>         
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <span class="avatar avatar-md d-flex">
                                                <i class="ti ti-hexagon-letter-c fs-32"></i>
                                            </span>
                                        </div>
                                    </div>                          
								</div>
                                <span class="badge bg-transparent-purple">Remaining Leaves : 10</span>                                
							</div>
						</div>
					</div>								
                    <div class="col-xl-3 col-md-6">
						<div class="card bg-pink-le">
							<div class="card-body">
								<div class="d-flex align-items-center justify-content-between">									
                                    <div class="text-start">
                                        <p class="mb-1">Other Leaves</p>
                                        <h4>07</h4>                                        
                                    </div>         
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-2">
                                            <span class="avatar avatar-md d-flex">
                                                <i class="ti ti-hexagonal-prism-plus fs-32"></i>
                                            </span>
                                        </div>
                                    </div>                          
								</div>
                                <span class="badge bg-pink-transparent">Remaining Leaves : 05</span>                                
							</div>
						</div>
					</div>								
				 </div>
				 <!-- /Leaves Info -->

				<!-- Leaves list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">						
                        <div class="d-flex">
                            <h5 class="me-2">Leave List</h5>
                            <span class="badge bg-primary-transparent me-2">Total Leaves : 48</span>
                            <span class="badge bg-secondary-transparent">Total Remaining Leaves : 23</span>
                        </div>
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
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Leave Type
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Medical Leave</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Casual Leave</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Annual Leave</a>
									</li>
								</ul>
							</div>
                            <div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Approved By
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Doglas Martini</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Warren Morales</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Doglas Martini</a>
									</li>
								</ul>
							</div>
                            <div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Select Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
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
					<div class="card-body p-0">
						<div class="custom-datatable-filter table-responsive">
							<table class="table datatable">
								<thead class="thead-light">
									<tr>
										<th class="no-sort">
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox" id="select-all">
											</div>
										</th>
										<th>Leave Type</th>
										<th>From</th>
										<th>Approved By</th>
										<th>To</th>
										<th>No of Days</th>
										<th>Status</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Medical Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and
                                                feeling unwell.">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											14 Jan 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>									
										<td>
											15 Jan 2024
										</td>
										<td>
											2 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>									
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Annual Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											21 Jan 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>									
										<td>
											25 Jan 2024
										</td>
										<td>
											5 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>									
									<tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Medical Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											20 Jan 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-58.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Warren Morales</a></h6>
													<span class="fs-12 fw-normal ">Admin</span>
												</div>
											</div>
										</td>									
										<td>
											22 Feb 2024
										</td>
										<td>
											3 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>	
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Annual Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											15 Mar 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>									
										<td>
											17 Mar 2024
										</td>
										<td>
											3 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Casual Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											12 Apr 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>									
										<td>
											16 Apr 2024
										</td>
										<td>
											5 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> Declined
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>								
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Medical Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											20 May 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-58.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Warren Morales</a></h6>
													<span class="fs-12 fw-normal ">Admin</span>
												</div>
											</div>
										</td>									
										<td>
											21 Mar 2024
										</td>
										<td>
											2 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span> Declined
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>								
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Casual Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											06 Jul 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>									
										<td>
											06 Jul 2024
										</td>
										<td>
											1 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span> Approved
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>								
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Medical Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											02 Sep 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>									
										<td>
											04 Sep 2024
										</td>
										<td>
											3 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span> New
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>								
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Annual Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											15 Nov 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-58.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Warren Morales</a></h6>
													<span class="fs-12 fw-normal ">Admin</span>
												</div>
											</div>
										</td>									
										<td>
											15 Nov 2024
										</td>
										<td>
											1 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span> New
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
                                    <tr>
										<td>
											<div class="form-check form-check-md">
												<input class="form-check-input" type="checkbox">
											</div>
										</td>
                                        <td>
                                            <div class="d-flex align-items-center">
												<p class="fs-14 fw-medium d-flex align-items-center mb-0">Casual Leave</p>
												<a href="#" class="ms-2" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="I am currently experiencing a fever and feeling unwell. ">
                                                    <i class="ti ti-info-circle text-info"></i>
                                                </a>
											</div>
                                        </td>
                                        <td>
											10 Dec 2024
										</td>
										<td>
											<div class="d-flex align-items-center file-name-icon">
												<a href="javascript:void(0);" class="avatar avatar-md border avatar-rounded">
													<img src="assets/img/users/user-34.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="javascript:void(0);">Doglas Martini</a></h6>
													<span class="fs-12 fw-normal ">Manager</span>
												</div>
											</div>
										</td>									
										<td>
											11 Dec 2024
										</td>
										<td>
											2 Days
										</td>
                                        <td>
                                            <div class="dropdown">
												<a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
													<span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span> New
												</a>
												<ul class="dropdown-menu  dropdown-menu-end p-3">
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-success d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-success"></i></span>Approved</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-danger d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-danger"></i></span>Declined</a>
													</li>
													<li>
														<a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex justify-content-start align-items-center"><span class="rounded-circle bg-transparent-purple d-flex justify-content-center align-items-center me-2"><i class="ti ti-point-filled text-purple"></i></span>New</a>
													</li>
												</ul>
											</div>
                                        </td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_leaves"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>									
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Leaves list -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Leaves -->
		<div class="modal fade" id="add_leaves">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Leave</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="leaves.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Employee Name</label>
										<select class="select">
											<option>Select</option>
											<option>Anthony Lewis</option>
											<option>Brian Villalobos</option>
											<option>Harvey Smith</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Leave Type</label>
										<select class="select">
											<option>Select</option>
											<option>Medical Leave</option>
											<option>Casual Leave</option>
											<option>Annual Leave</option>
										</select>
									</div>	
								</div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">From </label>
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
										<label class="form-label">To </label>
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
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" disabled>
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6">
									<div class="mb-3">
										<select class="select">
											<option>Select</option>
											<option>Full DAy</option>
											<option>First Half</option>
											<option>Second Half</option>
										</select>
									</div>
								</div>   
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">No of Days</label>
										<input type="text" class="form-control" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Remaining Days</label>
										<input type="text" class="form-control" value="8" disabled>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Leave</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Leaves -->

		<!-- Edit Leaves -->
		<div class="modal fade" id="edit_leaves">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Leave</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="leaves.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Employee Name</label>
										<select class="select">
											<option selected>Anthony Lewis</option>
											<option>Brian Villalobos</option>
											<option>Harvey Smith</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Leave Type</label>
										<select class="select">
											<option selected>Medical Leave</option>
											<option>Casual Leave</option>
											<option>Annual Leave</option>
										</select>
									</div>	
								</div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">From </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" value="14 Jan 24" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">To </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" value="15/01/24" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6">
                                    <div class="mb-3">
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" value="15/01/24" disabled>
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
								<div class="col-md-6">
									<div class="mb-3">
										<select class="select">
											<option>Select</option>
											<option>Full DAy</option>
											<option selected>First Half</option>
											<option>Second Half</option>
										</select>
									</div>
								</div>   
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">No of Days</label>
										<input type="text" class="form-control" value="01" disabled>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Remaining Days</label>
										<input type="text" class="form-control" value="07" disabled>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="d-flex align-items-center mb-3">
										<div class="form-check me-2">
											<input class="form-check-input" type="radio" name="leave1" value="option4" id="leave6">
											<label class="form-check-label" for="leave6">
											  Full Day
											</label>
										  </div>
										  <div class="form-check me-2">
											<input class="form-check-input" type="radio" name="leave1" value="option5" id="leave5">
											<label class="form-check-label" for="leave5">
											  First Half
											</label>
										  </div>
										  <div class="form-check me-2">
											<input class="form-check-input" type="radio" name="leave1" value="option6" id="leave4">
											<label class="form-check-label" for="leave4">
											  Second Half
											</label>
										  </div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Reason</label>
										<textarea class="form-control" rows="3"> Going to Hospital </textarea>
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
		<!-- /Edit Leaves -->



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
							<a href="leaves-employee.php" class="btn btn-danger">Yes, Delete</a>
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