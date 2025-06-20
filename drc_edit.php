<?php
include('layouts/config.php');

$kode_bank = trim($_POST['kode_bank']);
$drc_status = $_POST['drc_status'];
$drc_tier = $_POST['drc_tier'];
$drc_lokasi = $_POST['drc_lokasi'];

$queryDRC = "
    UPDATE dr_center 
    SET status = '$drc_status', tier = '$drc_tier', lokasi = '$drc_lokasi' 
    WHERE kode_bank = '$kode_bank'
";

if (!mysqli_query($link, $queryDRC)) {
    die("Gagal menyimpan data DRC: " . mysqli_error($link));
}

// Jika sukses, redirect
header("Location: drc.php");
exit;
?>