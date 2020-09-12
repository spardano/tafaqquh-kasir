
<?php
	$query = "SELECT a.*, b.NamaPenerbit FROM data_buku as a, penerbit as b where a.IdPenerbit = b.IdPenerbit";
	$hasil = mysql_query($query);
	// $hasil = mysql_query("SELECT * FROM hakakses");

	function rupiah($bilangan){
	$pecahan=number_format($bilangan,0,',','.');
	return $pecahan;
}
?>

 <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-book"></i>Data Buku</h3>
				</div>
			</div>
			
			
       <div class="panel panel-primary" >

             <div class="panel-body">
				<div method="post" action="tambah_data.php">
				

				</div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="example1" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>No</th>
						<th>Nama Buku</th>
						<th>Kode Buku</th>
						<th>Penerbit</th>
						<th>Harga Satuan</th>
						<th>Jumlah Exemplar</th>
						<?php if ($_SESSION['leveluser'] != 1){ ?>
						<th whidth:"100px">Aksi</th>
						<?php } ?>
                      </tr>
                    </thead>
					<tbody>
							<?php
									$no=1;
									while ($kolom_db = mysql_fetch_assoc($hasil))
									{
										$nama_buku = strtoupper($kolom_db['NamaBuku']);
										echo
										'<tr>

											</td>
											<td>'.$no.'</td>
											<td>'.$nama_buku.'</td>
											<td>'.$kolom_db['IdBuku'].'</td>
											<td>'.$kolom_db['NamaPenerbit'].'</td>
											<td align="right">Rp.'.rupiah($kolom_db['HargaSatuan']).'</td>
											<td>'.$kolom_db['JumlahEx'].'</td>';
											 if ($_SESSION['leveluser'] != 1){ 
											echo 
											'<td>
											<center>
												<a href="?hlm=tambah_bbazar&IdBuku='.$kolom_db['IdBuku'].'" class="btn btn-danger btn-xs" title="Tambah Dalam List Buku Bazar"><i class="fa fa-plus"></i></a>
											</center>
											</td>';
											 }
											echo
										'</tr>';
										$no++;;
									}
								?>
					</tbody>
                  </table>
                </div>
              </div>
            </div>

         </div>



        </div>
