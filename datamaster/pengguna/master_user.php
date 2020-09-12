<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../assets/jquery.min.js"></script>
    <script type="text/javascript" src="../assets/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/jquery-1.10.2.js"></script>
    <link href="../assets/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/bootstrap.css" rel="stylesheet" type="text/css">
	<script>
     $(function(){
    $("#tanggal").datepicker({dateFormat:'yy-mm-dd'});
	});
    </script>
   
  </head><body>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">Tambah Data User</h3>
              </div>
              <div class="panel-body">
                <form method="post" action="datamaster/pengguna/t_user.php?level=<?php echo $_SESSION['leveluser'] ?>" class="form-horizontal" role="form">
                 
				  <div class="form-group">
                    <div class="col-sm-2">
                      <label class="control-label" >User Name</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" style="width:300px;" placeholder="Masukkan User Name" class="form-control" name="nama">
                    </div>
                  </div>
				 
				  <div class="form-group">
                    <div class="col-sm-2">
                      <label  class="control-label">Password</label>
                    </div>
					<div class="col-sm-10">
                      <input type="password" style="width:300px;" placeholder="Masukkan Password"  class="form-control" name="pwd">
                    </div>
					</div>
                  
                
					 
					
					<div class="form-group">
					<div class="col-sm-2">
                      <label class="control-label" >Level User</label>
                    </div>
                    <div class="col-sm-2">
					<?php if($_SESSION['leveluser'] == 0) {?>
					 <select name="bag" class="form-control">
												<option>-- Pilih Level --</option>
												<option value="1">Admin</option>
													<?php
												$q = mysql_query("select * from jabatan"); 

													while ($a = mysql_fetch_array($q)){
													
													echo "<option value='$a[2]'>$a[1]</option>";
													
														}
													?>
											</select>
					<?php }
					else { 
					
					?>
					
                          <select name="bag" class="form-control">
												<option>-- Pilih Level --</option>
													<?php
												$q = mysql_query("select * from jabatan"); 

													while ($a = mysql_fetch_array($q)){
													
													echo "<option value='$a[2]'>$a[1]</option>";
													
														}
													?>
											</select>
											
					<?php }?>
                        </div>
					
					</div>
					
					
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="submit" class="btn btn-default" value="Simpan">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

</body></html>