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
                        <h2 class="mb-1">Settings</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Administration
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
                <!-- /Breadcrumb -->

                <ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3">
                    <li class="nav-item">
                        <a class="nav-link" href="profile-settings.php"><i class="ti ti-settings me-2"></i>General Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bussiness-settings.php"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salary-settings.php"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="email-settings.php"><i class="ti ti-server-cog me-2"></i>System Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="payment-gateways.php"><i class="ti ti-settings-dollar me-2"></i>Financial Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="custom-css.php"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-xl-3 theiaStickySidebar">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column list-group settings-list">
                                    <a href="payment-gateways.php" class="d-inline-flex align-items-center rounded py-2 px-3">Payment Gateways</a>
                                    <a href="tax-rates.php" class="d-inline-flex align-items-center active rounded py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Tax Rates</a>
                                    <a href="currencies.php" class="d-inline-flex align-items-center rounded py-2 px-3">Currencies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card">
                            <div class="card-header px-0 mx-3">
                                <div class="row g-3 align-items-center">
                                    <div class="col-md-6 col-sm-4">
                                        <h4>Tax Rates</h4>
                                    </div>
                                    <div class="col-md-6 col-sm-8">
                                        <div class="d-flex justify-content-sm-end align-items-center flex-wrap row-gap-2">
                                            <a href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_tax_rate"><i class="ti ti-circle-plus me-2"></i>Add Tax Rate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pb-0">
                                <div class="card mb-3">
                                    <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                        <h5>Tax Rate List</h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th class="no-sort">
                                                            <div class="form-check form-check-md">
                                                                <input class="form-check-input" type="checkbox" id="select-all">
                                                            </div>
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Tax Rate</th>
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
                                                            <h6 class="d-flex align-items-center fw-medium">
                                                                VAT
                                                            </h6>
                                                        </td>
                                                        <td>16%</td>
                                                        <td>
                                                            <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                                <i class="ti ti-point-filled me-1"></i>Active
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="action-icon d-inline-flex">
                                                                <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_tax_rate"><i class="ti ti-edit"></i></a>
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
                                                            <h6 class="d-flex align-items-center fw-medium">
                                                                GST
                                                            </h6>
                                                        </td>
                                                        <td>14%</td>
                                                        <td>
                                                            <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                                <i class="ti ti-point-filled me-1"></i>Active
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="action-icon d-inline-flex">
                                                                <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_tax_rate"><i class="ti ti-edit"></i></a>
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
                                                            <h6 class="d-flex align-items-center fw-medium">
                                                                HST
                                                            </h6>
                                                        </td>
                                                        <td>12%</td>
                                                        <td>
                                                            <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                                <i class="ti ti-point-filled me-1"></i>Active
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <div class="action-icon d-inline-flex">
                                                                <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_tax_rate"><i class="ti ti-edit"></i></a>
                                                                <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
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
                <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
            </div>
        </div>
        <!-- /Page Wrapper -->

        <!-- Add Tax Rate -->
        <div class="modal fade" id="add_tax_rate">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Tax Rate</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="tax-rates.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Tax Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Tax Name">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tax Rate</label>
                                        <input type="text" class="form-control" placeholder="Enter Tax Rate">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</a>
                            <button type="submit" class="btn btn-primary">Add Tax Rate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Add Tax Rate -->

        <!-- Edit Tax Rate -->
        <div class="modal fade" id="edit_tax_rate">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Tax Rate</h4>
                        <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <i class="ti ti-x"></i>
                        </button>
                    </div>
                    <form action="tax-rates.php">
                        <div class="modal-body pb-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Tax Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Tax Name" value="GST">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tax Rate</label>
                                        <input type="text" class="form-control" placeholder="Enter Tax Rate" value="14%">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option selected>Active</option>
                                            <option>Inactive</option>
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
        <!-- /Edit Tax Rate -->

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
                            <a href="tax-rates.php" class="btn btn-danger">Yes, Delete</a>
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