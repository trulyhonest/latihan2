<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Alumni</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>DATA ALUMNI SEKOLAH</h2>
    <div class = "container-btn">
        <a href="tambah.php" class="btn-tambah">+Tambah Data</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>NIK</th>
            <th>NISN</th>
            <th>TEMPAT LAHIR</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
            <th>TAHUN LULUS</th>
            <th>JURUSAN</th>
            <th>UBAH</th>
        </tr>

        <?php
        $angka = 1;
        $result = mysqli_query($conn, "SELECT * FROM kelasku");
        while ($row = mysqli_fetch_assoc($result)){
            $no = $angka++;
            echo "<tr>
                <td>$no</td>
                <td>{$row['nama']}</td>
                <td>{$row['nik']}</td>
                <td>{$row['nisn']}</td>
                <td>{$row['tempat_lahir']}</td>
                <td>{$row['tanggal_lahir']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['tahun_lulus']}</td>
                <td>{$row['jurusan']}</td>
                <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='hapus.php?id={$row['id']}' onclick=\"return confirm('Anda yakin ingin menghapus data ini?')\">Hapus</a>
                </td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>