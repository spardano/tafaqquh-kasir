<?php
//panggil file config.php untuk menghubung ke server
include('../../koneksi.php');

//tangkap data dari form
$id_pegawai = $_POST['id_pegawai'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];

//simpan data ke database
$sql= "insert into pegawai (`id_pegawai`,`nama`, `jk`, `alamat`, `no_hp`, `jabatan`)
	  values('$id_pegawai', '$nama', '$jk','$alamat', '$no_hp', '$jabatan')";

$query= mysql_query($sql);


if($query){
	if($_GET['level'] == 0){
		 echo "<script>window.location = '../../super.php?hlm=pegawai'</script>";
	}else {
		echo "<script>window.location = '../../admin.php?hlm=pegawai'</script>";
	}
}
?>