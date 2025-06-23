<?php
include('layouts/config.php');

if (!isset($_GET['kode_bank'])) {
    die("Kode bank tidak ditemukan.");
}

$kode_bank = trim($_GET['kode_bank']);

// Gunakan prepared statement untuk keamanan
$stmt = mysqli_prepare($link, "DELETE FROM data_center WHERE kode_bank = ?");
mysqli_stmt_bind_param($stmt, "s", $kode_bank);

if (!mysqli_stmt_execute($stmt)) {
    die("Gagal menghapus data DC: " . mysqli_error($link));
}

mysqli_stmt_close($stmt);

// Redirect kembali ke halaman utama
header("Location: dc.php");
exit;
?>