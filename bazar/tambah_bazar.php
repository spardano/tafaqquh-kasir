<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}



?>
   <div class="panel panel-primary">
              <div class="panel-heading">Tambah Bazar</div>
			  </div>

          <div class="col-lg-12">
		 
            	
              <div class="x_panel">
               
			 
                <div class="x_content">
                  <br />
                  <form action="bazar/create_bazar.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">Nama Kegiatan<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="NamaKegiatan" required="required" placeholder="Masukkan Nama Kegiatan" class="form-control">
                      </div>
                    </div>
                    
					 <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Penanggung Jawab <span class="required">*</span></label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <select class="form-control" name="PenanggungJawab">
						<option>
						-- Pilih Pegawai --
						</option>
						<?php
						
						$sql = mysql_query("select * from pegawai");
							while ($a = mysql_fetch_array($sql)){
							
							echo "<option value='$a[0]'>$a[1]</option>";
							
							};
						?>
						</select>
                      </div>
                    </div>
					
					 <div class="form-group">
                      <label class="control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Kerjasama Dengan <span class="required">*</span></label>
                      <div class="col-md-3 col-sm-3 col-xs-12">
                        <select class="form-control" name="IdInstansi">
						<option>
						-- Pilih Instansi --
						</option>
						<?php
						
						$sql = mysql_query("select *  from data_instansi");
							while ($a = mysql_fetch_array($sql)){
							
							echo "<option value='$a[0]'>$a[1]</option>";
							
							};
						?>
						</select>
                      </div>
                    </div>
					
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Lokasi Kegiatan <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="LokasiKegiatan" placeholder="Masukkan alamat" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal Mulai Kegiatan<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="TglMulai"  class="form-control">
                      </div>
                    </div>
					
					<div class="form-group">
                      <label  class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal Selesai Kegiatan<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="TglSelesai"  class="form-control">
                      </div>
                    </div>
					 
					 
                    <div class="ln_solid"></div>
					                        	
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
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
        </div>
    