
    
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

?>

     <div class="panel panel-default" >
	 <div class="panel-heading">
	  <h3 class="panel-title"> Tambah data Buku </h3>
	 </div>
				
             <div class="panel-body">
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form action="datamaster/data_buku/create_buku.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Id Buku (ISBN) <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="IdBuku" placeholder="Masukkan Nomor ISBN" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Nama Buku <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="NamaBuku" required="required" placeholder="Masukkan nama buku" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					
					 <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Penerbit</label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <select class="form-control" name="penerbit">
						<option>
						-- Pilih Penerbit --
						</option>
						<?php
						
						$sql = mysql_query("select * from penerbit");
							while ($a = mysql_fetch_array($sql)){
							
							echo "<option value='$a[0]'>$a[1]</option>";
							
							};
						?>
						</select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Harga Satuan Jual</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="HargaSatuan" placeholder="Masukkan Harga Satuan Jual" class="form-control col-md-7 col-xs-12">
                      </div>
                    
                      <label  class="control-label col-md-2 col-sm-3 ">Harga Beli</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="HargaBeli" placeholder="Masukkan Harga Beli" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					
					
					
					 
                    <div class="ln_solid"></div>
					                        	
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Kembali</button>
                        <button type="submit" name="submit" value="Simpan" class="btn btn-success">Simpan</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
         

    
	  
