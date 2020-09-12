
<?php
	$query = "SELECT * FROM kegiatan_bazar";
	$hasil = mysql_query($query);
	// $hasil = mysql_query("SELECT * FROM hakakses");
	
	function tgl_eng_to_ind($tgl) {
	$tgl_ind=substr($tgl,8,2)."-".substr($tgl,5,2)."-".substr($tgl,0,4);
	return $tgl_ind;
}
?>							
	
       <div class="panel panel-primary" >
	 <div class="panel-heading">
	  <h3 class="panel-title"> Data Penerbit </h3>
	 </div>
				
             <div class="panel-body">
				<div method="post" action="tambah_data.php">
				<a href="?hlm=tambah_bazar" class="btn btn-primary"><i class="fa fa-plus" ></i>Tambah Data Bazar</a>
				
				</div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="example1" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>No</th>
						<th>Nama Kegiatan Bazar</th>
						<th>Lokasi Bazar</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						<th>Progres</th>
						<th>Transaksi</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
					<tbody>
							<?php
									$no=1;
									while ($kolom_db = mysql_fetch_assoc($hasil))
									{
										$nama_buku = strtoupper($kolom_db['NamaKegiatan']);
										
										$string=null;
										
										if($kolom_db['TglSelesai'] < date('Y-m-d')){
											$string = 'Selesai';
											$color ='green';
											
											$aksi = '<a href="?id=update_penerbit&IdPenerbit='.$kolom_db['IdPenerbit'].'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
												<a href="delete_penerbit.php?IdPenerbit='.$kolom_db['IdPenerbit'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
												<a href="ubah_status.php?IdPenerbit='.$kolom_db['IdPenerbit'].'" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
												';
												
											
											
										}else if ($kolom_db['TglMulai'] > date('Y-m-d')){
											$string = 'Belum';
											$color ='red';
											$aksi = '<a href="?id=update_penerbit&IdPenerbit='.$kolom_db['IdPenerbit'].'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
												<a href="delete_penerbit.php?IdPenerbit='.$kolom_db['IdPenerbit'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
												';
											
										}else{
											$string = 'Sedang';
											$color ='blue';
											
											$aksi = '<a href="?id=update_penerbit&IdPenerbit='.$kolom_db['IdPenerbit'].'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
												<a href="delete_penerbit.php?IdPenerbit='.$kolom_db['IdPenerbit'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
												';
										};
										
									
										echo
										'<tr>
	
											</td>
											<td>'.$no.'</td>
											<td>'.$nama_buku.'</td>
											<td>'.$kolom_db['LokasiKegiatan'].'</td>
											<td>'.tgl_eng_to_ind($kolom_db['TglMulai']).'</td>
											<td>'.tgl_eng_to_ind($kolom_db['TglSelesai']).'</td>
											<td style="color:'.$color.'" >'.$string.'</td>
											<td><a href="office_bazar.php?hlm=pelaksanaan_bazar&IdKegiatan='.$kolom_db['IdKegiatan'].'" class="btn btn-danger">Catat</a></td>
											<td>
											<center>
											'.$aksi.'
												</center>
											</td>
										</tr>';
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
    
	        
	  
			 


