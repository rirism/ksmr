<?php
session_start();

if (isset($_SESSION["username"])) {
    // Jika pengguna telah login
    unset($_SESSION["username"]); // Hapus data sesi username
    $_SESSION = array(); // Hapus semua data sesi
    session_destroy(); // Hancurkan sesi
    // Redirect ke halaman login
    header("Location: index.php");
    exit();
} else {
    // Jika pengguna belum login, arahkan ke halaman login
    header("Location: index.php");
    exit();
}
?>
