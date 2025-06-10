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
						<h2 class="mb-1">Blog Tags</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Content
								</li>
								<li class="breadcrumb-item active" aria-current="page">Blog Tags</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                        <div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_blog-tags" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Tag</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

			

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Blog Tags List</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="me-3">
								<div class="input-icon-end position-relative">
									<input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
									<span class="input-icon-addon">
										<i class="ti ti-chevron-down"></i>
									</span>
								</div>
							</div>
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sort By : Last 7 Days
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">15 Jan 2024</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">25 Jan 2024</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">22 Feb 2024</a>
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
										<th>Tag</th>
										<th>Created Date</th>
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
                                        <td class="text-dark">hrms</td>
										<td>12 Sep 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">recruitment</td>
										<td>24 Oct 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">hrtech</td>
										<td>18 Feb 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">hrmsfuture</td>
										<td>17 Oct 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">datasecurity</td>
										<td>20 Jul 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">hrsoftware</td>
										<td>10 Apr 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">htrrends</td>
										<td>29 Aug 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">hrmsbenefits</td>
										<td>22 Feb 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">hrmstools</td>
										<td>03 Nov 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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
                                        <td class="text-dark">hrtechinnovation</td>
										<td>17 Dec 2024</td>
                                        <td>
											<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_blog-tags"><i class="ti ti-edit"></i></a>
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

        <!-- Add Tag -->
        <div class="modal fade" id="add_blog-tags">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Blog Tag</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="blog-tags.php">
                        <div class="modal-body pb-0">
                            <div class="row">                               
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Tag</label>
                                        <input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="HRMS,Recruitment,HRTech">
                                    </div>									
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Active</option>
                                            <option>Inactive</option>                                           
                                        </select>
                                    </div>									
                                </div> 
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white border me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Tag</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    	<!-- /Add Tag -->

		<!-- Edit Tag -->
		<div class="modal fade" id="edit_blog-tags">
			<div class="modal-dialog modal-dialog-centered modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Blog Tag</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="blog-tags.php">
						<div class="modal-body pb-0">
							<div class="row">							
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Tag</label>
										<input class="input-tags form-control" placeholder="Add new" type="text" data-role="tagsinput"  name="Label" value="HRMS,Recruitment,HRTech">
									</div>									
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Status</label>
										<select class="select">
                                            <option selected>Active</option>
                                            <option>Inactive</option>   										
										</select>
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
		<!-- /Edit Tag -->

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
							<a href="blog-tags.php" class="btn btn-danger">Yes, Delete</a>
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