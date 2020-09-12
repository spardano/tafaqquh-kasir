<?php 
	//error_reporting(E_ALL);
	
	class Pemesanan {
		
    //fungsi ini untuk mengambil seluruh data buku pada pencarian buku di menu penjualan
	function ambil_nama(){
		$nama='';
		$sql_nama=mysql_query("select a.IdBuku, a.NamaBuku, b.NamaPenerbit, a.JumlahEx, a.HargaSatuan from data_buku as a, penerbit as b where a.IdPenerbit = b.IdPenerbit");
		while($data_nama=mysql_fetch_array($sql_nama)){
		$nama.='{ value: "'.stripslashes($data_nama['IdBuku']).'", label: "'.stripslashes($data_nama['NamaBuku']).'", exemplar: "'.stripslashes($data_nama['JumlahEx']).'", penerbit: "'.stripslashes($data_nama['NamaPenerbit']).'", harga: "'.stripslashes($data_nama['HargaSatuan']).'"},';
	}
		return(strrev(substr(strrev($nama),1)));
	}
	
	//conditional declaration
	
		
	//menghapus data penjualan pada satu faktur yang sama	
	function hapusPenjualan($nodefak,$jumlah,$IdBuku)
	{
		$query = "DELETE FROM detail_jual WHERE id_jual_detail = '$nodefak'";
		mysql_query($query);
		
		$query = "select JumlahEx FROM data_buku WHERE IdBuku = '$IdBuku'";
		$datastok = mysql_query($query);
		$stok = mysql_fetch_array($datastok);
		
		
		$updatestok = $jumlah+$stok['JumlahEx'];
		
		$query2 = "update data_buku set JumlahEx ='$updatestok' where IdBuku='$IdBuku'";
		$hasil2 = mysql_query($query2);
		
	}
	


	// method untuk proses tambah data penjualan pada satu faktur yang sama
	function tambahPenjualan($kodefak, $nofak,$kode,$total,$jumlah,$stok,$diskon)
	
	
	{
		$updatestok = $stok-$jumlah;
		
		if($stok == 0){
			echo '<script> alert ("Stok Buku Kosong")</script>';
		}else if ($updatestok < 0 ){
			echo '<script> alert ("Jumlah Stok Buku Tidak Mencukupi")</script>';
		}else{
		$query = "insert into detail_jual values('$kodefak', '$nofak', '$kode', '$total', '$jumlah', '$diskon')";
		$hasil = mysql_query($query);
		
		
		$query2 = "update data_buku set JumlahEx ='$updatestok' where IdBuku='$kode'";
		$hasil2 = mysql_query($query2);
		
		}
		
	}
	//menyimpan data penjualan dengan no faktur
	function tambahPenjualanakhir($nofak,$tgl,$hasil)
	{
		echo $iduser = $_SESSION['iduser'];
		$query = "insert into jual values('$nofak', '$tgl', '$hasil', $iduser)";
		$hasil = mysql_query($query);
	}
	
	//menampilkan data buku yang dijual pada tabel
	function tampilPenjulanTable($nofak)
	{
		$query = mysql_query("SELECT a.id_jual_detail, a.IdBuku, a.harga_sub, a.qty_jual, a.diskon, b.NamaBuku, b.HargaSatuan  FROM detail_jual a, data_buku b WHERE a.IdBuku = b.IdBuku AND no_faktur_jual = '$nofak'");
		while($row=mysql_fetch_array($query))
		$data[]=$row;
	    return $data;
	}
	
}

//untuk melakukan genereta kode faktur secara otomatis
function kdauto($tabel, $inisial){
	$struktur	= mysql_query("SELECT * FROM $tabel");
	$field		= mysql_field_name($struktur,0);
	$panjang	= mysql_field_len($struktur,0);

 	$qry	= mysql_query("SELECT max(".$field.") FROM ".$tabel);
 	$row	= mysql_fetch_array($qry); 
 	if ($row[0]=="") {
 		$angka=0;
	}
 	else {
 		$angka		= substr($row[0], strlen($inisial));
 	}
	
 	$angka++;
 	$angka	=strval($angka); 
 	$tmp	="";
 	for($i=1; $i<=($panjang-strlen($inisial)-strlen($angka)); $i++) {
		$tmp=$tmp."0";	
	}
 	return $inisial.$tmp.$angka;
}

//membuat format rupiah
function rupiah($bilangan){
	$pecahan=number_format($bilangan,0,',','.');
	return $pecahan;
}

// instansiasi objek user
//$user = new User();
// iniasi objek
$pen = new pemesanan();

//$pj = new penjualan ();

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
if (isset($_GET['aksi']))
{
	if ($_GET['aksi'] == 'hapus')
	{
		echo $jumlah = $_GET['jumlah'];
		echo $nodefak = $_GET['nodefak'];
		echo $IdBuku = $_GET['IdBuku'];
		
		$pen->hapusPenjualan($nodefak,$jumlah,$IdBuku);	
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=kasir.php?hlm=penjualan">';
	}
	if ($_GET['aksi'] == 'tambah')
	{
		$kodefak = kdauto("detail_jual","DJ");
		$nofak = kdauto("jual","PEN");
		$pen->tambahPenjualan($kodefak, $nofak, $_POST['kode'], $_POST['total'], $_POST['jumlah'],$_POST['stok'],$_POST['diskon']);
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=kasir.php?hlm=penjualan">';
	}
	if ($_GET['aksi'] == 'selesai')
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
