<?php include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM kelasku WHERE id=$id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>EDIT DATA ALUMNI</h2>
    <form method="POST">
        <input type="text" name="nama" value="<?=$data['nama']?>" required>
        <input type="text" name="nik" value="<?=$data['nik']?>" required>
        <input type="text" name="nisn" value="<?=$data['nisn']?>" required>
        <input type="text" name="tempat_lahir" value="<?=$data['tempat_lahir']?>" required>
        <input type="date" name="tanggal_lahir" value="<?=$data['tanggal_lahir']?>" required>
        <textarea name="alamat" required><?=$data['alamat']?></textarea>
        <input type="number" name="tahun_lulus" value="<?=$data['tahun_lulus']?>" required>
        <input type="text" name="jurusan" value="<?=$data['jurusan']?>" required>
        <button type="submit" name="update">Perbarui</button>
    </form>

    <?php
    if(isset($_POST['update'])) {
        $sql = "UPDATE kelasku SET
        nama='$_POST[nama]', 
        nik='$_POST[nik]', 
        nisn='$_POST[nisn]', 
        tempat_lahir='$_POST[tempat_lahir]', 
        tanggal_lahir='$_POST[tanggal_lahir]', 
        alamat='$_POST[alamat]', 
        tahun_lulus='$_POST[tahun_lulus]', 
        jurusan='$_POST[jurusan]' WHERE id=$id";

        mysqli_query($conn,$sql);
        echo "<p> Data Berhasil Diperbarui<a href='index.php'>Kembali</a></p>";
    }
    ?>
</body>
</html>