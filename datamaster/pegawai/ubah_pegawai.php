<?php include '../../koneksi.php';

//tangkap data dari form
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];

//simpan data ke database
$sql = mysql_query("update pegawai set nama='$nama', jk= '$jk', alamat='$alamat', no_hp='$no_hp', jabatan='$jabatan' 
					where id_pegawai='$id_pegawai'");


if($sql){
	if($_GET['level'] == 0){
		 echo "<script>window.location = '../../super.php?hlm=pegawai'</script>";
	}else {
		echo "<script>window.location = '../../admin.php?hlm=pegawai'</script>";
	}
}

?>