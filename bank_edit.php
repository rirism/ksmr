<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'layouts/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode_bank = $_POST['kode_bank'];
    $nama_bank = $_POST['nama_bank'];
    $dealer_utama = $_POST['dealer_utama'];

    $query = "UPDATE bank SET nama_bank = ?, isdealerutama = ? WHERE kode_bank = ?";
    $stmt = mysqli_prepare($link, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sis", $nama_bank, $dealer_utama, $kode_bank);

        if (mysqli_stmt_execute($stmt)) {
            header("Location: bank.php?status=edit_berhasil");
            exit;
        } else {
            echo "Gagal menyimpan perubahan: " . mysqli_error($link);
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Gagal mempersiapkan statement: " . mysqli_error($link);
    }

    mysqli_close($link);
} else {
    echo "Akses tidak sah.";
}
