<?php include '../../koneksi.php';

//tangkap data dari form
$IdBuku = $_POST['IdBuku'];
$NamaBuku = $_POST['NamaBuku'];
$penerbit = $_POST['penerbit'];
$HargaSatuan = $_POST['HargaSatuan'];


//simpan data ke database


$sql = "update data_buku set NamaBuku='$NamaBuku', IdPenerbit= '$penerbit', HargaSatuan='$HargaSatuan' where IdBuku='$IdBuku'";

$query = mysql_query($sql);

if ($query) {
	
	echo "<script> window.location = '../../admin.php?hlm=data_buku';</script>";
}



?>