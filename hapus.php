<?php 
    require "function.php";

    if(!isset($_GET["id_daftar"]) || $_GET["id_daftar"] == ""){
        header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
        exit;
    }

    $id_daftar = $_GET["id_daftar"];

    $query = "DELETE FROM tbpendaftaran WHERE id_daftar=$id_daftar";

    mysqli_query($conn, $query);

    header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
    exit;
?>