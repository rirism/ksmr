<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'layouts/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_bank = $_POST['kode_bank'];
    $nama_bank = $_POST['nama_bank'];
    $dealer_utama = $_POST['dealer_utama']; // ini akan "1" atau "0"

    $query = "INSERT INTO bank (kode_bank, nama_bank, isdealerutama) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "ssi", $kode_bank, $nama_bank, $dealer_utama);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: bank.php?status=tambah_berhasil");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($link);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    echo "Akses tidak sah.";
}