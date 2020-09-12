<?php
	$query = "SELECT * FROM pegawai";
	$hasil = mysql_query($query);
?>							
	
	<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-users"></i>Data Pegawai</h3>
				</div>
			</div>
     
<div class="panel panel-primary" >
            	 
                	
             <div class="panel-body">
				<div method="post" action="tambah_data.php">
				<a href="?hlm=tambah_pegawai" class="btn btn-primary"><i class="fa fa-plus" ></i>Tambah Data Pegawai</a>
				
				</div>
                  <div class="clearfix"></div>
                </div>
				
                <div class="x_content">
                  <table id="example1" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>No</th>
						<th>Nip Pegawai</th>
						<th>Nama</th>
						<th>Jk</th>
						<th>Alamat</th>
						<th>No Hp</th>
						<th>Jabatan</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
					<tbody>
							<?php
									$no=1;
									while ($kolom_db = mysql_fetch_assoc($hasil))
									{
										echo
										'<tr>
	
											</td>
											<td>'.$no.'</td>
											<td>'.$kolom_db['id_pegawai'].'</td>
											<td>'.$kolom_db['nama'].'</td>
											<td>'.$kolom_db['jk'].'</td>
											<td>'.$kolom_db['alamat'].'</td>
											<td>'.$kolom_db['no_hp'].'</td>
											<td>'.$kolom_db['jabatan'].'</td>
											<td>
												<a href="?hlm=edit_pegawai&id_pegawai='.$kolom_db['id_pegawai'].'" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
												<a href="datamaster/pegawai/delete_pegawai.php?id_pegawai='.$kolom_db['id_pegawai'].'&level='.$_SESSION['leveluser'].'" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>';
										$no++;;
									}
								?>
					</tbody>
                  </table>
                </div>
              </div>
         

       
    
   
