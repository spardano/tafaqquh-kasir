<html>
<head>
<title>Laporan Penjualan</title>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<body onload="window.print()">
<?php
include "../koneksi.php";


$hitung=0;
$awl = $_GET['awal'];
$akh = $_GET['akhir'];

$sql_film="SELECT a.*, b.*, c.* FROM detail_jual as a, jual as b, data_buku as c WHERE a.no_faktur_jual=b.no_faktur_jual and a.IdBuku=c.IdBuku and b.tgl_transaksi BETWEEN '$awl' AND '$akh'";

$sql = mysql_query($sql_film);

function rupiah($bilangan){
	$pecahan=number_format($bilangan,0,',','.');
	return $pecahan;
}

?>
<center>

<table>
<tr>
<td align='left' width="20%">
<img src="../images/logo_tafaqquh.png" width="60%" style="margin-left:100px;"/>
</td>
<td align='center'><h2>TOKO BUKU TAFAQQUH</h2><br/>
<p>Jl. Sudirman Komplek Perkantoran Sudirman Raya Blok D</p>
</td>
</tr>
</table>
<hr width="100%"></hr>
<h3> Laporan Penjualan Toko Buku Tafaqquh </h3>
<h4>Tanggal Periode : <?php echo $awl ?> s/d <?php echo $akh ?></h4>

<table border="1">
<thead>
<tr>
<td>No</td>
	<td>Nama Buku</td>
	<td>Harga Jual</td>
	<td>Jumlah Pembelian</td>
	<td>Total</td>
	<td>diskon %</td>
	<td>Tanggal Transaksi</td>
</tr>

</thead>
<tbody>

<?php 
$no=1;
while($data = mysql_fetch_array($sql)) { ?>
<tr>
<td><?php echo $no ?></td>
	<td><?php echo $data['NamaBuku']  ?></td>
	<td align='right'>Rp.<?php echo rupiah($data['HargaSatuan']);  ?></td>
	<td><?php echo $data['qty_jual']  ?></td>
	<td align='right'>Rp.<?php echo rupiah($data['harga_sub']);  ?></td>
	<td><?php echo $data['diskon']  ?></td>
	<td><?php echo $data['tgl_transaksi']  ?></td>
	</tr>
	<?php
	$no++;
	$hitung += $data['harga_sub'];
}
	?>
</tbody>
<tr>

<td colspan="4"><h4>Total Penjualan Pada Periode <?php echo $awl ?> s/d <?php echo $akh ?> adalah </h4></td>
<td>Rp.<?php  echo rupiah($hitung);?></td>
</tr>



</table>

</center>
 </body></html>