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
						<h2 class="mb-1">Interview Questions</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Administration
								</li>
								<li class="breadcrumb-item active" aria-current="page">Interview Questions</li>
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
                        <div class="me-2 mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_category" class="btn btn-dark d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add New Category</a>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_question" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add New Question</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Interview Questions List</h5>
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
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Department
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Advanced</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Basic</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Enterprise</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Job Type
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Advanced</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Basic</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Enterprise</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Requested</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Rejected</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Approved</a>
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
										<th>Question</th>
										<th>Option A</th>
										<th>Option B</th>
										<th>Option C</th>
										<th>Option D</th>
										<th>Correct Answer</th>
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
                                            <h6 class="fw-medium"><a href="#">What is the time complexity of a binary search algorithm?</a></h6>
                                        </td>
                                        <td>O(n)</td>								
                                        <td>O(n^2)</td>								
                                        <td>O(log n)</td>								
                                        <td>O(1)</td>								
                                        <td>C</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_question" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Which data structure uses FIFO  principle?</a></h6>
                                        </td>
                                        <td>Stack</td>								
                                        <td>Queue</td>								
                                        <td>Array</td>								
                                        <td>HashMap</td>								
                                        <td>B</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_question" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Which version control system is most commonly used?</a></h6>
                                        </td>
                                        <td>SVN</td>								
                                        <td>Mercurial</td>								
                                        <td>Git</td>								
                                        <td>Perforce</td>								
                                        <td>C</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_question" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Which of the following is a NoSQL database?</a></h6>
                                        </td>
                                        <td>MySQL</td>								
                                        <td>PostgreSQL</td>								
                                        <td>MongoDB</td>								
                                        <td>SQLite</td>								
                                        <td>C</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_question" class="me-2"><i class="ti ti-edit"></i></a>
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
                                            <h6 class="fw-medium"><a href="#">Which HTTP method is used to update a resource?</a></h6>
                                        </td>
                                        <td>GET</td>								
                                        <td>POST</td>								
                                        <td>PUT</td>								
                                        <td>DELETE</td>								
                                        <td>C</td>								
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" data-bs-toggle="modal" data-bs-target="#edit_question" class="me-2"><i class="ti ti-edit"></i></a>
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

        <!-- Add Category -->
        <div class="modal fade" id="add_category">
            <div class="modal-dialog modal-dialog-centered modal-mg w-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="interview-questions.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Category</label>
										<input type="text" class="form-control">
									</div>									
								</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Category -->

        <!-- Add Question -->
        <div class="modal fade" id="add_question">
            <div class="modal-dialog modal-dialog-centered modal-lg w-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Job</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="interview-questions.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Show</option>
                                            <option>Hide</option>
                                        </select>
									</div>									
								</div>
                                <div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Department</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Show</option>
                                            <option>Hide</option>
                                        </select>
									</div>									
								</div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Question</label>
                                        <textarea rows="3" class="form-control"></textarea>
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option A</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option B</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option C</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option D</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Correct Answer</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                        </select>
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Code Snippets</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Answer Explanation</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Add Video Link</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Add Image </label>
                                        <div class="custom-file-container__custom-file">
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input form-control">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </div>
                                    </div>											
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Job</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Question -->

        <!-- Edit Question -->
        <div class="modal fade" id="edit_question">
            <div class="modal-dialog modal-dialog-centered modal-lg w-100">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Job</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="interview-questions.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Category</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Show</option>
                                            <option>Hide</option>
                                        </select>
									</div>									
								</div>
                                <div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Department</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Show</option>
                                            <option>Hide</option>
                                        </select>
									</div>									
								</div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Question</label>
                                        <textarea rows="3" class="form-control"></textarea>
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option A</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option B</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option C</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Option D</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Correct Answer</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>A</option>
                                            <option>B</option>
                                            <option>C</option>
                                        </select>
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Code Snippets</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Answer Explanation</label>
                                        <input type="text" class="form-control">
                                    </div>									
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Add Video Link</label>
                                        <input type="text" class="form-control">
                                    </div>											
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Add Image </label>
                                        <div class="custom-file-container__custom-file">
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input form-control">
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760">
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </div>
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
        <!-- /Edit Question -->

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
							<a href="interview-questions.php" class="btn btn-danger">Yes, Delete</a>
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
<!-- Custom JS -->
<script src="assets/js/file-upload.js"></script>
</body>
</html>