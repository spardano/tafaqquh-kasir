<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    

</head>

<body onload="window.print();">
<?php 
include '../koneksi.php';

$nofak = $_GET['nofak'];
$user = $_GET['username'];

$sql=mysql_query("select a.*, b.NamaBuku, b.IdBuku, b.HargaSatuan from detail_jual as a, data_buku as b where a.no_faktur_jual='$nofak' and a.IdBuku=b.IdBuku");



?>
<div>
<table class="table table-striped table-bordered" width="100%">

<tr>
<td align="center" colspan="6"><b style="font-size:24px;">TOKO BUKU TAFAQQHU</b><br/> Jl. Sudirman Kompleks Sudirman Square <br/> Telp 0361 468458</td>

</tr>
<tr>
<td>Judul Buku </td><td> Harga Buku</td><td> Jumlah Pembelian</td><td> Diskon</td><td>Total Harga</td>
</tr>
<?php 

while ($data = mysql_fetch_array($sql))
{
	$total += $data['harga_sub'];
 ?>
<tr>
<td><?php echo $data['NamaBuku'] ?></td>
<td><?php echo $data['HargaSatuan'] ?></td>
<td><?php echo $data['qty_jual'] ?></td>
<td><?php echo $data['diskon'] ?></td>
<td><?php echo $data['harga_sub'] ?></td>
</tr>

<?php
}
 ?>
 </table>
 
 <table class="table table-striped table-bordered">
 <tr>
 <td>
Total Bayar = <?php echo 'Rp. '.$total?>
</td>

<td>Uang Konsumen = <?php echo 'Rp. '.$_GET['uang_kon']?></td>

<td>Kembali = <?php echo 'Rp. '.$_GET['kembali']?></td>

</tr>


<tr>
<td width="350" align="center" colspan="6"><b>Terima Kasih Telah Berbelanja di Toko Buku Tafaqquh</b><br/><?php echo date('y-m-d') ?> || <?php echo date('H:I:s') ?>
<br/> Barang Yang Sudah Dibeli Tidak Dapat Dikembalikan. Saran dan Kritik Hubungi Nomor: 082390264267
<br/> Front Office : <?php echo $user; ?>
</td>
</tr>

</table>

</div>
    

</body>

</html>
