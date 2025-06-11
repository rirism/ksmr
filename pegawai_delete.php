<?php
require_once 'layouts/config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = mysqli_query($link, "DELETE FROM users WHERE id = $id");

    if ($query) {
        echo "<script>alert('Pegawai berhasil dihapus.'); window.location.href='pegawai.php';</script>";
    } else {
        echo "Gagal menghapus: " . mysqli_error($link);
    }
} else {
    echo "ID tidak ditemukan.";
}
?>