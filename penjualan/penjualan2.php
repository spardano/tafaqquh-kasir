<?php 
	



// inisialisasi objek penjualan
$pen = new Penjualan();

?>  

<?php $nofak = kdauto("jual","PEN"); ?>
	
<SCRIPT language=Javascript>
//Membuat validasi hanya untuk input angka menggunakan kode javascript
function isNumberKey(evt)
{
var charCode = (evt.which) ? evt.which : event.keyCode
if (charCode > 31 && (charCode < 48 || charCode > 57))

return false;
return true;
}
</SCRIPT>
  
  <script type="text/javascript">
	function angka() {
	var grand = 0;
	var harga = document.getElementById("harga").value;
	var jumlah = document.getElementById("jumlah").value;
	var diskon = document.getElementById("diskon").value;
	
	//var hasil = (Math.round(satu) * Math.round(dua));
	var hitung = (parseInt(harga) * parseInt(jumlah));
	
	var diskonnya = diskon/100*hitung;
	
	var hasil = hitung-diskonnya;
	
	document.getElementById("total").value = hasil;

	}
	
	function kurang() {
	var kembali =0;
	var hasil2 = document.getElementById("totalhar").value;
	var uang_kon = document.getElementById("uang").value;
	var kembalian = (parseInt(uang_kon) - parseInt(hasil2));
	
	
	document.getElementById("kembalinya").value = kembalian;
	
	
	if(kembalian > 0){
	$("#print2").html('<a href="penjualan/printfaktur.php?nofak=<?php echo $nofak ?>&username=<?php echo $_SESSION['username'] ?>&kembali='+kembalian+'&uang_kon='+uang_kon+'" id="klik" target="_blank" class="btn btn-primary">Print</a>');
	$("#selesai").html('<input name="submit" type="submit" class="btn btn-default"   value="Selesai Transaksi" >');
	}
	}
	
	</script>
	
	
