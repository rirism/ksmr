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
						<h2 class="mb-1">Estimates</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Estimates</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						
                        <div class="mb-2">
							<a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_estimate"><i class="ti ti-circle-plus me-2"></i>Add Estimates</a>
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
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Estimates List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Select Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Accepted</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">sent</a>
									</li>
                                    <li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Expired</a>
									</li>
                                    <li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Declined</a>
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
										<th>Client Name</th>
										<th>Company Name</th>
										<th>Estimate Date</th>
										<th>Expiry Date</th>
                                        <th>Amount</th>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-09.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Michael Walker</a></h6>
                                                    <span class="d-block mt-1">CEO</span>
												</div>
											</div>
										</td>
										<td>BrightWave Innovations</td>
										<td>14 Jan 2024</td>
										<td>15 Jan 2024</td>
                                        <td>$3000</td>
                                        <td><span class="badge badge-success">Accepted</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-40.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Sophie Headrick</a></h6>
                                                    <span class="d-block mt-1">Manager</span>
												</div>
											</div>
										</td>
										<td>Stellar Dynamics</td>
										<td>21 Jan 2024</td>
										<td>25 Jan 2024</td>
                                        <td>$2500</td>
                                        <td><span class="badge badge-soft-purple">Sent</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-41.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Cameron Drake</a></h6>
                                                    <span class="d-block mt-1">Director</span>
												</div>
											</div>
										</td>
										<td>Quantum Nexus</td>
										<td>20 Feb 2024</td>
										<td>22 Feb 2024</td>
                                        <td>$2800</td>
                                        <td><span class="badge badge-soft-warning">Expired</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-42.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Doris Crowley</a></h6>
                                                    <span class="d-block mt-1">Consultant</span>
												</div>
											</div>
										</td>
										<td>EcoVision Enterprises</td>
										<td>15 Mar 2024</td>
										<td>17 Mar 2024</td>
                                        <td>$3300</td>
                                        <td><span class="badge badge-soft-success">Accepted</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-44.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Thomas Bordelon</a></h6>
                                                    <span class="d-block mt-1">Manager</span>
												</div>
											</div>
										</td>
										<td>Aurora Technologies</td>
										<td>12 Apr 2024</td>
										<td>16 Apr 2024</td>
                                        <td>$3600</td>
                                        <td><span class="badge badge-soft-danger">Declined</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-45.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Kathleen Gutierrez</a></h6>
                                                    <span class="d-block mt-1">Director</span>
												</div>
											</div>
										</td>
										<td>BlueSky Ventures</td>
										<td>20 May 2024</td>
										<td>21 May 2024</td>
                                        <td>$2000</td>
                                        <td><span class="badge badge-soft-purple">sent</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-46.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Bruce Wright</a></h6>
                                                    <span class="d-block mt-1">CEO</span>
												</div>
											</div>
										</td>
										<td>TerraFusion Energy</td>
										<td>06 Jul 2024</td>
										<td>06 Jul 2024</td>
                                        <td>$3400</td>
                                        <td><span class="badge badge-soft-warning">Expired</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-47.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Estelle Morgan</a></h6>
                                                    <span class="d-block mt-1">Manager</span>
												</div>
											</div>
										</td>
										<td>UrbanPulse Design</td>
										<td>02 Sep 2024</td>
										<td>04 Sep 2024</td>
                                        <td>$4000</td>
                                        <td><span class="badge badge-soft-danger">Declined</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-48.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Stephen Dias</a></h6>
                                                    <span class="d-block mt-1">CEO</span>
												</div>
											</div>
										</td>
										<td>Nimbus Networks</td>
										<td>15 Nov 2024</td>
										<td>15 Nov 2024</td>
                                        <td>$4500</td>
                                        <td><span class="badge badge-soft-success">Accepted</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
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
											<div class="d-flex align-items-center file-name-icon">
												<a href="#" class="avatar avatar-md avatar-rounded">
													<img src="assets/img/users/user-43.jpg" class="img-fluid" alt="img">
												</a>
												<div class="ms-2">
													<h6 class="fw-medium"><a href="#">Angela Thomas</a></h6>
                                                    <span class="d-block mt-1">Consultant</span>
												</div>
											</div>
										</td>
										<td>Epicurean Delights</td>
										<td>10 Dec 2024</td>
										<td>11 Dec 2024</td>
                                        <td>$3800</td>
                                        <td><span class="badge badge-soft-purple">sent</span></td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_estimate"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
                                    </tr>
                                   	
                                   	
								</tbody>
							</table>
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

		 <!-- Add Estimate  -->
		 <div class="modal fade" id="add_estimate">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add New Estimate</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="estimates.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Client <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>Michael Walker</option>
											<option>Sophie Headrick</option>
											<option>Cameron Drake</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Project <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>Project Management</option>
											<option>Office Management</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Email <span class="text-danger"> *</span></label>
										<input type="email" class="form-control">
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Tax <span class="text-danger"> *</span></label>
										<select class="select">
											<option>Select</option>
											<option>VAT</option>
											<option>GST</option>
											<option>No Tax</option>
										</select>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Client Address</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Biling Address</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>									
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Estimate Date</label>
										<div class="input-icon position-relative w-100 me-2">
											<span class="input-icon-addon">
												<i class="ti ti-calendar"></i>
											</span>
											<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Expiry Date</label>
										<div class="input-icon position-relative w-100 me-2">
											<span class="input-icon-addon">
												<i class="ti ti-calendar"></i>
											</span>
											<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
										</div>
									</div>
								</div>
							</div>
							<div class="mb-3">
								<h4 class="mb-2">Add Items</h4>
								<div class="border rounded p-3 mb-3">
									<div class="add-estimate-info">									
									<div class="row">
										<div class="col-md-2">
											<div class="mb-3">
												<label class="form-label">Item</label>
												<input type="text" class="form-control">
											</div>
										</div>

										<div class="col-md-4">
											<div class="mb-3">
												<label class="form-label">Description</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-2">
											<div class="mb-3">
												<label class="form-label">Unit Cost</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-2">
											<div class="mb-3">
												<label class="form-label">Qty</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-2">
											<div class="mb-3">
												<label class="form-label">Amount</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									</div>
									<a href="javascript:void(0);" class="text-primary add-more-estimate fw-medium d-flex align-items-center mb-2"><i class="ti ti-plus me-2"></i>Add New Item</a>
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Total </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Tax </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Discount(%) </label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Grand Total </label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Other Information</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>									
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Estimate</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Estimate -->

		<!-- Add Estimate  -->
		<div class="modal fade" id="edit_estimate">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Edit Estimate</h4>
					<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
						<i class="ti ti-x"></i>
					</button>
				</div>
				<form action="estimates.php">
					<div class="modal-body pb-0">
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Client <span class="text-danger"> *</span></label>
									<select class="select">
										<option>Select</option>
										<option selected>Michael Walker</option>
										<option>Sophie Headrick</option>
										<option>Cameron Drake</option>
									</select>
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Project <span class="text-danger"> *</span></label>
									<select class="select">
										<option>Select</option>
										<option selected>Project Management</option>
										<option>Office Management</option>
									</select>
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Email <span class="text-danger"> *</span></label>
									<input type="email" class="form-control" value="michaelwalker@example.com">
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Tax <span class="text-danger"> *</span></label>
									<select class="select">
										<option>Select</option>
										<option selected>VAT</option>
										<option>GST</option>
										<option>No Tax</option>
									</select>
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Client Address</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Biling Address</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>									
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Estimate Date</label>
									<div class="input-icon position-relative w-100 me-2">
										<span class="input-icon-addon">
											<i class="ti ti-calendar"></i>
										</span>
										<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Expiry Date</label>
									<div class="input-icon position-relative w-100 me-2">
										<span class="input-icon-addon">
											<i class="ti ti-calendar"></i>
										</span>
										<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<h4 class="mb-2">Add Items</h4>
							<div class="border rounded p-3 mb-3">
								<div class="add-estimate-info">									
								<div class="row">
									<div class="col-md-2">
										<div class="mb-3">
											<label class="form-label">Item</label>
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label">Description</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-2">
										<div class="mb-3">
											<label class="form-label">Unit Cost</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-2">
										<div class="mb-3">
											<label class="form-label">Qty</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-2">
										<div class="mb-3">
											<label class="form-label">Amount</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								</div>
								<a href="javascript:void(0);" class="text-primary add-more-estimate fw-medium d-flex align-items-center mb-2"><i class="ti ti-plus me-2"></i>Add New Item</a>
								<div class="row">
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Total </label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Tax </label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Discount(%) </label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-6">
										<div class="mb-3">
											<label class="form-label">Grand Total </label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="mb-3">
								<label class="form-label">Other Information</label>
								<textarea class="form-control" rows="3"></textarea>
							</div>									
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Add Estimate</button>
					</div>
				</form>
			</div>
		</div>
		</div>
		<!-- /Add Estimate -->

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
							<a href="estimates.php" class="btn btn-danger">Yes, Delete</a>
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
<script src="assets/js/estimates.js"></script>
</body>
</html>