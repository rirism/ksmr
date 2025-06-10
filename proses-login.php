<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start(); // ini WAJIB kalau pakai $_SESSION

include "layouts/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Pakai prepared statement dengan hasil yang benar
    $stmt = $link->prepare("SELECT username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['status'] = "login";
            header("Location: admin-dashboard.php");
            exit();
        } else {
            echo "<script>alert('Password Salah.'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('User tidak ditemukan.'); window.location.href='index.php';</script>";
    }

    $stmt->close();
    $link->close();
} else {
    echo "<script>alert('Akses tidak valid.'); window.location.href='index.php';</script>";
}