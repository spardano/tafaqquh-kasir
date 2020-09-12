
    
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

?>

<?php 
		$query="SELECT * FROM data_instansi";
		$query = mysql_query("SELECT * FROM data_instansi where IdInstansi='".$_GET['IdInstansi']."'");
		$row = mysql_fetch_array($query);
		// $hasil = mysql_query("SELECT * FROM hakakses");
	 
?>

     <div class="panel panel-default" >
	 <div class="panel-heading">
	  <h3 class="panel-title"> Edit data Instansi </h3>
	 </div>
				
             <div class="panel-body">
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form action="datamaster/instansi/ubah_instansi.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
				  
				  <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Id Instansi <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="NamaInstansi" readonly value="<?php echo $row['IdInstansi'] ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                   
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Nama Instansi <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="NamaInstansi" required="required" value="<?php echo $row['NamaInstansi'] ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					
				
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Alamat Instansi</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="AlamatInstansi" value="<?php echo $row['AlamatInstansi'] ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    
                      <label  class="control-label col-md-2 col-sm-3 ">Nomor Telepon Instansi</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="NoInstansi" value="<?php echo $row['NoInstansi'] ?>" class="form-control col-md-7 col-xs-12">
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
         

    
	  
