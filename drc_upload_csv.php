<?php
include('layouts/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['csv_file'])) {
    $file = $_FILES['csv_file']['tmp_name'];
    $handle = fopen($file, 'r');
    $imported = 0;

    if ($handle !== FALSE) {
        fgetcsv($handle); // skip header
        while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
            $kode_bank = mysqli_real_escape_string($link, $data[0]);
            $status    = mysqli_real_escape_string($link, $data[1]);
            $tier      = mysqli_real_escape_string($link, $data[2]);
            $lokasi    = mysqli_real_escape_string($link, $data[3]);

            $query = "INSERT INTO dr_center (kode_bank, status, tier, lokasi)
                      VALUES ('$kode_bank', '$status', '$tier', '$lokasi')";
            mysqli_query($link, $query);
            $imported++;
        }
        fclose($handle);
        header("Location: drc.php?success=1&rows=$imported");
        exit;
    }
}

header("Location: drc.php?error=1");
exit;