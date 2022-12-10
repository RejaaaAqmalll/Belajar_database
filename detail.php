<?php
include "koneksi.php";
$nis=$_GET['nis'];
$query="SELECT * FROM tb_siswa WHERE nis='$nis'";
$hasil=mysqli_query($koneksi,$query);
$data=mysqli_fetch_array($hasil);
?>
<table border="1">
    <tr><td>Nis</td><td>:</td><td><?php echo $data['nis'];?></td></tr>
    <tr><td>Nama</td><td>:</td><td><?php echo $data['Nama'];?></td></tr>
</table>