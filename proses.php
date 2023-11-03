<?php
// proses.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $kelas = $_POST["kelas"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];

    // Menampilkan hasil input data siswa
    include 'hasil_view.php';
} else {
    // Redirect jika form tidak disubmit
    header("Location: form_siswa.php");
    exit();
}
?>
