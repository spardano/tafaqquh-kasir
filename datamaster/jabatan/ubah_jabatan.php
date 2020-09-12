<?php include '../../koneksi.php';

//tangkap data dari form
$id_pegawai = $_POST['IdJabatan'];
$nama = $_POST['nama'];
$level = $_POST['level'];



//simpan data ke database
$sql = mysql_query("update jabatan set NamaJabatan='$nama', level='$level' 
					where IdJabatan='$id_pegawai'");

$query = mysql_query($sql);

echo "<script>window.location = 'admin.php?hlm=data_jabatan';</script>";


?>