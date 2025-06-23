<?php
include('layouts/config.php');

$kode_bank = trim($_POST['kode_bank']);
$dc_status = $_POST['dc_status'];
$dc_tier = $_POST['dc_tier'];
$dc_lokasi = $_POST['dc_lokasi'];

$queryDC = "
    UPDATE data_center 
    SET status = '$dc_status', tier = '$dc_tier', lokasi = '$dc_lokasi' 
    WHERE kode_bank = '$kode_bank'
";

if (!mysqli_query($link, $queryDC)) {
    die("Gagal menyimpan data DC: " . mysqli_error($link));
}

// Jika sukses, redirect
header("Location: dc.php");
exit;
?>