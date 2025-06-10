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
						<h2 class="mb-1">Budgets</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									HR
								</li>
								<li class="breadcrumb-item active" aria-current="page">Budgets</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_budgets" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Budget</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Budgets list -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Budget List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							
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
										<th>Budget Title</th>
										<th>Budget Type</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Total Revenue</th>
										<th>Total Expense</th>
										<th>Tax Amount</th>
										<th>Budget Amount</th>
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
											<h6 class="fw-medium"><a href="javascript:void(0);">Office Supplies</a></h6>
										</td>
										<td>
											Category
                                        </td>
										<td>
											14 Jan 2024
										</td>
										<td>
											13 Nov 2024
										</td>
										<td>
											250000
										</td>
										<td>
											150000
										</td>
										<td>
											10000
										</td>
										<td>
											90000
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_budgets"><i class="ti ti-edit"></i></a>
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
											<h6 class="fw-medium"><a href="javascript:void(0);">Recruitment</a></h6>
										</td>
										<td>
											Category
                                        </td>
										<td>
											21 Jan 2024
										</td>
										<td>
											20 Nov 2024
										</td>
										<td>
											300000
										</td>
										<td>
											200000
										</td>
										<td>
											15000
										</td>
										<td>
											85000
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_budgets"><i class="ti ti-edit"></i></a>
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
											<h6 class="fw-medium"><a href="javascript:void(0);">Tender</a></h6>
										</td>
										<td>
											Project
                                        </td>
										<td>
											10 Feb 2024
										</td>
										<td>
											08 Dec 2024
										</td>
										<td>
											200000
										</td>
										<td>
											170000
										</td>
										<td>
											5000
										</td>
										<td>
											25000
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_budgets"><i class="ti ti-edit"></i></a>
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
											<h6 class="fw-medium"><a href="javascript:void(0);">Salary 2024</a></h6>
										</td>
										<td>
											Category
                                        </td>
										<td>
											18 Feb 2024
										</td>
										<td>
											16 Dec 2024
										</td>
										<td>
											300000
										</td>
										<td>
											200000
										</td>
										<td>
											15000
										</td>
										<td>
											85000
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_budgets"><i class="ti ti-edit"></i></a>
												<a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Budgets list -->

			</div>
			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
				<p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
			</div>
		</div>
		<!-- /Page Wrapper -->

		<!-- Add Budgets -->
		<div class="modal fade" id="add_budgets">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Add Budget</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="budgets.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Budget Title</label>
										<input type="text" class="form-control">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Choose Budget respect type</label>
										<div class="d-flex align-items-center">
											<div class="form-check me-2">
												<input class="form-check-input" type="radio" name="flexRadio" id="budget">
												<label class="form-label" for="budget">
													Project
												</label>
											</div>		
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadio" id="budget1">
												<label class="form-label" for="budget1">
													Category
												</label>
											</div>
										</div>
									</div>	
								</div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date </label>
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
                                        <label class="form-label">End Date </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>   
								<div class="mb-0">
									<label class="form-label">Expected Revenues</label>
								</div>	
								<div class="revenues-content">
									<div class="row align-items-end">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Revenue Title</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="d-flex align-items-center mb-3">
												<div>
													<label class="form-label">Revenue Amount</label>
													<div class="d-flex align-items-center">
														<input type="text" class="form-control">
														<div class="ms-2">
															<a href="javascript:void(0);" class="btn btn-icon add-revenue btn-sm btn-primary rounded-circle"><i class="ti ti-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>		
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Overall Revenue (A)</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="mb-0">
									<label class="form-label">Expected Expenses</label>
								</div>	
								<div class="expenses-content">
									<div class="row align-items-end">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Expenses Title</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="d-flex align-items-center mb-3">
												<div>
													<label class="form-label">Expenses Amount</label>
													<div class="d-flex align-items-center">
														<input type="text" class="form-control">
														<div class="ms-2">
															<a href="javascript:void(0);" class="btn btn-icon add-expenses btn-sm btn-primary rounded-circle"><i class="ti ti-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>		
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Overall Expense (B)</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Expected Profit (C=A-B) </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tax (D) </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>  
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Budget Amount (E=C-D)</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
							<button type="submit" class="btn btn-primary">Add Budget</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Budgets -->

		<!-- Edit Budgets -->
		<div class="modal fade" id="edit_budgets">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Budget</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="budgets.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Budget Title</label>
										<input type="text" class="form-control" value="Office Supplies">
									</div>	
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Choose Budget respect type</label>
										<div class="d-flex align-items-center">
											<div class="form-check me-2">
												<input class="form-check-input" type="radio" name="flexRadio" id="budget3">
												<label class="form-label" for="budget3">
													Project
												</label>
											</div>		
											<div class="form-check">
												<input class="form-check-input" type="radio" name="flexRadio" id="budget2" checked="">
												<label class="form-label" for="budget2">
													Category
												</label>
											</div>
										</div>
									</div>	
								</div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Start Date </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="14 Jan 2024">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">End Date </label>
                                        <div class="input-icon-end position-relative">
                                            <input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="13 Nov 2024">
                                            <span class="input-icon-addon">
                                                <i class="ti ti-calendar text-gray-7"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>   
								<div class="mb-0">
									<label class="form-label">Expected Revenues</label>
								</div>	
								<div class="revenues-content">
									<div class="row align-items-end">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Revenue Title</label>
												<input type="text" class="form-control" value="Office Supplies">
											</div>
										</div>
										<div class="col-md-6">
											<div class="d-flex align-items-center mb-3">
												<div>
													<label class="form-label">Revenue Amount</label>
													<div class="d-flex align-items-center">
														<input type="text" class="form-control" value="250000">
														<div class="ms-2">
															<a href="javascript:void(0);" class="btn btn-icon add-revenue btn-sm btn-primary rounded-circle"><i class="ti ti-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>		
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Overall Revenue (A)</label>
										<input type="text" class="form-control" value="250000">
									</div>
								</div>
								<div class="mb-0">
									<label class="form-label">Expected Expenses</label>
								</div>	
								<div class="expenses-content">
									<div class="row align-items-end">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Expenses Title</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="d-flex align-items-center mb-3">
												<div>
													<label class="form-label">Expenses Amount</label>
													<div class="d-flex align-items-center">
														<input type="text" class="form-control">
														<div class="ms-2">
															<a href="javascript:void(0);" class="btn btn-icon add-expenses btn-sm btn-primary rounded-circle"><i class="ti ti-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>		
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Overall Expense (B)</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Expected Profit (C=A-B) </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Tax (D) </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>  
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Budget Amount (E=C-D)</label>
										<input type="text" class="form-control">
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
		<!-- /Edit Budgets -->

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
							<a href="budgets.php" class="btn btn-danger">Yes, Delete</a>
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
<script src="assets/js/budget.js"></script>
</body>
</html>