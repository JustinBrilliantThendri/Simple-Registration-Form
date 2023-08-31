<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <style>
        *{
            font-family : calibri;
        }
        table, tr, th, td{
            border : 1px solid black;
            border-collapse : collapse;
        }
        th, td{
            padding : 10px;
        }
    </style>
</head>
<body>
    <?php 
        require "function.php";
        $siswa = tabel_siswa();
    ?>
    <a href="form-daftar.php">Daftar</a>
    <br><br>
    <table>
        <tr>
            <th>ID Daftar</th>
            <th>Nama Siswa</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Asal Sekolah</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($siswa as $row): ?>
            <tr>
                <td><?= $row["id_daftar"] ?></td>
                <td><?= $row["nama_siswa"] ?></td>
                <td><?= $row["alamat"] ?></td>
                <td><?= $row["jenis_kelamin"] ?></td>
                <td><?= $row["agama"] ?></td>
                <td><?= $row["asal_sekolah"] ?></td>
                <td>
                    <a href="hapus.php?id_daftar=<?= $row["id_daftar"] ?>" onclick="return confirm('Apakah anda yakin untuk menghapusnya?');">Hapus</a>
                    <label>|</label>
                    <a href="form-edit.php?id_daftar=<?= $row["id_daftar"] ?>">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <p>&copy; - <?= date("Y") ?></p>
</body>
</html>