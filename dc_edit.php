<?php
include('layouts/config.php');

$kode_bank = trim($_POST['kode_bank']);
$dc_status = $_POST['dc_status'];
$dc_tier = $_POST['dc_tier'];
$dc_lokasi = $_POST['dc_lokasi'];

// === HANDLE DC === //
$cekDC = mysqli_query($link, "SELECT * FROM data_center WHERE kode_bank = '$kode_bank'");
if (mysqli_num_rows($cekDC) > 0) {
    // UPDATE
    $queryDC = "
        UPDATE data_center 
        SET status = '$dc_status', tier = '$dc_tier', lokasi = '$dc_lokasi' 
        WHERE kode_bank = '$kode_bank'
    ";
} else {
    // INSERT
    $queryDC = "
        INSERT INTO data_center (kode_bank, status, tier, lokasi)
        VALUES ('$kode_bank', '$dc_status', '$dc_tier', '$dc_lokasi')
    ";
}
if (!mysqli_query($link, $queryDC)) {
    die("Gagal menyimpan data DC: " . mysqli_error($link));
}

// Jika sukses, redirect
header("Location: dc.php");
exit;
?>