<?php
namespace Acme\TestPackage;
/*
 * This file is part of the Acme.TestPackage package.
 *
 * (c) Whoever wrote this
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

 
//kelas untuk mengelola penjualan
class Penjualan {
		
    //fungsi ini untuk mengambil seluruh data buku pada pencarian buku di menu penjualan
	public function ambil_nama(){
		$nama='';
		$sql_nama=mysql_query("select a.IdBuku, a.NamaBuku, b.NamaPenerbit, a.JumlahEx, a.HargaSatuan from data_buku as a, penerbit as b where a.IdPenerbit = b.IdPenerbit");
		while($data_nama=mysql_fetch_array($sql_nama)){
		$nama.='{ value: "'.stripslashes($data_nama['IdBuku']).'", label: "'.stripslashes($data_nama['NamaBuku']).'", exemplar: "'.stripslashes($data_nama['JumlahEx']).'", penerbit: "'.stripslashes($data_nama['NamaPenerbit']).'", harga: "'.stripslashes($data_nama['HargaSatuan']).'"},';
	}
		return(strrev(substr(strrev($nama),1)));
	}
	
	//conditional declaration
	if( !function_exists ('hapuspenjualan')){
		
	//menghapus data penjualan pada satu faktur yang sama	
	public function hapusPenjualan($nodefak,$jumlah,$IdBuku)
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
	}


	// method untuk proses tambah data penjualan pada satu faktur yang sama
	public function tambahPenjualan($kodefak, $nofak,$kode,$total,$jumlah,$stok,$diskon)
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
	public function tambahPenjualanakhir($nofak,$tgl,$hasil)
	{
		echo $iduser = $_SESSION['iduser'];
		$query = "insert into jual values('$nofak', '$tgl', '$hasil', $iduser)";
		$hasil = mysql_query($query);
	}
	
	//menampilkan data buku yang dijual pada tabel
	public function tampilPenjulanTable($nofak)
	{
		$query = mysql_query("SELECT a.id_jual_detail, a.IdBuku, a.harga_sub, a.qty_jual, a.diskon, b.NamaBuku, b.HargaSatuan  FROM detail_jual a, data_buku b WHERE a.IdBuku = b.IdBuku AND no_faktur_jual = '$nofak'");
		while($row=mysql_fetch_array($query))
		$data[]=$row;
	    return $data;
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
	
}

 ?>