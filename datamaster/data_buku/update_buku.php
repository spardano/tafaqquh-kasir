
    
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

?>

<?php 
		$query="SELECT * FROM data_buku";
		$query = mysql_query("SELECT * FROM data_buku where IdBuku='".$_GET['IdBuku']."'");
		$row = mysql_fetch_array($query);
		// $hasil = mysql_query("SELECT * FROM hakakses");
	 
?>

         <div class="panel panel-default" >
	 <div class="panel-heading">
	  <h3 class="panel-title"> Tambah data Buku </h3>
	 </div>
				
                
               
                <div class="x_content">
                  <br />
                  <form action="datamaster/data_buku/ubah_buku.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Id Buku (ISBN) <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="IdBuku"  value="<?php echo $row['IdBuku'] ?>" class="form-control col-md-7 col-xs-12" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Nama Buku <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="NamaBuku" required="required" value="<?php echo $row['NamaBuku'] ?>" class="form-control col-md-7 col-xs-12">
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
							
							if ($a[0] ==$row ['IdPenerbit']) {
														echo "<option value='$a[0]' selected>$a[1]</option>";
													} else {
													echo "<option value='$a[0]'>$a[1]</option>";
													}
							
							};
						?>
						</select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Harga Satuan Jual</label>
                      <div class="col-md-2 col-sm-2 col-xs-4">
                        <input type="text" name="HargaSatuan" value="<?php echo $row['HargaSatuan'] ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					
					 
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="jk" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="jk" value="BS"> Best Seller
                          </label>
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="jk" value="B"> Biasa
                          </label>
                        </div>
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
         

          <script type="text/javascript">
            $(document).ready(function() {
              $('#birthday').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script>
        
	  
