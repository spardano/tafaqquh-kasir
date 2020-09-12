<?php
//panggil file config.php untuk menghubung ke server
include('../koneksi.php');
//tangkap data dari form
//$id_lb = $_POST['id_lb'];
$id_buku = $_POST['IdBuku'];
$id_bazar = $_POST['bazar'];
$JumlahBuku = $_POST['bawa'];
$sql3 = mysql_query("SELECT * FROM `list_bazar` WHERE id_buku=$id_buku and id_bazar='$id_bazar'");
$cek = mysql_fetch_array($sql3);

if($cek['id_buku']==null ){



//simpan data ke database
$sql= "insert into list_bazar (`id_lb`,`id_buku`,`id_bazar`, `JumlahBuku`)
	  values('', '$id_buku', '$id_bazar','$JumlahBuku')";


$query= mysql_query($sql);
if ($query) {

	echo "<script> window.location = '../office_bazar.php?hlm=data_buku';</script>";
}
}
else{
	echo "<script> window.location = '../office_bazar.php?hlm=data_buku'; </script>";
}
?>
