<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php
include 'layouts/config.php';

// Ambil data dari tabel bank
$query = "SELECT * FROM bank";
$listbank = mysqli_query($link, $query);
$totalBank = mysqli_num_rows($listbank);

$query = "SELECT COUNT(*) as total FROM bank WHERE isdealerutama = 1";
$bankDU = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($bankDU);
$totalDealerUtama = $row['total'];
?>

<head>
	<title>Bank | Sistem Informasi Pengawasan Treasuri/Market</title>
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
						<h2 class="mb-1">Daftar Bank</h2>
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
									class="ti ti-circle-plus me-2"></i>Tambah Bank</a>
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
				<div class="row">

					<!-- Total Plans -->
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-dark rounded-circle"><i
												class="ti ti-users"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Total Bank</p>
										<h4><?php echo $totalBank; ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 d-flex">
						<div class="card flex-fill">
							<div class="card-body d-flex align-items-center justify-content-between">
								<div class="d-flex align-items-center overflow-hidden">
									<div>
										<span class="avatar avatar-lg bg-dark rounded-circle"><i
												class="ti ti-users"></i></span>
									</div>
									<div class="ms-2 overflow-hidden">
										<p class="fs-12 fw-medium mb-1 text-truncate">Total Bank DU PUVA</p>
										<h4><?php echo $totalDealerUtama; ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Bank Lists -->
				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Daftar Bank</h5>
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
										<th>Status DU</th>
										<!-- <th>30 Bank Besar</th> -->
										<th class="no-sort">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php while ($row = mysqli_fetch_assoc($listbank)): ?>
										<tr>
											<td>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
											</td>
											<td><?= htmlspecialchars($row['kode_bank']) ?></td>
											<td><?= htmlspecialchars($row['nama_bank']) ?></td>
											<td>
												<?php if ($row['isdealerutama'] == 1): ?>
													<span class="badge badge-success d-inline-flex align-items-center badge-xs">
														Dealer Utama
													</span>
												<?php else: ?>
													<span
														class="badge badge-secondary d-inline-flex align-items-center badge-xs">
														Non Dealer Utama
													</span>
												<?php endif; ?>
											</td>
											<!-- <td><?= htmlspecialchars($row['bank30besar'] ?? '-') ?></td> -->
											<!-- Jika kolom bank30besar tersedia -->
											<td>
												<div class="action-icon d-inline-flex">
													<a href="#" class="me-2" data-bs-toggle="modal"
														data-bs-target="#edit_assets">
														<i class="ti ti-edit"></i>
													</a>
													<a href="#" class="btn-delete" data-bs-toggle="modal"
														data-bs-target="#delete_modal" data-kode="<?= $row['kode_bank'] ?>">
														<i class="ti ti-trash"></i>
													</a>
												</div>
											</td>
										</tr>
									<?php endwhile; ?>
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
					<form action="bank_add.php" method="POST">
						<div class="modal-body pb-0">
							<div class="row">
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Kode Bank</label>
										<input type="text" class="form-control" name="kode_bank" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label class="form-label">Nama Bank</label>
										<input type="text" class="form-control" name="nama_bank" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="mb-3">
										<label class="form-label">Dealer Utama</label>
										<select class="form-select" name="dealer_utama" required>
											<option value="">Pilih</option>
											<option value="1">Ya</option>
											<option value="0">Tidak</option>
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
		<div class="modal fade" id="edit_bank<?= $kode_bank ?>" tabindex="-1">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<form action="bank_edit.php" method="POST" class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Edit Data Bank</h4>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<div class="modal-body pb-3">
						<div class="row">
							<!-- Kode Bank (readonly & hidden for POST) -->
							<input type="hidden" name="kode_bank" value="<?= htmlspecialchars($kode_bank) ?>">

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Kode Bank</label>
									<input type="text" class="form-control" value="<?= htmlspecialchars($kode_bank) ?>"
										disabled>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Nama Bank</label>
									<input type="text" class="form-control" name="nama_bank"
										value="<?= htmlspecialchars($nama_bank) ?>" required>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Status Dealer Utama</label>
									<select name="dealer_utama" class="form-select" required>
										<option value="">Pilih</option>
										<option value="1" <?= $isdealerutama == 1 ? 'selected' : '' ?>>Dealer Utama
										</option>
										<option value="0" <?= $isdealerutama == 0 ? 'selected' : '' ?>>Non Dealer Utama
										</option>
									</select>
								</div>
							</div>

						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
					</div>
				</form>
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
							<a id="confirmDeleteBtn" href="#" class="btn btn-danger">Ya, Hapus</a>
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
	<script>
		const deleteModal = document.getElementById('delete_modal');
		const confirmBtn = document.getElementById('confirmDeleteBtn');

		deleteModal.addEventListener('show.bs.modal', function (event) {
			const button = event.relatedTarget;
			const kodeBank = button.getAttribute('data-kode');
			confirmBtn.href = 'bank_delete.php?kode_bank=' + encodeURIComponent(kodeBank);
		});
	</script>
</body>

</html>