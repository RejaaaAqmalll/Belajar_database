<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Data</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th colspan="3">action</th>
        </tr>

<?php
include "koneksi.php";
$query="SELECT * FROM tb_siswa";
$hasil=mysqli_query($koneksi,$query);
$no=1;
$jum=mysqli_num_rows($hasil);
echo "Banyak data : ". $jum."<br>";
while ($data=mysqli_fetch_array($hasil)) {
?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data['nis'];?></td>
        <td><?php echo $data['Nama'];?></td>
        <td><a href="detail.php?nis=<?php echo $data['nis'];?>">Detail</a></td>
        <td><a href="form_update.php?nis=<?php echo $data['nis'];?>">Edit</a></td>
        <td><a href="delete.php?nis=<?php echo $data['nis'];?>"onclick="return confirm ('apakah anda yakin?')">Delete</a></td>
    </tr>
    <?php
}
?>
</table>
</body>
</html>
<?php
echo "<a href='insert.php'>Daftar</a>";
?>
