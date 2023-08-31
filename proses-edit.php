<?php 
    require "function.php";

    if(!isset($_POST["id_daftar"]) || !isset($_POST["nama_siswa"]) || !isset($_POST["alamat"]) || !isset($_POST["jenis_kelamin"]) || !isset($_POST["agama"]) || !isset($_POST["asal_sekolah"])){
        header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
        exit;
    }

    $id_daftar = $_POST["id_daftar"];
    $nama_siswa = $_POST["nama_siswa"];
    $alamat = $_POST["alamat"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $agama = $_POST["agama"];
    $asal_sekolah = $_POST["asal_sekolah"];

    $query = "UPDATE tbpendaftaran SET nama_siswa='$nama_siswa', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', asal_sekolah='$asal_sekolah' WHERE id_daftar=$id_daftar";

    mysqli_query($conn, $query);

    header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
    exit;
?>