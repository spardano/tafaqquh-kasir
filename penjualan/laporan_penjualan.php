<?php 
include "koneksi.php";

$kelas = $_GET['kelas'];
$pilih = mysql_query("SELECT id_kelas, nm_kelas FROM kelas");
$ambil = mysql_query("SELECT * FROM dt_siswa WHERE kelas = '$kelas'");

$awl = $_POST['tgl_awl'];
?>


 <script>

  function loadlaporan()
{
    var awal=$("#tgl1").val();
    var akhir=$("#tgl2").val();
	
	
	if(awal == 0 || akhir == 0){
		alert("Maaf Tolong Isi Tanggal Awal dan Akhir dengan tepat");
	}
	else if(awal > akhir){
		alert("Maaf Tanggal Awal Harus Berada Sebelum Tanggal Akhir");
	}
	else
	{
    $.ajax({
		
    url:"penjualan/laporan_jual.php",
    data:"awal=" + awal +"&akhir=" + akhir,
    success: function(data)
       {
          $("#examku").html(data);
       }
       });
	   
	   loadprint();
	   
}
}

</script>



<div class="panel panel-primary" >
	 <div class="panel-heading">
	 <h3 class="panel-title"> Laporan Penjualan </h3>
	 </div>
	 
<div align="center">
<h1><div align="center">Laporan Penjualan  <?php if($kelas!=""){echo "Kelas $kelas";} ?></div></h1><br/><hr>
<table border="0" align="center">

<form  method="post" action="printlaporjual.php?awal=<?php echo $awl ?>&akhir=<?php echo $_POST['tgl_akh'] ?>" target="_blank" >
  <tr>
    <td width="30%"><b>Pilih Tanggal Awal :</b></td>
    <td><input type="date" name="tgl_awl" id="tgl1" required class="form form-control"></td>
  </tr>
  
  <tr>
    <td width="30%" style="padding-top:20px;"><b>Pilih Tanggal Akhir :</b></td>
    <td style="padding-top:20px;"><input type="date" name="tgl_akh" required id="tgl2" class="form form-control"></td>
  </tr>
  
  <tr>
    <td width="30%"></td>
	<td style="padding-top:20px;"><input type="button" value="Lihat Laporan" class="btn btn-primary" onclick="loadlaporan()"/></td>
  </tr>
  

 
</table>


</div>

<hr><br />
		
		 </form>
		 
		 <script>
		 function loadprint (){
	var awal=$("#tgl1").val();
    var akhir=$("#tgl2").val();
		  $("#print").html('<a style="margin-left:20px" href="penjualan/printlaporjual.php?awal='+awal+'&akhir='+akhir+'" target="_blank" type="button" class="btn btn-danger">Print Laporan</a>');
		 }
		 </script>
		 
		<div id="print"></div>
        
		
		
		 
		<table class="table table-striped table-bordered">
	<thead>
	<td>Id Detail Jual</td>
	<td>Nama Buku</td>
	<td>Harga Satuan</td>
	<td>Stok</td>
	<td>Jumlah Pembelian</td>
	<td>Tgl Transaksi</td>
	<td>Total Harga</td>
	<td>Office</td>
	</thead>
	
	<tbody id="examku"></tbody>
	
	<tfoot>
	<td>Id Detail Jual</td>
	<td>Nama Buku</td>
	<td>Harga Satuan</td>
	<td>Stok</td>
	<td>Jumlah Pembelian</td>
	<td>Tgl Transaksi</td>
	<td>Total Harga</td>
	<td>Office</td>
	</tfoot>
           
      </table>
 
</div>


