<?php
include "koneksi.php";
$nis=$_POST['nis'];
$nama=$_POST['nama'];

$query="UPDATE tb_siswa SET nama='$nama' WHERE nis='$nis';";
$hasil=mysqli_query($koneksi,$query);
if ($hasil) {
    header('location:tampil.php');
}else{
    echo "Gagal update data";
    echo mysqli_error();
}
?>