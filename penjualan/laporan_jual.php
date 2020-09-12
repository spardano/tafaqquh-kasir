<?php
include '../koneksi.php';
$awal=$_GET['awal'];
$akhir=$_GET['akhir'];
function rupiah($bilangan){
	$pecahan=number_format($bilangan,0,',','.');
	echo"Rp.";
	return $pecahan;
}

$sql_film="SELECT a.*, b.*, c.*, d.* FROM detail_jual as a, jual as b, data_buku as c, data_pengguna as d WHERE a.no_faktur_jual=b.no_faktur_jual and a.IdBuku=c.IdBuku and b.IdPegawai = d.IdUser and b.tgl_transaksi BETWEEN '$awal' AND '$akhir'";
$result=mysql_query($sql_film) or die(mysql_error());
		 
while($rows = mysql_fetch_array($result)){
 
$hasil=$hasil."
<tr>
<td>$rows[id_jual_detail]</td>
<td>$rows[NamaBuku]</td>
<td align='right'>Rp.".rupiah($rows['HargaSatuan'])."</td>
<td>$rows[JumlahEx]</td>
<td>$rows[qty_jual]</td>
<td>$rows[tgl_transaksi]</td>
<td align='right'>Rp.".rupiah($rows['harga_sub'])."</td>
<td>$rows[UserName]</td>
</tr>
";
 
}

echo $hasil;
?>