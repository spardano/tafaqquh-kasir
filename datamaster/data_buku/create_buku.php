<?php
//panggil file config.php untuk menghubung ke server
include('../../koneksi.php');

//tangkap data dari form
$id_pegawai = $_POST['IdBuku'];
$nama = $_POST['NamaBuku'];
$penerbit = $_POST['penerbit'];
$HargaSatuan = $_POST['HargaSatuan'];
$jabatan = $_POST['jabatan'];

//simpan data ke database
$sql= "insert into data_buku (`IdBuku`,`NamaBuku`, `IdPenerbit`, `HargaSatuan`, `JumlahEx`)
	  values('$id_pegawai', '$nama', '$penerbit','$HargaSatuan', '0')";

echo $sql;
$query= mysql_query($sql);
if ($query) {
	
	echo "<script> window.location = '../../admin.php?hlm=data_buku';</script>";
}
?>