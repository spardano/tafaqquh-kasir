<?php
// memasukkan koneksi
include "../../koneksi.php";
// memanggil variable dan nilai – nilai nya .
$data=$_GET['username'];
$query=mysql_query("delete from data_pengguna where UserName='$data'");
if($query){
	if($_GET['level'] == 0){
		 echo "<script>  window.location = '../../super.php?hlm=pengguna'</script>";
	}else {
		echo "<script>  window.location = '../../admin.php?hlm=user'</script>";
	}
}
?>