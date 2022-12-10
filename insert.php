<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data Siswa</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1">
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
            </td>
            </tr>
        </table>
    </form>
    <?php
include "koneksi.php";
    @$nis=$_POST['nis'];
    @$nama=$_POST['nama'];
    @$kirim=$_POST['submit'];
    @$query="INSERT INTO tb_siswa (nis,nama) VALUES ('$nis','$nama')";

if ($kirim) {
    $hasil=mysqli_query($koneksi,$query);
    echo "Data berhasil disimpan  ";
    echo "<a href='tampil.php'>Lihat Data</a>";
}
    ?>
</body>
</html>
<?php
echo "<a href='insert.php'>Daftar</a>"
?>