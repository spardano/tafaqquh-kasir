
    
<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

?>

<?php 
		$query="SELECT * FROM pegawai";
		$query = mysql_query("SELECT * FROM pegawai where id_pegawai='".$_GET['id_pegawai']."'");
		$row = mysql_fetch_array($query);
		// $hasil = mysql_query("SELECT * FROM hakakses");
	 
?>
 <div class="right_col" role="main" style="height:650px">
        <div class="">
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
				
                  <h2>Ubah Data Pegawai</h2>
                <div class="clearfix"></div>
                </div>
                <div class="x_content">
                <br />
                  <form name="update" action="datamaster/pegawai/ubah_pegawai.php?level=<?php echo $_SESSION['leveluser'] ?>" method="post" data-parsley-validate class="form-horizontal 
				  form-label-left">
					<div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Id_pegawai </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" value="<?php echo $row['id_pegawai']?>" ReadOnly name="id_pegawai" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Nama </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" value="<?php echo $row['nama']?>" name="nama" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="jk" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="jk" value="laki-laki"> Laki-laki
                          </label>
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="jk" value="perempuan"> Perempuan
                          </label>
                        </div>
                      </div>
                    </div>
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Alamat</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" value="<?php echo $row['alamat']?>" name="alamat" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">No Hp</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" value="<?php echo $row['no_hp']?>" name="no_hp" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Jabatan</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" value="<?php echo $row['jabatan']?>" name="jabatan" class="form-control col-md-7 col-xs-12">
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
        </div>
      </div>
