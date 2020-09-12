<?php 

function rupiah($bilangan){
	$pecahan=number_format($bilangan,0,',','.');
	return $pecahan;
}

$kodefak = $_GET['IdKegiatan'];

	class pemesanan {

	function ambil_nama(){
		 $kodefak1 = $_GET['IdKegiatan'];
		$nama='';
		$sql_nama=mysql_query("select a.id_lb, a.id_buku, a.JumlahBuku, b.NamaBuku, b.HargaSatuan from list_bazar as a, data_buku as b where a.id_buku = b.IdBuku and a.id_bazar='$kodefak1'");
		while($data_nama=mysql_fetch_array($sql_nama)){
		$nama.='{ value: "'.stripslashes($data_nama['id_lb']).'", label: "'.stripslashes($data_nama['NamaBuku']).'", exemplar: "'.stripslashes($data_nama['JumlahBuku']).'", harga: "'.stripslashes($data_nama['HargaSatuan']).'"},';
	}
		return(strrev(substr(strrev($nama),1)));
	}
	
	function hapusPenjualan($nodefak)
	{
		$query = "DELETE FROM jual_bazar WHERE no_transkansi_bazar = '$nodefak'";
		mysql_query($query);
	}
	
	// method untuk proses tambah data pokok pinjaman
	function tambahPenjualan($idbuku,$kodefak, $nofak,$kode,$total,$jumlah,$diskon)
	{
		$query = "insert into jual_bazar values('$nofak', '$kodefak', '$kode', '$jumlah', '$diskon', '$total')";
		$hasil = mysql_query($query);
		
	}
	function tambahPenjualanakhir($nofak,$tgl,$hasil)
	{
		$query = "insert into jual values('$nofak', '$tgl', '$hasil')";
		$hasil = mysql_query($query);
	}
	
	function tampilPenjulanTable($idkegiatan)
	{
		$kodefak = $_GET['IdKegiatan'];
		$query = mysql_query("SELECT a.*, b.*, c.* from jual_bazar as a, data_buku as b, list_bazar as c where a.IdBuku = c.id_lb and c.id_buku=b.IdBuku and a.id_kegiatan_bazar ='$kodefak'");
		
		while($row=mysql_fetch_array($query))
		$data[]=$row;
	    return $data;
	}
	
}


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


// instansiasi objek user
//$user = new User();
// instansiasi objek nsb

$pen = new pemesanan();
//$pj = new penjualan ();

?>  

<?php $nofak = kdauto("jual","PEN"); ?>
	
  
  <script type="text/javascript">
	function angka() {
	var grand = 0;
	var harga = document.getElementById("harga").value;
	var jumlah = document.getElementById("jumlah").value;
	
	//var hasil = (Math.round(satu) * Math.round(dua));
	var hasil = (parseInt(harga) * parseInt(jumlah));
	document.getElementById("total").value = hasil;
	
	}
	
	function kurang() {
	var kembali =0;
	var hasil2 = document.getElementById("totalhar").value;
	var uang_kon = document.getElementById("uang").value;
	var kembalian = (parseInt(uang_kon) - parseInt(hasil2));
	document.getElementById("kembalinya").value = kembalian;
	if(kembalian > 0){
	$("#print2").html('<a href="printfrakturjual.php?nofak=<?php echo $nofak ?>&kembali='+kembalian+'&uang_kon='+uang_kon+'" id="klik" target="_blank" class="btn btn-primary">Print</a>');
	}
	}
	
	</script>
	
	
