<?php include "../../koneksi.php";


$sql = "DELETE FROM jabatan WHERE IdJabatan = '".$_GET['IdJabatan']."'";
$hapus = mysql_query($sql);
if ($sql){

echo "<script> window.location = '../../admin.php?hlm=jabatan';</script>";

} 

?>