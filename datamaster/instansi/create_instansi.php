<?php
//panggil file config.php untuk menghubung ke server
include('../../koneksi.php');

//tangkap data dari form
$id_pegawai = $_POST['IdInstansi'];
$nama = $_POST['NamaInstansi'];
$alamat = $_POST['AlamatInstansi'];
$no = $_POST['NoInstansi'];

//simpan data ke database
$sql= "insert into data_instansi (`IdInstansi`,`NamaInstansi`, `AlamatInstansi`, `NoInstansi`)
	  values('', '$nama', '$alamat','$no')";

echo $sql;
$query= mysql_query($sql);
if ($query) {
	
	echo "<script> window.location = '../../admin.php?hlm=instansi';</script>";
}
?>