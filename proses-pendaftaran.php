<?php 
    require "function.php";

    if(!isset($_POST["nama_siswa"]) || !isset($_POST["alamat"]) || !isset($_POST["jenis_kelamin"]) || !isset($_POST["agama"]) || !isset($_POST["asal_sekolah"])){
        header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
        exit;
    }

    $nama_siswa = $_POST["nama_siswa"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $asal_sekolah = $_POST["asal_sekolah"];

    $query = "INSERT INTO tbpendaftaran (nama_siswa, alamat, jenis_kelamin, agama, asal_sekolah) VALUES ('$nama_siswa', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')";

    mysqli_query($conn, $query);

    header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
    exit;
?>