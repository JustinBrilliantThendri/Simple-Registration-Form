<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <style>
        *{
            font-family : calibri;
        }
        textarea{
            vertical-align : text-top;
            resize : none;
        }
    </style>
</head>
<body>
    <?php 
        require "function.php";

        if(!isset($_GET["id_daftar"]) || $_GET["id_daftar"] == ""){
            header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
            exit;
        }

        $data_siswa = edit_siswa($_GET["id_daftar"]);

        if($data_siswa == "Kosong"){
            header("Location: http://localhost" . dirname($_SERVER["PHP_SELF"]));
            exit;
        }
    ?>
    <form action="proses-edit.php" method="post">
        <input type="hidden" name="id_daftar" value="<?= $data_siswa["id_daftar"] ?>">
        <label for="nama-siswa">Nama Siswa :&nbsp;</label>
        <input type="text" name="nama_siswa" id="nama-siswa" value="<?= $data_siswa["nama_siswa"] ?>" required>
        <br><br>
        <label for="alamat">Alamat :&nbsp;</label>
        <textarea name="alamat" id="alamat" rows="2" cols="30" required><?= $data_siswa['alamat'] ?></textarea>
        <br><br>
        <label>Jenis Kelamin :&nbsp;</label>
        <label>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" <?= ($data_siswa['jenis_kelamin'] == "Laki-Laki") ? "checked" : "" ?> required>Laki-Laki
        </label>
        <label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($data_siswa['jenis_kelamin'] == "Perempuan") ? "checked" : "" ?> required>Perempuan
        </label>
        <br><br>
        <label for="agama">Agama :&nbsp;</label>
        <select name="agama" id="agama" required>
            <option value="Kristen" <?= ($data_siswa["agama"] == "Kristen") ? "selected" : "" ?>>Kristen</option>
            <option value="Katolik" <?= ($data_siswa["agama"] == "Katolik") ? "selected" : "" ?>>Katolik</option>
            <option value="Budha" <?= ($data_siswa["agama"] == "Budha") ? "selected" : "" ?>>Budha</option>
            <option value="Hindu" <?= ($data_siswa["agama"] == "Hindu") ? "selected" : "" ?>>Hindu</option>
            <option value="Islam" <?= ($data_siswa["agama"] == "Islam") ? "selected" : "" ?>>Islam</option>
            <option value="Kong Hu Cu" <?= ($data_siswa["agama"] == "Kong Hu Cu") ? "selected" : "" ?>>Kong Hu Cu</option>
        </select>
        <br><br>
        <label for="asal-sekolah">Asal Sekolah :&nbsp;</label>
        <input type="text" name="asal_sekolah" id="asal-sekolah" value="<?= $data_siswa["asal_sekolah"] ?>" required>
        <br><br><br>
        <button type="submit" onclick="return confirm('Apakah anda yakin untuk mengeditnya?');">Edit</button>
    </form>
</body>
</html>