<?php
if (isset($_GET['aksi']))
{
	if ($_GET['aksi'] == 'hapus')
	{
		$kodefak = $_GET['IdKegiatan'];
		$nodefak = $_GET['nodefak'];
		$pen->hapusPenjualan($nodefak);	
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=office_bazar.php?hlm=pelaksanaan_bazar&IdKegiatan='.$kodefak.'">';
	}
	if ($_GET['aksi'] == 'tambah')
	{
		$kodefak = $_GET['IdKegiatan'];
		$nofak = kdauto("jual_bazar","JB");
		$pen->tambahPenjualan($idbuku, $kodefak, $nofak, $_POST['kode'], $_POST['total'], $_POST['jumlah'], $_POST['diskon']);
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=office_bazar.php?hlm=pelaksanaan_bazar&IdKegiatan='.$kodefak.'">';
	}
	if ($_GET['aksi'] == 'selesai')
	{
		$nofak = kdauto("jual","PEN");
		$tgl=date('y-m-d');
		$pen->tambahPenjualanakhir($nofak, $tgl, $_POST['totalhar']);
		echo '<META HTTP-EQUIV="Refresh" Content="0 ;URL=office_bazar.php?hlm=pelaksanaan_bazar&IdKegiatan='.$kodefak.'">';
	}
} else {
?>
<!--dari sini-->
      <div id="page-wrapper">
      
        <div class="panel panel-primary">
              <div class="panel-heading">Kasir Buku</div>
			  </div>
			  
			    <div class="panel-body">

		 <form name="biopemesan" action="?id=penjualan&aksi=selesai" method="post">
		<?php 
		
$idkegiatan = $_GET['IdKegiatan'];
$arrayPenjualan=$pen->tampilPenjulanTable($idkegiatan);

if (count($arrayPenjualan)) {
  foreach($arrayPenjualan as $data) {
	  $total += $data['harga_sub'];
	  $total1 ='Rp.'.$total;
  }
}
	  
		
		?>
		</form>
		
    
                                <div class="row"> 
                                   
                                       <div class="col-lg-12"> 
                                    
		<form name="biopemesan" action="?hlm=pelaksanaan_bazar&IdKegiatan=<?php echo $_GET['IdKegiatan']?>&aksi=tambah" method="post">
         
						  
			  
			  <table width=100%>
			  <tr>
			   <td  style="padding-bottom: 5px; "><label>Nama Buku :</label></td>
			   <td  style="padding-bottom: 5px; width:70px;"><label>Kode:</label></td>
			   <td  style="padding-bottom: 5px; width:70px;"><label>Stok :</label></td>
				<td  style="padding-bottom: 5px; width:150px;"><label>Harga Satuan :</label></td>
				 <td width=5% style="padding-bottom: 5px"><label>Qty :</label></td>
				 <td width=7% style="padding-bottom: 5px"><label>Diskon :</label></td>
				  <td  style="padding-bottom: 5px"><label>Harga Total :</label><p></p></td>
				  <td></td>
				  </tr>
				  <tr>
			   <td ><input class="form-control" name="nama" id="tran" ></td> 
			   <td ><input class="form-control" name="kode" id="kode" readonly></td>
			   <td ><input class="form-control" name="stok" id="stok" readonly></td>
			    <td ><input class="form-control" name="harga" id="harga" onChange="angka();" onKeyUp="angka();" readonly></td>
			    <td ><input class="form-control" name="jumlah" id="jumlah" onChange="angka();" onKeyUp="angka();" required='true'></td>
				 <td ><input class="form-control" name="diskon" id="diskon" onChange="angka();" onKeyUp="angka();" required='true'></td>
			    <td ><input class="form-control" name="total" id="total" readonly></td>
				<td ><input name="submit" type="submit" class="btn btn-default" value="tambah" ><td>
			  </tr>
			  </table>
			  </form>
		   </div>
                                </div>
                                
                       
			
           
              <table class="table table-striped table-bordered">
                <thead>
                 <tr>
					<th width="80">No <i class="fa fa-sort"></i></th>
					<th>id <i class="fa fa-sort"></i></th>
					<th>Kode Buku <i class="fa fa-sort"></i></th>
					<th>Nama Buku <i class="fa fa-sort"></i></th>
					<th>Harga Satuan <i class="fa fa-sort"></i></th>
					<th>Diskon <i class="fa fa-sort"></i></th>
					<th>Jumlah <i class="fa fa-sort"></i></th>
					<th>Harga <i class="fa fa-sort"></i></th>
					<th width="90">Action <i class="fa fa-sort"></i></th>
                  </tr>
                </thead>
                <tbody>

				 
<?php
//Tampilkan semua nasabah
$arrayPenjualan=$pen->tampilPenjulanTable($idkegiatan);

if (count($arrayPenjualan)) {
  foreach($arrayPenjualan as $data) {
?>
	<tr>
		<td><?php echo $c=$c+1;?>.</td>
		<td><?php echo $data['no_transkansi_bazar']?></td>
        <td><?php echo $data['IdBuku']?></td>
		<td><?php echo $data['NamaBuku'];?></td>
        <td align='right'>Rp.<?php echo rupiah($data['HargaSatuan']);?></td>
		<td><?php echo $data['diskon'];?></td>
		<td><?php echo $data['jumlah_qty'];?></td>
		<td align='right'>Rp.<?php echo rupiah($data['total_income']);?></td>
		<td align="left">
			<div class="tabtxt imghref">
				<span class="dashnav">&nbsp;</span>
				<a href="?hlm=pelaksanaan_bazar&aksi=hapus&nodefak=<?php echo $data['no_transkansi_bazar'];?>&IdKegiatan=<?php echo $idkegiatan ?>">
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
