<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>Bank | Sistem Informasi Pengawasan Treasuri/Market</title>
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
						<h2 class="mb-1">Detail Bank</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Pengawasan
								</li>
								<li class="breadcrumb-item active" aria-current="page">Bank</li>
							</ol>
						</nav>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Bank Lists -->
				<div class="card p-5">
					<div class="card-body">
						<div class="d-flex align-items-start gap-3">
							<!-- Logo Bank -->
							<div class="flex-shrink-0">
								<div class="avatar avatar-xxxl rounded-circle overflow-hidden border">
									<img src="https://pbs.twimg.com/profile_images/1605130431829270533/pS8KH1cE_400x400.jpg"
										alt="Logo Bank" class="img-fluid">
								</div>
							</div>
							<!-- Informasi Bank -->
							<div class="flex-fill border rounded p-3 border-white">
								<div class="row gy-3">
									<div class="col-md-4">
										<p class="mb-1 text-muted">Nama Bank</p>
										<a href="#" class="fw-semibold text-primary text-decoration-none"
											data-bs-toggle="offcanvas" data-bs-target="#bank_details">
											PT Bank Mandiri (Persero) Tbk
										</a>
									</div>
									<div class="col-md-4">
										<p class="mb-1 text-muted">Kode Bank</p>
										<h6 class="fw-normal">008</h6>
									</div>
									<div class="col-md-4">
									</div>
									<div class="col-md-4">
										<p class="mb-1 text-muted">Dealer Utama</p>
										<span class="badge bg-success d-inline-flex align-items-center">
											<i class="ti ti-point-filled me-1"></i>Ya
										</span>
									</div>
									<div class="col-md-4">
										<p class="mb-1 text-muted">30 Bank Besar</p>
										<span class="badge bg-success d-inline-flex align-items-center">
											<i class="ti ti-point-filled me-1"></i>Ya
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="contact-grids-tab p-0 mb-3">
						<ul class="nav nav-underline" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active pt-0 px-3" id="info-tab" data-bs-toggle="tab"
									data-bs-target="#basic-info" type="button" role="tab"
									aria-selected="true">Profil</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link pt-0" id="address-tab" data-bs-toggle="tab"
									data-bs-target="#basic-info2" type="button" role="tab" aria-selected="false">Data
									Pokok IT</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link pt-0" id="address-tab2" data-bs-toggle="tab"
									data-bs-target="#address2" type="button" role="tab"
									aria-selected="false">Notes</button>
							</li>
						</ul>
					</div>
				</div>

			</div>

			<div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
				<p class="mb-0">&copy; 2025 DSMM-KSMR. All rights reserved.</p>
				<p>Dikembangkan By <a href="javascript:void(0);" class="text-primary">KSMR-TI</a> | Versi 1.0</p>
			</div>

		</div>
		<!-- /Page Wrapper -->

		<!-- Bank Details -->
		<div class="offcanvas offcanvas-end offcanvas-large" tabindex="-1" id="bank_details">
			<div class="offcanvas-header border-bottom">
				<h4 class="d-flex align-items-center">Detail Bank
					<!--<span class="badge bg-primary-transparent fw-medium ms-2">Bank Mandiri - 008</span>-->
				</h4>
				<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
					<i class="ti ti-x"></i>
				</button>
			</div>
			<div class="offcanvas-body">
				<div class="card">
					<div class="card-body">
						<div class="d-flex align-items-center flex-wrap flex-md-nowrap row-gap-3">
							<span class="avatar avatar-xxxl candidate-img flex-shrink-0 me-3">
								<img src="assets/img/BI/mandiri.png" alt="Img">
							</span>
							<div class="flex-fill border rounded p-3 pb-0">
								<div class="row align-items-center">
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Nama Bank</p>
											<h6 class="fw-normal">PT Bank Mandiri (Persero) Tbk</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Kode Bank</p>
											<h6 class="fw-normal">008</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Negara</p>
											<h6 class="fw-normal">Indonesia</h6>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">30 Bank Besar</p>
											<span class="badge badge-success d-inline-flex align-items-center"><i
													class="ti ti-point-filled me-1"></i>Ya</span>
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<p class="mb-1">Dealer Utama</p>
											<span class="badge badge-success d-inline-flex align-items-center"><i
													class="ti ti-point-filled me-1"></i>Ya</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-grids-tab p-0 mb-3">
					<ul class="nav nav-underline" id="myTab" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active pt-0" id="info-tab" data-bs-toggle="tab"
								data-bs-target="#basic-info" type="button" role="tab" aria-selected="true">ccd</button>
						</li>
						<!--<li class="nav-item" role="presentation">
						  <button class="nav-link pt-0" id="address-tab" data-bs-toggle="tab" data-bs-target="#basic-info2" type="button" role="tab" aria-selected="false">Data Pokok IT</button>
						</li>
						<li class="nav-item" role="presentation">
						  <button class="nav-link pt-0" id="address-tab2" data-bs-toggle="tab" data-bs-target="#address2" type="button" role="tab" aria-selected="false">Notes</button>
						</li>-->
					</ul>
				</div>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="basic-info" role="tabpanel" aria-labelledby="info-tab"
						tabindex="0">
						<div class="card">
							<div class="card-header">
								<h5>Infromasi Bank</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Nama Bank</p>
											<h6 class="fw-normal">PT Bank Mandiri (Persero) Tbk</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Kode Bank</p>
											<h6 class="fw-normal">008</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Direktur Utama</p>
											<h6 class="fw-normal">Darmawan Junaidi</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Komisaris Utama</p>
											<h6 class="fw-normal">Kuswiyoto</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Tanggal Berdiri</p>
											<h6 class="fw-normal">2 Oktober 1998</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Email</p>
											<h6 class="fw-normal">mandiricare@bankmandiri.co.id</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Situs</p>
											<h6 class="fw-normal">www.bankmandiri.co.id</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Pendapatan</p>
											<h6 class="fw-normal">90,371 triliun </h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Alamat</p>
											<h6 class="fw-normal">Jl. Jenderal Sudirman Kav 54-55</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Kota</p>
											<h6 class="fw-normal">Jakarta</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Provinsi</p>
											<h6 class="fw-normal">DKI Jakarta</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Kode Pos</p>
											<h6 class="fw-normal">12190</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>Data Pokok IT</h5>
							</div>
							<div class="card-body pb-0">
								<div class="row align-items-center">
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Core Treasury System</p>
											<h6 class="fw-normal">Front Arena</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Data Center</p>
											<h6 class="fw-normal">Plaza Mandiri lt.4<br>Jl. Jend. Gatot Subroto Kav
												36-38 Jakarta Selatan</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Disaster Recovery Center</p>
											<h6 class="fw-normal">Komplek Griya Mandiri.<br>Jl. Ir H. Juanda No.27,
												Rempoa, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15412</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">BCP</p>
											<h6 class="fw-normal">Komplek Griya Mandiri.<br>Jl. Ir H. Juanda No.27,
												Rempoa, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15412</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Aktif Dealer Utama</p>
											<h6 class="fw-normal">2 Oktober 2024</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">SOC</p>
											<h6 class="fw-normal">Ya</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Pengelola SOC</p>
											<h6 class="fw-normal">in-house</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Monitoring SOC</p>
											<h6 class="fw-normal">24/7</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">RMDS</p>
											<h6 class="fw-normal">Refinitive</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Reuters</p>
											<h6 class="fw-normal">Refinitive</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">Bloomberg</p>
											<h6 class="fw-normal">Bloomberg</h6>
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<p class="mb-1">IPC Dealing System </p>
											<h6 class="fw-normal">Multi Surya Tunggal</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Bank Details -->

		<!-- Tambah Bank -->
		<div class="modal fade" id="add_assets">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Tambah Bank</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="assets.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Kode Bank</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Nama Bank</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Dealer Utama</label>
										<select class="select">
											<option>Pilih</option>
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3 ">
										<label class="form-label">30 Bank Besar</label>
										<select class="select">
											<option>Pilih</option>
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3 ">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Pilih</option>
											<option>Aktif</option>
											<option>Tidak Aktif</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Tambah Bank -->

		<!-- Edit Bank -->
		<div class="modal fade" id="edit_assets">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Rubah Bank</h4>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="assets.php">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Kode Bank</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Nama Bank</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Dealer Utama</label>
										<select class="select">
											<option>Pilih</option>
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3 ">
										<label class="form-label">30 Bank Besar</label>
										<select class="select">
											<option>Pilih</option>
											<option>Ya</option>
											<option>Tidak</option>
										</select>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3 ">
										<label class="form-label">Status</label>
										<select class="select">
											<option>Pilih</option>
											<option>Aktif</option>
											<option>Tidak Aktif</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /Edit Bank -->

		<!-- Delete Modal -->
		<div class="modal fade" id="delete_modal">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
							<i class="ti ti-trash-x fs-36"></i>
						</span>
						<h4 class="mb-1">Konfirmasi Hapus</h4>
						<p class="mb-3">Kamu akan menghapus bank ini, apabila sudah dihapus tidak akan bisa
							dikembalikan.</p>
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

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
</body>

</html>