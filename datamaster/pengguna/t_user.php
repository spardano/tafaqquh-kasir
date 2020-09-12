<?php
// memasukkan koneksi
include "../../koneksi.php";
// memanggil variable dan nilai – nilai nya .
$user = $_POST['nama'];
$pwd = md5($_POST['pwd']);
$level= $_POST['bag'];
$jabatan="";

if($level == 1){
	$jabatan ='Admin';
}
else if ($level == 3){
	$jabatan ='Pimpinan';
}
else if ($level == 2){
	$jabatan ='Front Office';
}
else {
	$jabatan ='office';
}

$gambar= $_POST['gambar'];
//memasukkan nilai nilai ke dalam table
$perintah = "INSERT INTO `tafaqquh`.`data_pengguna` (`IdUser`, `UserName`, `Password`, `LevelUser`, `Jabatan`) VALUES ('', '$user', '$pwd', '$level', '$jabatan')";
$sql = mysql_query($perintah);
if($sql){
	if($_GET['level'] == 0){
		 echo "<script>window.location = '../../super.php?hlm=pengguna'</script>";
	}else {
		echo "<script>window.location = '../../admin.php?hlm=user'</script>";
	}
}
?>