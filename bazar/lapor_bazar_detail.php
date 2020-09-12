<html>

<link href="images/icon.png" rel="shortcut icon"/>
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<body onload="window.print();">
<?php
include "../koneksi.php";

$b= $_GET['bazar'];
$sql_film="select a.*,b.* from jual_bazar as a, data_buku as b where a.IdBuku = b.IdBuku and a.id_kegiatan_bazar='$b'";
$sql = mysql_query($sql_film);


function rupiah($bilangan){
	$pecahan=number_format($bilangan,0,',','.');
	echo"Rp.";
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

<h2> LAPORAN KEGIATAN BAZAR</h2>
<table class="table table-striped table-bordered">
<thead>
<tr>
<td>No</td>
<td>Nama Buku</td>
<td>Jumlah Pembelian</td>
<td>Diskon</td>
<td>Total</td>
</tr>

</thead>
<tbody>
<?php 
$no=1;
while($data = mysql_fetch_array($sql)) { ?>
<tr>
<td><?php echo $no ?></td>
	<td><?php echo $data['NamaBuku']  ?></td>
	<td><?php echo $data['jumlah_qty']  ?></td>
	<td><?php echo $data['diskon']  ?></td>
	<td align="right"><?php echo rupiah($data['total_income'])  ?></td>
	
	</tr>
	<?php
	$no++;
	$hitung += $data['total_income'];
}
	?>
</tbody>
<tr>

<td colspan="4"><h4>Total Persediaan Pada Periode <?php echo $awl ?> s/d <?php echo $akh ?> adalah </h4></td>
<td align="right"><?php  echo rupiah($hitung)?></td>
</tr>



</table>


</center>
 </body></html>