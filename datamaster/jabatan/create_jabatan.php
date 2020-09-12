<?php
//panggil file config.php untuk menghubung ke server
include('../../koneksi.php');

//tangkap data dari form
$nama = $_POST['jabatan'];
$level= $_POST['level'];

//simpan data ke database
$sql= "insert into jabatan (`IdJabatan`,`NamaJabatan`, `level`)values('', '$nama', '$level')";

echo $sql;
$query= mysql_query($sql);
if ($query) {
	echo "<script> window.location = '../../admin.php?hlm=jabatan';</script>";
}
?>