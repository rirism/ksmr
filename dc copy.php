<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Data Center | Sistem Informasi Pengawasan Treasuri/Market</title>
    <?php
    include 'layouts/title-meta.php';
    include 'layouts/head-css.php';
    include('layouts/config.php');

    $query = "
        SELECT 
        b.kode_bank, 
        b.nama_bank,
        dc.status AS dc_status, 
        dc.tier AS dc_tier, 
        dc.lokasi AS dc_lokasi
        FROM bank b
        LEFT JOIN data_center dc ON dc.kode_bank = b.kode_bank
        WHERE dc.kode_bank IS NOT NULL
    ";

    $result = mysqli_query($link, $query);
    if (!$result) {
        die("Query gagal: " . mysqli_error($link));
    }
    ?>
</head>
<body>
    <div class="main-wrapper">
        <?php
        include 'layouts/topbar.php';
        include 'layouts/admin-sidebar.php';
        ?>

        <div class="page-wrapper">
            <div class="content">
                <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                    <div class="my-auto mb-2">
                        <h2 class="mb-1">Data Center (DC)</h2>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Nama Bank</th>
                                        <th>Kepemilikan DC</th>
                                        <th>Tier DC</th>
                                        <th>Lokasi DC</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) {
                                        $kode = htmlspecialchars($row['kode_bank']);
                                        $nama = htmlspecialchars($row['nama_bank']);
                                        $dc_status = htmlspecialchars($row['dc_status']);
                                        $dc_tier = htmlspecialchars($row['dc_tier']);
                                        $dc_lokasi = htmlspecialchars($row['dc_lokasi']);
                                        $id_dc = htmlspecialchars($row['id']);
                                    ?>
                                    <tr>
                                        <td><?= "$kode - $nama" ?></td>
                                        <td><?= $dc_status ?: '-' ?></td>
                                        <td><?= $dc_tier ?: '-' ?></td>
                                        <td><?= $dc_lokasi ?: '-' ?></td>
                                        <td>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_dc<?= $id_dc ?>">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="edit_dc<?= $id_dc ?>" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <form action="dc_edit.php" method="POST" class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Edit Data Center</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="id" value="<?= $id_dc ?>">
                                                    <input type="hidden" name="kode_bank" value="<?= $kode ?>">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="form-label">Kode Bank</label>
                                                            <input type="text" class="form-control" value="<?= $kode ?>" disabled>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="form-label">Nama Bank</label>
                                                            <input type="text" class="form-control" value="<?= $nama ?>" disabled>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Kepemilikan DC</label>
                                                            <select class="form-select" name="dc_status">
                                                                <option value="">Pilih</option>
                                                                <option <?= $dc_status == 'Milik Sendiri' ? 'selected' : '' ?>>Milik Sendiri</option>
                                                                <option <?= $dc_status == 'Colocation' ? 'selected' : '' ?>>Colocation</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Tier DC</label>
                                                            <select class="form-select" name="dc_tier">
                                                                <option value="">Pilih</option>
                                                                <option <?= $dc_tier == 'Tier 1' ? 'selected' : '' ?>>Tier 1</option>
                                                                <option <?= $dc_tier == 'Tier 2' ? 'selected' : '' ?>>Tier 2</option>
                                                                <option <?= $dc_tier == 'Tier 3' ? 'selected' : '' ?>>Tier 3</option>
                                                                <option <?= $dc_tier == 'Tier 4' ? 'selected' : '' ?>>Tier 4</option>
                                                                <option <?= $dc_tier == 'Belum Sertifikasi Tier' ? 'selected' : '' ?>>Belum Sertifikasi Tier</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label class="form-label">Lokasi DC</label>
                                                            <input type="text" class="form-control" name="dc_lokasi" value="<?= $dc_lokasi ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /Edit Modal -->
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'layouts/footer.php'; ?>
        </div>
    </div>
    <?php include 'layouts/vendor-scripts.php'; ?>
</body>
</html>