<?php
if (isset($_GET['aksi'])){
	if ($_GET['aksi'] == 'hapus'){
		echo $jumlah = $_GET['jumlah'];
		echo $nodefak = $_GET['nodefak'];
		echo $IdBuku = $_GET['IdBuku'];
		
		$pen->hapusPenjualan($nodefak,$jumlah,$IdBuku);	
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=kasir.php?hlm=penjualan">';
	}
	else if ($_GET['aksi'] == 'tambah')
	{
		$kodefak = kdauto("detail_jual","DJ");
		$nofak = kdauto("jual","PEN");
		$pen->tambahPenjualan($kodefak, $nofak, $_POST['kode'], $_POST['total'], $_POST['jumlah'],$_POST['stok'],$_POST['diskon']);
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=kasir.php?hlm=penjualan">';
	}
	else if ($_GET['aksi'] == 'selesai')
	{
		$nofak = kdauto("jual","PEN");
		$tgl=date('y-m-d');
		$pen->tambahPenjualanakhir($nofak, $tgl, $_POST['totalhar']);
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=kasir.php?hlm=penjualan">';
	}
} else {
?>
<!--dari sini-->
      <div id="page-wrapper">
      
        <div class="panel panel-primary">
              <div class="panel-heading">Kasir Buku</div>
			  </div>
			 
			    <div class="panel-body">

		 <form name="biopemesan" action="?hlm=penjualan&aksi=selesai" method="post">
		<?php 
$arrayPenjualan=$pen->tampilPenjulanTable($nofak);

if (count($arrayPenjualan)) {
  foreach($arrayPenjualan as $data) {
	  $total += $data['harga_sub'];
	  $total1 ='Rp.'.$total;
  }
}
	  
		
		?>
		
		<div class="row">
		
		<div class="col-lg-6">
		
		<div class="col-lg-12">
		Harga Total
		</div>
		
		<div class="col-lg-3">
		<input class="form-control" style="height:20%;  font-size:40px;" value="Rp." readonly>
		</div>
		
		<div class="col-lg-9">
		<input class="form-control" style="height:20%; font-size:40px;" name="totalhar" id="totalhar" value="<?php echo rupiah($total);?>" onChange="kurang();" onKeyUp="kurang();"   readonly>
		</div>
		</div>
		
		<div class="col-lg-6">
		Uang Konsumen<input class="form-control"  name="uang" id="uang" type="text" onkeypress="return isNumberKey(event)" onChange="kurang();" onKeyUp="kurang();">
		
		Uang Kembali Rp <input class="form-control"  name="kembalinya" id="kembalinya" style="height:50px; font-size:20px;" readonly>
		
	
		<span id="print2"></span>
		
		<span id="selesai"></span>
	
		
		
		
		
		
		</div>
		
		</div>
			
		
		
		</form>
		
    
                                <div class="row"> 
                                   
                                       <div class="col-lg-12"> 
                                    
		<form name="biopemesan" action="?hlm=penjualan&aksi=tambah" method="post">
         
						  
			  
			  <table width=100%>
			  <tr>
			   <td  style="padding-bottom: 5px; "><label>Nama Buku :</label></td>
			   <td  style="padding-bottom: 5px; width:70px;"><label>Kode:</label></td>
			   <td  style="padding-bottom: 5px; width:200px;"><label>Penerbit :</label></td>
			   <td  style="padding-bottom: 5px; width:70px;"><label>Stok :</label></td>
				<td  style="padding-bottom: 5px; width:150px;"><label>Harga Satuan :</label></td>
				 <td width=5% style="padding-bottom: 5px"><label>Qty :</label></td>
				 <td width=5% style="padding-bottom: 5px"><label>Diskon :</label></td>
				  <td  style="padding-bottom: 5px"><label>Harga Total :</label><p></p></td>
				  <td></td>
				  </tr>
				  <tr>
			   <td ><input class="form-control" name="nama" id="nama" ></td> 
			   <td ><input class="form-control" name="kode" id="kode" readonly></td>
			   <td ><input class="form-control" name="penerbit" id="penerbit" readonly></td>
			   <td ><input class="form-control" name="stok" id="stok" readonly></td>
			    <td ><input class="form-control" name="harga" id="harga" onChange="angka();" onKeyUp="angka();" readonly></td>
			    <td ><input class="form-control" name="jumlah" id="jumlah" onkeypress="return isNumberKey(event)"  onChange="angka();" onKeyUp="angka();" required='true'></td>
				<td ><input class="form-control" name="diskon" id="diskon" onkeypress="return isNumberKey(event)"  onChange="angka();" onKeyUp="angka();" required='true'></td>
			    <td ><input class="form-control" name="total" id="total" readonly></td>
				<td ><input name="submit" type="submit" class="btn btn-default" value="tambah" ><td>
			  </tr>
			  </table>
			  </form>
		   </div>
                                </div>
                                
                        <div class="row">
		  <form name="biopemesan" action="?hlm=penjualan&aksi=selesai" method="post">
                      
			
			<div class="col-lg-6" style="margin-left:20px;">
			
			No Nota : <?php  echo kdauto("jual","PEN");?>
			</div>
			</div>
			
           
              <table class="table table-striped table-bordered">
                <thead>
                 <tr>
					<th width="80">No <i class="fa fa-sort"></i></th>
					<th>id <i class="fa fa-sort"></i></th>
					<th>Nama Buku <i class="fa fa-sort"></i></th>
					<th>Harga Satuan <i class="fa fa-sort"></i></th>
					<th>Jumlah <i class="fa fa-sort"></i></th>
					<th>Diskon <i class="fa fa-sort"></i></th>
					<th>Harga <i class="fa fa-sort"></i></th>
					<th width="90">Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>

<?php

//Tampilkan semua nasabah
$arrayPenjualan=$pen->tampilPenjulanTable($nofak);

if (count($arrayPenjualan)) {
  foreach($arrayPenjualan as $data) {
?>
	<tr>
		<td><?php echo $c=$c+1;?>.</td>
                <td><?php echo $data['IdBuku']?></td>
		<td><?php echo $data['NamaBuku'];?></td>
                 <td><?php echo 'Rp.'.rupiah($data['HargaSatuan']);?></td>
		<td><?php echo $data['qty_jual'];?></td>
		<td><?php echo $data['diskon'];?></td>
		<td><?php echo 'Rp.'.rupiah($data['harga_sub']);?></td>
		<td align="left">
			<div class="tabtxt imghref">
				<span class="dashnav">&nbsp;</span>
				<a href="?hlm=penjualan&aksi=hapus&nodefak=<?php echo $data['id_jual_detail'];?>&jumlah=<?php echo $data['qty_jual'];?>&IdBuku=<?php echo $data['IdBuku'];?>">
					Hapus
				</a>
			</div>
		</td>
	</tr>
             
<?php 
  $totalakhir += $data['harga_sub']; } 
}
}
 ?>
 </tbody>
         </table>
      
</form>

          </div>
        </div>
      </div>
