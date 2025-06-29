<?php
include 'layouts/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_bank = mysqli_real_escape_string($link, $_POST['kode_bank']);
    $dc_status = mysqli_real_escape_string($link, $_POST['dc_status']);
    $dc_tier = mysqli_real_escape_string($link, $_POST['dc_tier']);
    $dc_lokasi = mysqli_real_escape_string($link, $_POST['dc_lokasi']);

    // Validasi dasar
    if (empty($kode_bank)) {
        die("Bank tidak boleh kosong.");
    }

    $query = "
            INSERT INTO data_center (kode_bank, status, tier, lokasi)
            VALUES ('$kode_bank', '$dc_status', '$dc_tier', '$dc_lokasi')
        ";

    if (mysqli_query($link, $query)) {
        // Redirect kembali ke halaman utama
        header("Location: dc.php"); // sesuaikan dengan nama file list kamu
        exit();
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($link);
    }
} else {
    echo "Metode tidak diperbolehkan.";
}
?>