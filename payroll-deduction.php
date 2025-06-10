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
						<h2 class="mb-1">Payroll Items</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Payroll Items</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="mb-2">
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
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
					
					
				</div>
				<div class="d-flex justify-content-between my-4">
					<div class="payroll-btns">
						<a href="payroll.php" class="btn btn-white  border me-2">Additions</a>
						<a href="payroll-overtime.php" class="btn btn-white  border me-2">Overtime</a>
						<a href="payroll-deduction.php" class="btn btn-white active border">Deductions</a>
					</div>
					<div class="mb-2">
						<a href="#" data-bs-toggle="modal" data-bs-target="#add_deduction" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Deduction</a>
					</div>
				</div>
				
				<!-- /Breadcrumb -->

				<!-- Policy list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Deductions List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							
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
										<th>Name</th>
										<th>Default / Unit Amount</th>
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
											<h6 class="fs-14 fw-medium text-gray-9">Absent amount</h6>
										</td>
										<td>$12</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
											<h6 class="fs-14 fw-medium text-gray-9">Advance</h6>
										</td>
										<td>$7</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
											<h6 class="fs-14 fw-medium text-gray-9">Unpaid leave</h6>
										</td>
										<td>$3</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="ti ti-edit"></i></a>
												<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Policylist list -->

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Payroll Deduction -->
		<div class="modal fade" id="add_deduction">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Deduction</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="payroll-deduction.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Name</label>
										<input type="text" class="form-control">
									</div>	
								</div>
								<div class="row align-items-end">
									<div class="col-md-8">
										<div class="mb-3">
											<label class="form-label">Amount</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label mb-0 fs-12 fw-normal">Unit Calculation</label>
											<div class="form-check form-switch d-flex">
												<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault5">
											</div>
										</div>	
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<div class="d-flex">
												<div class="form-check me-3">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6" checked>
													<label class="form-check-label fs-14 fw-medium text-dark " for="flexRadioDefault2">
														No Assignee
													</label>
												</div>
												<div class="form-check me-3">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault7">
													<label class="form-check-label fs-14 fw-medium text-dark " for="flexRadioDefault3">
														All Employees
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault8">
													<label class="form-check-label fs-14 fw-medium text-dark " for="flexRadioDefault4">
														Select Employee
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Deduction</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Payroll Deduction -->

		<!-- Edit  Payroll Deduction -->
		<div class="modal fade" id="edit_deduction">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Deduction</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="payroll-deduction.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Name</label>
										<input type="text" class="form-control" value="Absent amount">
									</div>	
								</div>
								<div class="row align-items-end">
									<div class="col-md-8">
										<div class="mb-3">
											<label class="form-label">Amount</label>			
											<input type="text" class="form-control" value="$12">
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label class="form-label mb-0 fs-12 fw-normal">Unit Calculation</label>
											<div class="form-check form-switch d-flex">
												<input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
											</div>
										</div>	
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<div class="d-flex">
												<div class="form-check me-3">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
													<label class="form-check-label fs-14 fw-medium text-dark " for="flexRadioDefault2">
														No Assignee
													</label>
												</div>
												<div class="form-check me-3">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
													<label class="form-check-label fs-14 fw-medium text-dark " for="flexRadioDefault3">
														All Employees
													</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" >
													<label class="form-check-label fs-14 fw-medium text-dark " for="flexRadioDefault4">
														Select Employee
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Save Changes</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Payroll Deduction -->

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
							<a href="payroll-deduction.php" class="btn btn-danger">Yes, Delete</a>
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