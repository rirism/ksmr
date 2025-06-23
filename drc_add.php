<?php
include 'layouts/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_bank = mysqli_real_escape_string($link, $_POST['kode_bank']);
    $drc_status = mysqli_real_escape_string($link, $_POST['drc_status']);
    $drc_tier = mysqli_real_escape_string($link, $_POST['drc_tier']);
    $drc_lokasi = mysqli_real_escape_string($link, $_POST['drc_lokasi']);

    // Validasi dasar
    if (empty($kode_bank)) {
        die("Bank tidak boleh kosong.");
    }

    $query = "
            INSERT INTO dr_center (kode_bank, status, tier, lokasi)
            VALUES ('$kode_bank', '$drc_status', '$drc_tier', '$drc_lokasi')
        ";

    if (mysqli_query($link, $query)) {
        // Redirect kembali ke halaman utama
        header("Location: drc.php"); // sesuaikan dengan nama file list kamu
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($link);
    }
} else {
    echo "Metode tidak diperbolehkan.";
}
?>