<?php
include "layouts/config.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hindari SQL Injection
    $stmt = $link->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Cek user di database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $link->query($sql);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Verifikasi password (anggap sudah di-hash dengan password_hash)
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
             $_SESSION['status'] = "login";
            header("Location: admin-dashboard.php"); // arahkan ke halaman dashboard
            exit();
        } else {
            echo "<script>alert('Password Salah.'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('User tidak ditemukan.'); window.location.href='index.php';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid.'); window.location.href='index.php';</script>";
}
?>