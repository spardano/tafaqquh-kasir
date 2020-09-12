<?php include '../../koneksi.php';

//tangkap data dari form
$id_pegawai = $_POST['IdInstansi'];
$nama = $_POST['NamaInstansi'];
$alamat = $_POST['AlamatInstansi'];
$no = $_POST['NoInstansi'];



//simpan data ke database
$sql = mysql_query("update data_instansi set NamaInstansi='$nama', AlamatInstansi='$alamat', NoInstansi='$no' 
					where IdInstansi='$id_pegawai'");

$query = mysql_query($sql);

echo "<script>window.location = '../../admin.php?hlm=instansi';</script>";


?>