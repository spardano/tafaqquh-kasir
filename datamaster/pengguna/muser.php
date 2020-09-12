<?php
error_reporting(0);
?>

  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user"></i>Data Pengguna</h3>
				</div>
			</div>
			
	  <div class="panel panel-primary" >
	
             <div class="panel-body">
				<div method="post" action="tambah_data.php">
			<a class="btn btn-primary" style="margin-top:30px;" href="?hlm=tambah_user">Tambah Data Pengguna</a>
			</div>

                <table id="example1" class="display table table-bordered table-striped">
                    <thead>
                        <tr>
							
                            <th>Username</th>
                            <th>Level</th> <th>Aksi</th> 
                        </tr>
                    </thead>
                   <tbody>
<?php
$tampil = mysql_query("SELECT a.*, b.NamaJabatan FROM data_pengguna as a, jabatan as b where a.LevelUser = b.level");

while($data=mysql_fetch_array($tampil)){
?>
<tr>
<td><?php echo $data['UserName'] ?></td>
<td><?php echo $data['NamaJabatan']?></td>
<td  align="center">
<a href="datamaster/pengguna/d_user.php?username=<?php echo $data['UserName']?>&level=<?php echo $_SESSION['leveluser'] ?>" onclick="return confirm('apakah anda ingin menghapus data ini ?')"><i class="ace-icon fa fa-trash-o bigger-120"></i></a> -
<a href="?hlm=edit_user&kodeuser=<?php echo $data['IdUser']?>"><i class="ace-icon fa fa-pencil-square-o bigger-120"></i></a>
</td>
</tr>
<?php } ?>

        </tbody>
                    <tfoot>
                        <tr>
						
                            <th>Username</th>
							<th>Level</th>
							<th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
        
			

       </div>
	   </div>
        
	
		
		
    </body>
</html>