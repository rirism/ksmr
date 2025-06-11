<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include "layouts/config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "<script>alert('Username dan Password wajib diisi.'); window.location.href='index.php';</script>";
        exit();
    }

    // Ambil user dari database
    $stmt = $link->prepare("SELECT username, email, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            // Login sukses, set session
            session_regenerate_id(true); // Hindari session fixation
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['status'] = "login";

            header("Location: admin-dashboard.php");
            exit();
        } else {
            echo "<script>alert('Password salah.'); window.location.href='index.php';</script>";
            exit();
        }
    } else {
        echo "<script>alert('User tidak ditemukan.'); window.location.href='index.php';</script>";
        exit();
    }

    $stmt->close();
    $link->close();
} else {
    echo "<script>alert('Akses tidak valid.'); window.location.href='index.php';</script>";
    exit();
}