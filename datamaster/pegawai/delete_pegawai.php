<?php include "../../koneksi.php";


$sql = "DELETE FROM pegawai WHERE id_pegawai = '".$_GET['id_pegawai']."'";
$hapus = mysql_query($sql);

if($hapus){
	if($_GET['level'] == 0){
		 echo "<script>window.location = '../../super.php?hlm=pegawai'</script>";
	}else {
		echo "<script>window.location = '../../admin.php?hlm=pegawai'</script>";
	}
}


?>