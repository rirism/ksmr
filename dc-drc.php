<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Bank | Sistem Informasi Pengawasan Treasuri/Market</title>
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
            dc.lokasi AS dc_lokasi,
            dr.status AS drc_status, 
            dr.tier AS drc_tier, 
            dr.lokasi AS drc_lokasi
        FROM bank b
        LEFT JOIN data_center dc ON dc.kode_bank = b.kode_bank
        LEFT JOIN dr_center dr ON dr.kode_bank = b.kode_bank
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
                                        <th>Kepemilikan DC</th>
                                        <th>Tier DC</th>
                                        <th class="dc-lokasi">Lokasi DC</th>
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
                                        echo "<td>" . (!empty($row['dc_status']) ? $row['dc_status'] : '-') . "</td>";
                                        echo "<td>". (!empty($row["dc_tier"]) ? $row['dc_tier'] :'-') . '</td>';
                                        echo '<td>'. (!empty($row['dc_lokasi']) ? $row['dc_lokasi'] :'-') . '</td>';
                                        echo '<td>'. (!empty($row['drc_status']) ? $row['drc_status'] :'-') . '</td>';
                                        echo '<td>'. (!empty($row['drc_tier']) ? $row['drc_tier'] :'-') . '</td>';
                                        echo '<td>'. (!empty($row['lokasi']) ? $row['drc_lokasi'] :'-') . '</td>';
                                        echo '<td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_assets">
                                                        <i class="ti ti-edit"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#delete_modal">
                                                        <i class="ti ti-trash"></i>
                                                    </a>
                                                </div>
                                            </td>';
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