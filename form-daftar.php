<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar</title>
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
    <form action="proses-pendaftaran.php" method="post">
        <label for="nama-siswa">Nama Siswa :&nbsp;</label>
        <input type="text" name="nama_siswa" id="nama-siswa" required>
        <br><br>
        <label for="alamat">Alamat :&nbsp;</label>
        <textarea name="alamat" id="alamat" rows="2" cols="30" required></textarea>
        <br><br>
        <label>Jenis Kelamin :&nbsp;</label>
        <label>
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki
        </label>
        <label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
        </label>
        <br><br>
        <label for="agama">Agama :&nbsp;</label>
        <select name="agama" id="agama" required>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Islam">Islam</option>
            <option value="Kong Hu Cu">Kong Hu Cu</option>
        </select>
        <br><br>
        <label for="asal-sekolah">Asal Sekolah :&nbsp;</label>
        <input type="text" name="asal_sekolah" id="asal-sekolah" required>
        <br><br><br>
        <button type="submit" onclick="return confirm('Apakah anda yakin untuk membuatnya?');">Daftar</button>
    </form>
</body>
</html>