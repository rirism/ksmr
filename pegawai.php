<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'layouts/config.php';
include 'layouts/session.php';
include 'layouts/head-main.php';

// Ambil data dari tabel users
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);
$totalPegawai = mysqli_num_rows($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Ambil data dari form
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$nip = $_POST['nip'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$team = $_POST['team'];
	$pangkat = $_POST['pangkat'];
	$jabatan = $_POST['jabatan'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$tanggalbergabung = date('Y-m-d'); // atau sesuaikan

	// Validasi konfirmasi password
	if ($password !== $confirm_password) {
		die("Password dan konfirmasi tidak sama!");
	}

	// Hash password
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Query insert
	$sql = "INSERT INTO users (firstname, lastname, username, nip, email, phone, team, pangkat, jabatan, password, tanggalbergabung)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	// Persiapkan dan eksekusi statement
	$stmt = mysqli_prepare($link, $sql);
	mysqli_stmt_bind_param($stmt, 'sssssssssss', $firstname, $lastname, $username, $nip, $email, $phone, $team, $pangkat, $jabatan, $hashed_password, $tanggalbergabung);

	if (mysqli_stmt_execute($stmt)) {
		echo "<script>alert('Data berhasil disimpan!'); window.location.href='pegawai.php';</script>";
	} else {
		echo "Error: " . mysqli_error($link);
	}

	mysqli_stmt_close($stmt);
}
?>

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
							<a href="#" data-bs-toggle="modal" data-bs-target="#add_employee"
								class="btn btn-primary d-flex align-items-center"><i
									class="ti ti-circle-plus me-2"></i>Tambah Pegawai</a>
						</div>
						<div class="head-icons ms-2">
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
										<p class="fs-12 fw-medium mb-1 text-truncate">Total Pegawai</p>
										<h4><?php echo $totalPegawai; ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="card">
					<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
						<h5>Daftar Pegawai</h5>
						<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
							<div class="dropdown me-3">
								<a href="javascript:void(0);"
									class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
									data-bs-toggle="dropdown">
									Pangkat
								</a>
								<ul class="dropdown-menu  dropdown-menu-end p-3">
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Asisten
											Direktur</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="dropdown-item rounded-1">Asisten
											Manajer</a>
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
										<th>Jabatan</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php while ($row = mysqli_fetch_assoc($result)): ?>
										<tr>
											<td>
												<div class="form-check form-check-md">
													<input class="form-check-input" type="checkbox">
												</div>
											</td>
											<td><?= $row['nip']; ?></td> <!-- Ganti sesuai kolom NIP kamu jika ada -->
											<td>
												<p class="text-dark mb-0"><?= $row['firstname'] . ' ' . $row['lastname']; ?>
												</p>
											</td>
											<td><?= $row['email']; ?></td>
											<td><?= $row['pangkat'] ?? 'Belum diatur'; ?></td>
											<td><?= $row['jabatan'] ?? 'Belum diatur'; ?></td>
											<td>
												<div class="action-icon d-inline-flex">
													<a href="#" class="me-2" data-bs-toggle="modal"
														data-bs-target="#edit_employee"><i class="ti ti-edit"></i></a>
													<?php if (isset($_SESSION['username']) && $_SESSION['username'] == $row['username']): ?>
														<a href="#"
															onclick="alert('Kamu tidak bisa menghapus akunmu sendiri!')">
															<i class="ti ti-trash text-muted"></i>
														</a>
													<?php else: ?>
														<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"
															data-id="<?= $row['id'] ?>">
															<i class="ti ti-trash"></i>
														</a>
													<?php endif; ?>
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

		<!-- Add Employee -->
		<div class="modal fade" id="add_employee">
			<div class="modal-dialog modal-dialog-centered modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<div class="d-flex align-items-center">
							<h4 class="modal-title me-2">Tambah Pegawai Baru
						</div>
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form method="POST" action="pegawai_add.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="info-tab" data-bs-toggle="tab"
										data-bs-target="#basic-info" type="button" role="tab"
										aria-selected="true">Informasi</button>
								</li>
							</ul>
						</div>

						<div class="tab-content" id="myTabContent">
							<!-- TAB: INFORMASI -->
							<div class="tab-pane fade show active" id="basic-info" role="tabpanel">
								<div class="modal-body pb-0">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Nama Depan <span
														class="text-danger">*</span></label>
												<input type="text" name="firstname" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Nama Belakang</label>
												<input type="text" name="lastname" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Username <span
														class="text-danger">*</span></label>
												<input type="text" name="username" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">NIP <span class="text-danger">*</span></label>
												<input type="text" name="nip" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Email <span
														class="text-danger">*</span></label>
												<input type="email" name="email" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Nomor Telepon</label>
												<input type="text" name="phone" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Tim</label>
												<input type="text" name="team" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Pangkat</label>
												<select name="pangkat" class="form-select">
													<option value="">Pilih</option>
													<option>Asisten Direktur</option>
													<option>Asisten Manajer</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Jabatan</label>
												<select name="jabatan" class="form-select">
													<option value="">Pilih</option>
													<option>Pengawas Eksekutif</option>
													<option>Pengawas Senior</option>
													<option>Pengawas Yunior</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Password <span
														class="text-danger">*</span></label>
												<input type="password" name="password" class="form-control" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Konfirmasi Password <span
														class="text-danger">*</span></label>
												<input type="password" name="confirm_password" class="form-control"
													required>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- TOMBOL AKHIR -->
						<div class="modal-footer">
							<button type="button" class="btn btn-outline-light border me-2"
								data-bs-dismiss="modal">Batal</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
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
						<button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal"
							aria-label="Close">
							<i class="ti ti-x"></i>
						</button>
					</div>
					<form action="employees.php">
						<div class="contact-grids-tab">
							<ul class="nav nav-underline" id="myTab2" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" id="info-tab2" data-bs-toggle="tab"
										data-bs-target="#basic-info2" type="button" role="tab"
										aria-selected="true">Informasi</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" id="address-tab2" data-bs-toggle="tab"
										data-bs-target="#address2" type="button" role="tab" aria-selected="false">Izin
										Akses</button>
								</li>
							</ul>
						</div>
						<div class="tab-content" id="myTabContent2">
							<div class="tab-pane fade show active" id="basic-info2" role="tabpanel"
								aria-labelledby="info-tab2" tabindex="0">
								<div class="modal-body pb-0 ">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Nama Depan <span class="text-danger">
														*</span></label>
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
												<label class="form-label">Tanggal Bergabung <span class="text-danger">
														*</span></label>
												<div class="input-icon-end position-relative">
													<input type="text" class="form-control datetimepicker"
														placeholder="dd/mm/yyyy" value="17-10-2022">
													<span class="input-icon-addon">
														<i class="ti ti-calendar text-gray-7"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Username <span class="text-danger">
														*</span></label>
												<input type="text" class="form-control" value="Anthony">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Email <span class="text-danger">
														*</span></label>
												<input type="email" class="form-control" value="anthony@example.com	">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 ">
												<label class="form-label">Password <span class="text-danger">
														*</span></label>
												<div class="pass-group">
													<input type="password" class="pass-input form-control">
													<span class="ti toggle-password ti-eye-off"></span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3 ">
												<label class="form-label">Konfirmasi Password <span class="text-danger">
														*</span></label>
												<div class="pass-group">
													<input type="password" class="pass-inputs form-control">
													<span class="ti toggle-passwords ti-eye-off"></span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label class="form-label">Nomer Telepon <span class="text-danger">
														*</span></label>
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
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-light border me-2"
										data-bs-dismiss="modal">Batal</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
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
							<span class="avatar avatar-lg avatar-rounded bg-success mb-3"><i
									class="ti ti-check fs-24"></i></span>
							<h5 class="mb-2">Berhasil Menambahkan Pegawai</h5>
							<p class="mb-3">Dimas Aryo Wibowo berhasil ditambahkan dengan NIM : <span
									class="text-primary">105577</span>
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
						<p class="mb-3">Kamu akan menghapus pegawai ini. Tindakan ini tidak bisa dikembalikan.</p>
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
		document.addEventListener("DOMContentLoaded", function () {
			const deleteModal = document.getElementById('delete_modal');
			const confirmBtn = document.getElementById('confirmDeleteBtn');

			deleteModal.addEventListener('show.bs.modal', function (event) {
				const button = event.relatedTarget;
				const id = button.getAttribute('data-id');
				confirmBtn.href = 'pegawai_delete.php?id=' + id;
			});
		});
	</script>
</body>

</html>