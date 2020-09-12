<?php
include "../../koneksi.php";

$nisn = $_POST['pass'];
$usn = $_POST['name'];
$pwd = md5($_POST['pwd']);
$level = $_POST['bag'];
$id=$_GET['IdUser'];
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


$query=mysql_query("update data_pengguna set UserName='$usn', Password='$pwd', LevelUser='$level', Jabatan='$jabatan' where IdUser='$id'");
if($query){
	if($_GET['level'] == 0){
		 echo "<script>window.location = '../../super.php?hlm=pengguna'</script>";
	}else {
		echo "<script>window.location = '../../admin.php?hlm=user'</script>";
	}
}
?>