<?php
//panggil file config.php untuk menghubung ke server
include('../koneksi.php');

//tangkap data dari form
$NamaKegiatan = $_POST['NamaKegiatan'];
$PenanggungJawab = $_POST['PenanggungJawab'];
$LokasiKegiatan = $_POST['LokasiKegiatan'];
$TglMulai = $_POST['TglMulai'];
$TglSelesai = $_POST['TglSelesai'];
$Instansi = $_POST['IdInstansi'];

//simpan data ke database
$sql= "insert into kegiatan_bazar (`IdKegiatan`,`NamaKegiatan`, `LokasiKegiatan`, `TglMulai`, `TglSelesai`, `PenanggungJawab`, `IdInstansi`) values('', '$NamaKegiatan', '$LokasiKegiatan','$TglMulai', '$TglSelesai', '$PenanggungJawab', '$Instansi')";

$query= mysql_query($sql);
if ($query) {
	echo "<script> window.location = '../office_bazar.php?hlm=data_bazar';</script>";
}
?>