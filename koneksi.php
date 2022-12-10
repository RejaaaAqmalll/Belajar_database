<?php
$host="localhost";
$user="root";
$pass="";
$db="db_biodata";

$koneksi=mysqli_connect($host,$user,$pass);
$db_koneksi=mysqli_select_db($koneksi,$db);
?>