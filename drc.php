<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Bank | Sistem Informasi Pengawasan Treasuri/Market</title>
    <?php
    include 'layouts/title-meta.php';
    include 'layouts/head-css.php';
    include('layouts/config.php');
    $bankQuery = mysqli_query($link, "SELECT kode_bank, nama_bank FROM bank ORDER BY nama_bank");
    $bankList = [];
    while ($row = mysqli_fetch_assoc($bankQuery)) {
        $bankList[] = $row;
    }

    $query = "
        SELECT 
        b.kode_bank, 
        b.nama_bank,
        dr.status AS drc_status, 
        dr.tier AS drc_tier, 
        dr.lokasi AS drc_lokasi
        FROM bank b
        LEFT JOIN dr_center dr ON dr.kode_bank = b.kode_bank
        WHERE dr.kode_bank IS NOT NULL
    ";

    $result = mysqli_query($link, $query);
    if (!$result) {
        die("Query gagal: " . mysqli_error($link));
    }
    ?>
    <style>
        .wrap-column {
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        /* Atur lebar per kolom jika perlu */
        th:nth-child(6),
        td:nth-child(6),
        th:nth-child(9),
        td:nth-child(9) {
            width: 200px;
            /* Sesuaikan lebar kolom DC/DRC Lokasi */
        }

        .wrap-column {
            white-space: normal !important;
            word-wrap: break-word !important;
            overflow-wrap: break-word !important;
        }

        /* Target <th> dan <td> berdasarkan index kolom lokasi */
        th.dc-lokasi,
        td.dc-lokasi,
        th.drc-lokasi,
        td.drc-lokasi {
            width: 200px !important;
            max-width: 200px !important;
        }

        .wrap-column {
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
            max-width: 200px;
            /* Batasi hanya kolom ini */
        }

        /* Target kolom lokasi saja */
        th.dc-lokasi,
        td.dc-lokasi,
        th.drc-lokasi,
        td.drc-lokasi {
            width: 200px;
            max-width: 200px;
        }
    </style>
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
                            <table class="table datatable table-fixed">
                                <thead class="thead-light">
                                    <tr>
                                        <!-- <th class="no-sort">
                                            <div class="form-check form-check-md">
                                                <input class="form-check-input" type="checkbox" id="select-all">
                                            </div>
                                        </th> -->
                                        <!-- <th>Kode Bank</th> -->
                                        <th class="nama-bank">Nama Bank</th>
                                        <th>Kepemilikan DRC</th>
                                        <th>Tier DRC</th>
                                        <th class="drc-lokasi">Lokasi DRC</th>
                                        <th class=" no-sort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        // echo '<td><div class="form-check form-check-md"><input class="form-check-input" type="checkbox"></div></td>';
                                        // echo "<td>{$row['kode_bank']}</td>";
                                        echo "<td class='wrap-column nama-bank'>{$row['kode_bank']} - {$row['nama_bank']}</td>";
                                        echo "<td>{$row['drc_status']}</td>";
                                        echo "<td>{$row['drc_tier']}</td>";
                                        echo "<td class='wrap-column drc_lokasi'>" . (!empty($row['drc_lokasi']) ? $row['drc_lokasi'] : '-') . "</td>";
                                        echo '<td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_assets' . $row['kode_bank'] . '">
                                                        <i class="ti ti-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal" data-kode="' . $row['kode_bank'] . '">
                                                        <i class="ti ti-trash"></i>
                                                    </a>
                                                </div>
                                            </td>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <?php
                            mysqli_data_seek($result, 0); // reset result pointer
                            while ($row = mysqli_fetch_assoc($result)) {
                                $kode = htmlspecialchars($row['kode_bank']);
                                $nama = htmlspecialchars($row['nama_bank']);
                                $drc_status = htmlspecialchars($row['drc_status']);
                                $drc_tier = htmlspecialchars($row['drc_tier']);
                                $drc_lokasi = htmlspecialchars($row['drc_lokasi']);
                                ?>
                                <div class="modal fade" id="edit_assets<?= $kode ?>" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <form action="drc_edit.php" method="POST" class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Data DC/DRC</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                    <i class="ti ti-x"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body pb-3">
                                                <div class="row">
                                                    <input type="hidden" name="kode_bank" value="<?= $kode ?>">

                                                    <!-- Kode & Nama Bank -->
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Kode Bank</label>
                                                            <input type="text" class="form-control" value="<?= $kode ?>"
                                                                disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nama Bank</label>
                                                            <input type="text" class="form-control" value="<?= $nama ?>"
                                                                disabled>
                                                        </div>
                                                    </div>

                                                    <!-- DRC -->
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Kepemilikan DRC</label>
                                                            <select class="form-select" name="drc_status">
                                                                <option value="">Pilih</option>
                                                                <option <?= $drc_status == 'Milik Sendiri' ? 'selected' : '' ?>>Milik Sendiri</option>
                                                                <option <?= $drc_status == 'Colocation' ? 'selected' : '' ?>>
                                                                    Colocation</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Tier DRC</label>
                                                            <select class="form-select" name="drc_tier">
                                                                <option value="">Pilih</option>
                                                                <option <?= $drc_tier == 'Tier 1' ? 'selected' : '' ?>>Tier 1
                                                                </option>
                                                                <option <?= $drc_tier == 'Tier 2' ? 'selected' : '' ?>>Tier 2
                                                                </option>
                                                                <option <?= $drc_tier == 'Tier 3' ? 'selected' : '' ?>>Tier 3
                                                                </option>
                                                                <option <?= $drc_tier == 'Tier 4' ? 'selected' : '' ?>>Tier 4
                                                                </option>
                                                                <option <?= $drc_tier == 'Belum Sertifikasi Tier' ? 'selected' : '' ?>>Belum Sertifikasi Tier</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="mb-3">
                                                            <label class="form-label">Lokasi DRC</label>
                                                            <input type="text" class="form-control" name="drc_lokasi"
                                                                value="<?= $drc_lokasi ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light me-2"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
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
        <!-- Modal -->
        <div class="modal fade" id="add_assets" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <form action="drc_add.php" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Bank</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">
                            <div class="row g-3">
                                <!-- Kode Bank -->
                                <div class="col-md-6">
                                    <label class="form-label">Kode Bank</label>
                                    <select id="kode_bank" name="kode_bank" class="form-select select2">
                                        <option value="">Pilih Kode Bank</option>
                                        <?php foreach ($bankList as $bank): ?>
                                            <option value="<?= $bank['kode_bank'] ?>"><?= $bank['kode_bank'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <!-- Nama Bank -->
                                <div class="col-md-6">
                                    <label class="form-label">Nama Bank</label>
                                    <select id="nama_bank" class="form-select select2">
                                        <option value="" s>Pilih Nama Bank</option>
                                        <?php foreach ($bankList as $bank): ?>
                                            <option value="<?= $bank['kode_bank'] ?>"><?= $bank['nama_bank'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="col-md-4">
                                    <label class="form-label">Kepemilikan DRC</label>
                                    <select class="form-select" name="drc_status">
                                        <option value="">Pilih</option>
                                        <option>
                                            Milik Sendiri</option>
                                        <option>
                                            Colocation</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Tier DRC</label>
                                        <select class="form-select" name="drc_tier">
                                            <option value="">Pilih</option>
                                            <option>Tier 1
                                            </option>
                                            <option>Tier 2
                                            </option>
                                            <option>Tier 3
                                            </option>
                                            <option>Tier 4
                                            </option>
                                            <option>Belum
                                                Sertifikasi Tier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Lokasi DRC</label>
                                        <input type="text" class="form-control" name="drc_lokasi" placeholder="...">
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
        </div>
        <!-- /Tambah Bank -->

        <!-- Delete Modal -->
        <div class="modal fade" id="delete_modal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center">
                    <div class="modal-body">
                        <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                            <i class="ti ti-trash-x fs-36"></i>
                        </span>
                        <h4 class="mb-1">Konfirmasi Hapus</h4>
                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                        <a id="confirmDeleteBtn" class="btn btn-danger">Ya, Hapus</a>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
            confirmBtn.href = 'drc_delete.php?kode_bank=' + encodeURIComponent(kodeBank);
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.select2').select2({
                dropdownParent: $('#add_assets'),
                placeholder: "Cari..."
            });

            // Sinkronisasi
            $('#kode_bank').on('change', function () {
                $('#nama_bank').val($(this).val()).trigger('change');
            });

            $('#nama_bank').on('change', function () {
                $('#kode_bank').val($(this).val()).trigger('change');
            });
        });
    </script>
</body>

</html>