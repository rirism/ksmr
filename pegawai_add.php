<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'layouts/config.php'; // Pastikan file config.php ini ada dan berisi koneksi ke $link

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $nip = $_POST['nip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $team = $_POST['team'];
    $pangkat = $_POST['pangkat'];
    $jabatan = $_POST['jabatan'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Cek apakah username atau email sudah ada
    $check = mysqli_query($link, "SELECT * FROM users WHERE username='$username' OR email='$email'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Username atau Email sudah terdaftar!'); window.history.back();</script>";
        exit;
    }

    // Query simpan TANPA kolom address dan tanggalbergabung
    $sql = "INSERT INTO users (firstname, lastname, username, email, password, phone, nip, team, pangkat, jabatan)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ssssssssss", 
        $firstname, $lastname, $username, $email, $password, $phone,
        $nip, $team, $pangkat, $jabatan
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='pegawai.php';</script>";
    } else {
        echo "Gagal simpan data: " . mysqli_error($link);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($link);
} else {
    echo "Akses ditolak.";
}
?>