<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

?>
	 <div class="">
	  <h3 class="title_left"><strong> Tambah Jabatan </strong></h3>
	  <p>____________________________</p>
	 </div>
				
             <div class="panel-body">
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form action="datamaster/jabatan/create_jabatan.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Nama Jabatan<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="jabatan" placeholder="Masukkan Nomor ISBN" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Level<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
						<select name="level" class="form-control">
						<?php 
						$no=1;
						while($no <= 10){
							echo '<option value="'.$no.'">'.$no.'</option>';
							$no++;
						}
						?>
						</select>
                        </div>
                    </div>
				
					 
                    <div class="ln_solid"></div>
					                        	
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-danger">Kembali</button>
                        <button type="submit" name="submit" value="Simpan" class="btn btn-success">Simpan</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
         

    
	  
