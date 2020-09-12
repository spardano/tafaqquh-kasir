<?php include "../../koneksi.php";


$sql = "DELETE FROM data_buku WHERE IdBuku = '".$_GET['IdBuku']."'";
$hapus = mysql_query($sql);
if ($sql){

echo "<script>alert('Yakin Ingin Menghapus Data ?'); window.location ='../../admin.php?hlm=data_buku';</script>";

} else {

echo "<script>alert('Gagal di Hapus'); window.location = '../../admin.php?hlm=data_buku';</script>";

}

?>