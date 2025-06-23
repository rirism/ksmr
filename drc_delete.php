<?php
include('layouts/config.php');

if (!isset($_GET['kode_bank'])) {
    die("Kode bank tidak ditemukan.");
}

$kode_bank = trim($_GET['kode_bank']);

// Gunakan prepared statement untuk keamanan
$stmt = mysqli_prepare($link, "DELETE FROM dr_center WHERE kode_bank = ?");
mysqli_stmt_bind_param($stmt, "s", $kode_bank);

if (!mysqli_stmt_execute($stmt)) {
    die("Gagal menghapus data DRC: " . mysqli_error($link));
}

mysqli_stmt_close($stmt);

// Redirect kembali ke halaman utama
header("Location: drc.php");
exit;
?>