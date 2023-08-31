<?php 
    $get_url = "http://localhost" . $_SERVER["REQUEST_URI"];
    $this_file_url = "http://localhost" . dirname($_SERVER["PHP_SELF"]) . "/function.php";
    
    if($get_url == $this_file_url){
        header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
        exit;
    }

    $conn = mysqli_connect("localhost", "root", "", "dbsmk");

    if(!$conn){
        die(mysqli_connect_error());
    }

    function tabel_siswa(){
        global $conn;
        $query = "SELECT * FROM tbpendaftaran";
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function edit_siswa($id_daftar){
        global $conn;
        $query = "SELECT * FROM tbpendaftaran WHERE id_daftar=$id_daftar";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            return mysqli_fetch_assoc($result);
        }else{
            return "Kosong";
        }
    }
?>