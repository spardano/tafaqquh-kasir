
<?php
	$query = "SELECT* from jabatan";
	$hasil = mysql_query($query);
	// $hasil = mysql_query("SELECT * FROM hakakses");

?>

	  <div class="row">
		</div>
		<div class="page-title">
            <div class="title_left">
              <h3>Data Master Jabatan</small></h3>
            </div>
			
          </div>

             <div class="panel-body">
				<div method="post" action="tambah_data.php">
				<a href="?hlm=tambah_jabatan" class="btn btn-success" style="margin-top:10px;"><i class="fa fa-plus"></i> Tambah Jabatan</a>
				</div>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table id="example1" class="table table-striped table-bordered">
                    <thead>
                      <tr>
						<th>No</th>
						<th>Nama Jabatan</th>
						<th>Level</th>
						<th style="width:100px">Aksi</th>
                      </tr>
                    </thead>
					<tbody>
							<?php
									$no=1;
									while ($kolom_db = mysql_fetch_assoc($hasil))
									{
										$NamaJabatan = strtoupper($kolom_db['NamaJabatan']);
										echo
										'<tr>

											</td>
											<td>'.$no.'</td>
											<td>'.$NamaJabatan.'</td>
											<td>'.$kolom_db['level'].'</td>
											<td>
											<center>
												<a href="?hlm=update_jabatan&IdJabatan='.$kolom_db['IdJabatan'].'"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></a>
												<a href="datamaster/jabatan/delete_jabatan.php?IdJabatan='.$kolom_db['IdJabatan'].'"><i class="ace-icon fa fa-trash-o bigger-120"></i></a>
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
