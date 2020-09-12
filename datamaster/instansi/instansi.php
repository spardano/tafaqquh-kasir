
<?php
	$query = "SELECT * from data_instansi";
	$hasil = mysql_query($query);
	// $hasil = mysql_query("SELECT * FROM hakakses");
	
?>							
	
	<div class="row">
				<div class="col-lg-12">
					<h3 class="page-building"><i class="fa fa-book"></i>Data Instansi</h3>
				</div>
			</div>
	
       <div class="panel panel-primary" >
	 
				
             <div class="panel-body">
				<div method="post" action="tambah_data.php">
				<a href="?hlm=tambah_instansi" class="btn btn-primary"><i class="fa fa-plus" ></i>Tambah Data Instansi</a>
				
				</div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="example1" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>No</th>
						<th>Nama Instansi</th>
						<th>Alamat Instansi</th>
						<th>Nomor Instansi</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
					<tbody>
							<?php
									$no=1;
									while ($kolom_db = mysql_fetch_assoc($hasil))
									{
										$nama_buku = strtoupper($kolom_db['NamaInstansi']);
										echo
										'<tr>
	
											</td>
											<td>'.$no.'</td>
											<td>'.$nama_buku.'</td>
											<td>'.$kolom_db['AlamatInstansi'].'</td>
											<td>'.$kolom_db['NoInstansi'].'</td>
											<td>
											<center>
												<a href="?hlm=edit_instansi&IdInstansi='.$kolom_db['IdInstansi'].'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
												<a href="datamaster/instansi/delete_instansi.php?IdInstansi='.$kolom_db['IdInstansi'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
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
    
	        
	  
			 


