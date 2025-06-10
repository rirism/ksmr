<?php
include 'layouts/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    // Cek apakah email sudah digunakan
    $stmt = $link->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>alert('Email sudah terdaftar.); window.location.href='index.php';</script>";
        $stmt->close();
        $link->close();
        exit;
    }

    $stmt->close();

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Simpan ke database
    $stmt = $link->prepare("INSERT INTO users (firstname, lastname, username, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $hashed_password);

    if ($stmt->execute()) {
        echo "<script>alert('Pendaftaran Berhasil.'); window.location.href='index.php';</script>";
    } else {
        echo "Terjadi kesalahan: " . $stmt->error;
    }

    $stmt->close();
    $link->close();
} else {
    echo "<script>alert('Akses tidak valid.'); window.location.href='index.php';</script>";
}