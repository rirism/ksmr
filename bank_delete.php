<?php
session_start();
include 'layouts/config.php';

if (isset($_GET['kode_bank'])) {
    $kode_bank = $_GET['kode_bank'];

    $query = "DELETE FROM bank WHERE kode_bank = ?";
    $stmt = mysqli_prepare($link, $query);
    mysqli_stmt_bind_param($stmt, "s", $kode_bank);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: bank.php?status=hapus_berhasil");
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($link);
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Kode bank tidak diberikan.";
}
mysqli_close($link);