<?php
include '../koneksi.php';
$awal=$_GET['awal'];
$akhir=$_GET['akhir'];
function rupiah($bilangan){
	$pecahan=number_format($bilangan,0,',','.');
	echo"Rp.";
	return $pecahan;
}

$sql_film="select a.*, b.* from kegiatan_bazar as a, pegawai as b where a.PenanggungJawab = b.id_pegawai and a.TglMulai between '$awal' and '$akhir'";
$result=mysql_query($sql_film) or die(mysql_error());
$no=1;
while($rows = mysql_fetch_array($result)){
 
$hasil=$hasil."
<tr>
<td>$no</td>
<td>$rows[NamaKegiatan]</td>
<td>$rows[nama]</td>s
<td>$rows[LokasiKegiatan]</td>
<td><a href='bazar/lapor_bazar_detail.php?bazar=$rows[IdKegiatan]' class='btn btn-primary'>Detail</a></td>
</tr>
";
 
 $no++;
}

echo $hasil;
?>