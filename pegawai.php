<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
<title>Pegawai | Sistem Informasi Pengawasan Treasuri/Market</title>
 <?php include 'layouts/title-meta.php'; ?>
 <?php include 'layouts/head-css.php'; ?>
</head>
<body>
<div id="global-loader" style="display: none;">
		<div class="page-loader"></div>
	</div>

    <div class="main-wrapper">
    <?php 
	include 'layouts/topbar.php';
	include 'layouts/admin-sidebar.php';
	?>
	<!-- Page Wrapper -->
	<div class="page-wrapper">
			<div class="content">

				<!-- Breadcrumb -->
				<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
					<div class="my-auto mb-2">
						<h2 class="mb-1">Pegawai</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Pegawai
								</li>
								<li class="breadcrumb-item active" aria-current="page">Daftar Pegawai</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Unduh
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Unduh PDF</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Unduh Excel </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_employee" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Tambah Pegawai</a>
						</div>
						<div class="head-icons ms-2">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<div class="row">

					<!-- Total Plans -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-dark rounded-circle"><i class="ti ti-users"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Total Pegawai</p>
										<h4>10</h4>
									</div>
								</div>
								<div>                                    
									<span class="badge badge-soft-purple badge-sm fw-normal">
										<i class="ti ti-arrow-wave-right-down"></i>
										+19.01%
									</span>
                                </div>
							</div>
						</div>
					</div>
					<!-- /Total Plans -->

					<!-- Total Plans -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-success rounded-circle"><i class="ti ti-user-share"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Aktif</p>
										<h4>7</h4>
									</div>
								</div>
								<div>                                    
									<span class="badge badge-soft-primary badge-sm fw-normal">
										<i class="ti ti-arrow-wave-right-down"></i>
										+19.01%
									</span>
                                </div>
							</div>
						</div>
					</div>
					<!-- /Total Plans -->

					<!-- Inactive Plans -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-danger rounded-circle"><i class="ti ti-user-pause"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Tidak Aktif</p>
										<h4>4</h4>
									</div>
								</div>
								<div>                                    
									<span class="badge badge-soft-dark badge-sm fw-normal">
										<i class="ti ti-arrow-wave-right-down"></i>
										+19.01%
									</span>
                                </div>
							</div>
						</div>
					</div>
					<!-- /Inactive Companies -->

					<!-- No of Plans  -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-info rounded-circle"><i class="ti ti-user-plus"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Baru Bergabung</p>
										<h4>0</h4>
									</div>
								</div>
								<div>                                    
									<span class="badge badge-soft-secondary badge-sm fw-normal">
										<i class="ti ti-arrow-wave-right-down"></i>
										0%
									</span>
                                </div>
							</div>
						</div>
					</div>
					<!-- /No of Plans -->

				</div>

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Daftar Pegawai</h5>
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
									Pangkat
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Asisten Direktur</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Asisten Manajer</a>
									</li>
								</ul>
							</div>
							<div class="dropdown me-3">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Status
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Aktif</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Tidak Aktif</a>
									</li>
								</ul>
							</div>
							<div class="dropdown">
								<a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
									Sortir : 7 Hari Terakhir
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Baru Ditambahkan</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Urutkan Teratas</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Urutkan Terbawah</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Sebulan Terkahir</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">7 Hari Terakhir</a>
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
										<th>NIP</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Pangkat</th>
										<th>Tanggal Bergabung</th>
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
										<td>105577</td>
                                        <td>
											<div class="d-flex align-items-center">
                                                <img
                                                    src="assets/img/users/user.png" class="img-fluid rounded-circle" alt="img">
                                                <div class="ms-2">
													<p class="text-dark mb-0">Dimas Aryo Wibowo</p>
													<span class="fs-12">Pengawas Yunior</span>
												</div>
                                            </div>
										</td>
                                        <td>daw@email.com</td>
										<td>Asisten Manajer</td>
                                        <td>1 Juni 2025</td>
                                        <td>
											<span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Aktif
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
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
										<td>123456</td>
                                        <td>
											<div class="d-flex align-items-center">
                                                <img
                                                    src="assets/img/users/user.png" class="img-fluid rounded-circle" alt="img">
                                                <div class="ms-2">
													<p class="text-dark mb-0">Riris</p>
													<span class="fs-12">Pengawas Yunior</span>
												</div>
                                            </div>
										</td>
                                        <td>riris@email.com</td>
										<td>Asisten Manajer</td>
                                        <td>1 Juni 2025</td>
                                        <td>
											<span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                                <i class="ti ti-point-filled me-1"></i>Tidak Aktif
											</span>
										</td>
										<td>
											<div class="action-icon d-inline-flex">
												<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
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

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">&copy; 2025 DSMM-KSMR. All rights reserved.</p>
				<p>Dikembangkan By <a href="javascript:void(0);" class="text-primary">KSMR-TI</a> | Versi 1.0</p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Add Employee -->
		<div class="modal fade" id="add_employee">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title me-2">Tambah Pegawai Baru
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="employees.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
								  <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">Informasi</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="address-tab" data-bs-toggle="tab" data-bs-target="#address" type="button" role="tab" aria-selected="false">Izin Akses</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab" tabindex="0">
									<div class="modal-body pb-0 ">	
										<div class="row">
											<!--<div class="col-md-12">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
													<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
														<i class="ti ti-photo text-gray-2 fs-16"></i>
													</div>                                              
													<div class="profile-upload">
														<div class="mb-2">
															<h6 class="mb-1">Upload Profile Image</h6>
															<p class="fs-12">Image should be below 4 mb</p>
														</div>
														<div class="profile-uploader d-flex align-items-center">
															<div class="drag-upload-btn btn btn-sm btn-primary me-2">
																Upload
																<input type="file" class="form-control image-sign" multiple="">
															</div>
															<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
														</div>
													</div>
												</div>
											</div>-->
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Nama Depan <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Nama Belakang</label>
													<input type="email" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">NIM<span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Tanggal Bergabung <span class="text-danger"> *</span></label>
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
													<label class="form-label">Username <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Email <span class="text-danger"> *</span></label>
													<input type="email" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-input form-control">
														<span class="ti toggle-password ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Konfirmasi Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-inputs form-control">
														<span class="ti toggle-passwords ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Nomer Telepon <span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Tim<span class="text-danger"> *</span></label>
													<input type="text" class="form-control">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Pangkat</label>
													<select class="select">
														<option>Pilih</option>
														<option>Asisten Direktur</option>
														<option>Asisten Manajer</option>
													</select>
												</div>		
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Jabatan</label>
													<select class="select">
														<option>Pilih</option>
														<option>Pengawas Eksekutif</option>
														<option>Pengawas Senior</option>
														<option>Pengawas Yunior</option>
													</select>
												</div>		
											</div>
											<!--<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">Tentang <span class="text-danger"> *</span></label>
													<textarea class="form-control" rows="3"></textarea>
												</div>
											</div>-->
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-primary">Simpan </button>
									</div>
							</div>
							<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab" tabindex="0">
								<div class="modal-body">	
									<div class="card bg-light-500 shadow-none">
										<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
											<h6>Aktifkan Opsi</h6>
											<div class="d-flex align-items-center justify-content-end">
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
													<input class="form-check-input me-2" type="checkbox" role="switch">
														Aktifkan Semua Modul
													</label>
												</div>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Pilih Semua
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive border rounded">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
																Lihat Pegawai
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
															Pengawasan
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked=""> 
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Export
															</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Batal</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Simpan </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Add Employee -->

		<!-- Edit Employee -->
		<div class="modal fade" id="edit_employee">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title me-2">Rubah Pegawai</h4>
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="employees.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab2" role="tablist">
								<li class="nav-item" role="presentation">
								  <button class="nav-link active" id="info-tab2" data-bs-toggle="tab" data-bs-target="#basic-info2" type="button" role="tab" aria-selected="true">Informasi</button>
								</li>
								<li class="nav-item" role="presentation">
								  <button class="nav-link" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Izin Akses</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent2">
							<div class="tab-pane fade show active" id="basic-info2" role="tabpanel" aria-labelledby="info-tab2" tabindex="0">
									<div class="modal-body pb-0 ">	
										<div class="row">
											<!--<div class="col-md-12">
												<div class="d-flex align-items-center flex-wrap row-gap-3 bg-light w-100 rounded p-3 mb-4">                                                
													<div class="d-flex align-items-center justify-content-center avatar avatar-xxl rounded-circle border border-dashed me-2 flex-shrink-0 text-dark frames">
														<img src="assets/img/users/user-13.jpg" alt="img" class="rounded-circle">
													</div>                                              
													<div class="profile-upload">
														<div class="mb-2">
															<h6 class="mb-1">Upload Profile Image</h6>
															<p class="fs-12">Image should be below 4 mb</p>
														</div>
														<div class="profile-uploader d-flex align-items-center">
															<div class="drag-upload-btn btn btn-sm btn-primary me-2">
																Upload
																<input type="file" class="form-control image-sign" multiple="">
															</div>
															<a href="javascript:void(0);" class="btn btn-light btn-sm">Cancel</a>
														</div>
														
													</div>
												</div>
											</div>-->
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Nama Depan <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Anthony">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Nama Belakang</label>
													<input type="email" class="form-control" value="Lewis">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">NIM<span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Emp-001">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Tanggal Bergabung <span class="text-danger"> *</span></label>
													<div class="input-icon-end position-relative">
														<input type="text" class="form-control datetimepicker" placeholder="dd/mm/yyyy" value="17-10-2022">
														<span class="input-icon-addon">
															<i class="ti ti-calendar text-gray-7"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Username <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Anthony">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Email <span class="text-danger"> *</span></label>
													<input type="email" class="form-control" value="anthony@example.com	">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-input form-control">
														<span class="ti toggle-password ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3 ">
													<label class="form-label">Konfirmasi Password <span class="text-danger"> *</span></label>
													<div class="pass-group">
														<input type="password" class="pass-inputs form-control">
														<span class="ti toggle-passwords ti-eye-off"></span>
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Nomer Telepon <span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="(123) 4567 890">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Tim<span class="text-danger"> *</span></label>
													<input type="text" class="form-control" value="Abac Company">
												</div>									
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Pangkat</label>
													<select class="select">
														<option>Pilih</option>
														<option>Asisten Direktur</option>
														<option selected>Asisten Manajer</option>
													</select>
												</div>		
											</div>
											<div class="col-md-6">
												<div class="mb-3">
													<label class="form-label">Jabatan</label>
													<select class="select">
														<option>Pilih</option>
														<option>Pengawas Eksekutif</option>
														<option>Pengawas Senior</option>
														<option selected>Pengawas Yunior</option>
													</select>
												</div>		
											</div>
											<!--<div class="col-md-12">
												<div class="mb-3">
													<label class="form-label">About <span class="text-danger"> *</span></label>
													<textarea class="form-control" rows="3"></textarea>
												</div>
											</div>-->
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Batal</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
							</div>
							<div class="tab-pane fade" id="address2" role="tabpanel" aria-labelledby="address-tab2" tabindex="0">
								<div class="modal-body">	
									<div class="card bg-light-500 shadow-none">
										<div class="card-body d-flex align-items-center justify-content-between flex-wrap row-gap-3">
											<h6>Aktifkan Opsi</h6>
											<div class="d-flex align-items-center justify-content-end">
												<div class="form-check form-switch me-2">
													<label class="form-check-label mt-0">
													<input class="form-check-input me-2" type="checkbox" role="switch">
														Aktifkan Semua Modul
													</label>
												</div>
												<div class="form-check d-flex align-items-center">
													<label class="form-check-label mt-0">
														<input class="form-check-input" type="checkbox" checked="">
														Pilih Semua
													</label>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive border rounded">
										<table class="table">
											<tbody>
												<tr>
													<td>
														<div class="form-check form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch" checked>
																Liat Pegawai
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox" checked="">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-switch me-2">
															<label class="form-check-label mt-0">
															<input class="form-check-input me-2" type="checkbox" role="switch">
															Pengawasan
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Read
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Write
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Create
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Delete
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Import
															</label>
														</div>
													</td>
													<td>
														<div class="form-check d-flex align-items-center">
															<label class="form-check-label mt-0">
																<input class="form-check-input" type="checkbox">
																Export
															</label>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2" data-bs-dismiss="modal">Batal</button>
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#success_modal">Simpan </button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Employee -->

		<!-- Add Employee Success -->
		<div class="modal fade" id="success_modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body">
						<div class="text-center p-3">
							<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i class="ti ti-check fs-24"></i></span>
							<h5 class="mb-2">Berhasil Menambahkan Pegawai</h5>
							<p class="mb-3">Dimas Aryo Wibowo berhasil ditambahkan dengan NIM : <span class="text-primary">105577</span>
							</p>
							<div>
								<div class="row g-2">
									<div class="col-6">
										<a href="pegawai.php" class="btn btn-dark w-100">Kembali ke daftar Pegawai</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Client Success -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered modal-sm">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Konfirmasi Hapus</h4>
						<p class="mb-3">Kamu akan menghapus pegawai ini, apabila sudah dihapus tidak akan bisa dikembalikan.</p>
						<div class="d-flex justify-content-center">
							<a href="javascript:void(0);" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</a>
							<a href="jabatan.php" class="btn btn-danger">Ya, Hapus</a>
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
</body>
</html>