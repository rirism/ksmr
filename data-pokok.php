<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
	<title>Bank | Sistem Informasi Pengawasan Treasuri/Market</title>
	<?php
	include 'layouts/title-meta.php';
	include 'layouts/head-css.php';
	include('layouts/config.php');

	$query = "SELECT 
		b.kode_bank, b.nama_bank,
		a.kelompok_aplikasi, a.nama_aplikasi,
		a.is_developed_inhouse, a.nama_vendor_aplikasi, a.nama_produk_aplikasi,
		a.is_managed_inhouse, a.is_managed_service, a.vendor_managed_service,
		dc.status AS dc_status, dc.tier AS dc_tier, dc.lokasi AS dc_lokasi,
		dr.status AS drc_status, dr.tier AS drc_tier, dr.lokasi AS drc_lokasi,
		a.dc_available, a.drc_available,
		a.dc_server_name, a.dc_server_cve, a.dc_server_obsolete_date,
		a.drc_server_name, a.drc_server_cve, a.drc_server_obsolete_date,
		a.dc_os_name, a.dc_os_cve, a.dc_os_obsolete_date,
		a.drc_os_name, a.drc_os_cve, a.drc_os_obsolete_date,
		a.dc_db_name, a.dc_db_cve, a.dc_db_obsolete_date,
		a.drc_db_name, a.drc_db_cve, a.drc_db_obsolete_date,
		a.is_backup_data_daily, a.is_backup_data_weekly, a.is_backup_data_monthly,
		a.back_up_data_keterangan,
		a.is_backup_system, a.backup_system_keterangan
	FROM aplikasi a
	JOIN bank b ON a.kode_bank = b.kode_bank
	LEFT JOIN data_center dc ON dc.kode_bank = b.kode_bank
	LEFT JOIN dr_center dr ON dr.kode_bank = b.kode_bank";

	$result = mysqli_query($link, $query);
	if (!$result) {
		die("Query gagal: " . mysqli_error($link));
	}
	?>
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
						<h2 class="mb-1">Data Pokok TI</h2>
						<nav>
							<ol class="breadcrumb mb-0">
								<li class="breadcrumb-item">
									<a href="admin-dashboard.php"><i class="ti ti-smart-home"></i></a>
								</li>
								<li class="breadcrumb-item">
									Pengawasan
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Pokok TI</li>
							</ol>
						</nav>
					</div>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
						<div class="me-2 mb-2">
							<div class="dropdown">
								<a href="javascript:void(0);"
									class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
									data-bs-toggle="dropdown">
									<i class="ti ti-file-export me-1"></i>Unduh
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i
												class="ti ti-file-type-pdf me-1"></i>Unduh PDF</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1"><i
												class="ti ti-file-type-xls me-1"></i>Unduh Excel </a>
									</li>
								</ul>
							</div>
						</div>
						<div class="mb-2">
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_assets"
								class="btn btn-primary d-flex align-items-center"><i
									class="ti ti-circle-plus me-2"></i>Tambah</a>
						</div>
						<div class="ms-2 head-icons">
							<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
								data-bs-original-title="Collapse" id="collapse-header">
								<i class="ti ti-chevrons-up"></i>
							</a>
						</div>
					</div>
				</div>
				<!-- /Breadcrumb -->

				<!-- Bank Lists -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Daftar Data Pokok TI</h5>
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
										<th>Kode Bank</th>
										<th>Nama Bank</th>
										<th>Kelompok Aplikasi</th>
										<th>Nama Aplikasi</th>
										<th>In-House Develop</th>
										<th>Nama Vendor Aplikasi</th>
										<th>Nama Produk Aplikasi</th>
										<th>Managed In-House</th>
										<th>Managed Service</th>
										<th>Vendor Managed Service</th>
										<th>Kepemilikan DC</th>
										<th>Tier DC</th>
										<th>Lokasi DC</th>
										<th>Kepemilikan DRC</th>
										<th>Tier DRC</th>
										<th>Lokasi DRC</th>
										<th>Aplikasi Tersedia di DC</th>
										<th>Aplikasi Tersedia di DRC</th>
										<th>Server DC</th>
										<th>CVE Server DC</th>
										<th>Obsolete Date Server DC</th>
										<th>Server DRC</th>
										<th>CVE Server DRC</th>
										<th>Obsolete Date Server DRC</th>
										<th>OS DC</th>
										<th>CVE OS DC</th>
										<th>Obsolete Date OS DC</th>
										<th>OS DRC</th>
										<th>CVE OS DRC</th>
										<th>Obsolete Date OS DRC</th>
										<th>DB DC</th>
										<th>CVE DB DC</th>
										<th>Obsolete Date DB DC</th>
										<th>DB DRC</th>
										<th>CVE DB DRC</th>
										<th>Obsolete Date DB DRC</th>
										<th>Backup Data Daily</th>
										<th>Backup Data Weekly</th>
										<th>Backup Data Monthly</th>
										<th>Keterangan Backup Data</th>
										<th>Backup System Dilakukan</th>
										<th>Keterangan Backup System</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									while ($row = mysqli_fetch_assoc($result)) {
										echo "<tr>";
										echo '<td><div class="form-check form-check-md"><input class="form-check-input" type="checkbox"></div></td>';
										echo "<td>{$row['kode_bank']}</td>";
										echo "<td>{$row['nama_bank']}</td>";
										echo "<td>{$row['kelompok_aplikasi']}</td>";
										echo "<td>{$row['nama_aplikasi']}</td>";
										echo "<td>" . ($row['is_developed_inhouse'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>{$row['nama_vendor_aplikasi']}</td>";
										echo "<td>{$row['nama_produk_aplikasi']}</td>";
										echo "<td>" . ($row['is_managed_inhouse'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>" . ($row['is_managed_service'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>{$row['vendor_managed_service']}</td>";
										echo "<td>{$row['dc_status']}</td>";
										echo "<td>{$row['dc_tier']}</td>";
										echo "<td>{$row['dc_lokasi']}</td>";
										echo "<td>{$row['drc_status']}</td>";
										echo "<td>{$row['drc_tier']}</td>";
										echo "<td>{$row['drc_lokasi']}</td>";
										echo "<td>" . ($row['dc_available'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>" . ($row['drc_available'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>{$row['dc_server_name']}</td>";
										echo "<td>{$row['dc_server_cve']}</td>";
										echo "<td>{$row['dc_server_obsolete_date']}</td>";
										echo "<td>{$row['drc_server_name']}</td>";
										echo "<td>{$row['drc_server_cve']}</td>";
										echo "<td>{$row['drc_server_obsolete_date']}</td>";
										echo "<td>{$row['dc_os_name']}</td>";
										echo "<td>{$row['dc_os_cve']}</td>";
										echo "<td>{$row['dc_os_obsolete_date']}</td>";
										echo "<td>{$row['drc_os_name']}</td>";
										echo "<td>{$row['drc_os_cve']}</td>";
										echo "<td>{$row['drc_os_obsolete_date']}</td>";
										echo "<td>{$row['dc_db_name']}</td>";
										echo "<td>{$row['dc_db_cve']}</td>";
										echo "<td>{$row['dc_db_obsolete_date']}</td>";
										echo "<td>{$row['drc_db_name']}</td>";
										echo "<td>{$row['drc_db_cve']}</td>";
										echo "<td>{$row['drc_db_obsolete_date']}</td>";
										echo "<td>" . ($row['is_backup_data_daily'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>" . ($row['is_backup_data_weekly'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>" . ($row['is_backup_data_monthly'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>{$row['back_up_data_keterangan']}</td>";
										echo "<td>" . ($row['is_backup_system'] ? 'Ya' : 'Tidak') . "</td>";
										echo "<td>{$row['backup_system_keterangan']}</td>";
										echo '<td></td>'; // kolom kosong untuk aksi jika diperlukan
										echo "</tr>";
									}
									?>
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
</body>

</html>