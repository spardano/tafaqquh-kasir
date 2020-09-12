<?php include "../../koneksi.php";


$sql = "DELETE FROM data_instansi WHERE IdInstansi = '".$_GET['IdInstansi']."'";
$hapus = mysql_query($sql);
if ($sql){

echo "<script>alert('Yakin Ingin Menghapus Data ?'); window.location = '../../admin.php?hlm=instansi';</script>";

} else {

echo "<script>alert('Gagal di Hapus'); window.location = '../../admin.php?hlm=instansi';</script>";

}

?>