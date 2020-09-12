<?php
error_reporting(0);
include "koneksi.php";

function anti_injection($data){
$filter=mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
return $filter;
}
$user = anti_injection($_POST['username']);
$pass = anti_injection(md5($_POST['password']));

if (!ctype_alnum($user) OR !ctype_alnum($pass)){
echo "<div id='gagal' class='alert alert-danger'>Maaf anda bukan Administrator</div>";

}


// pastikan username dan password adalah berupa huruf atau angka.

$login=sprintf("SELECT * FROM data_pengguna WHERE UserName ='$user' AND Password='$pass' ", mysql_real_escape_string($user), mysql_real_escape_string($pass));
$cek_lagi=mysql_query($login);
$ketemu=mysql_num_rows($cek_lagi);
$r=mysql_fetch_array($cek_lagi);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  $_SESSION['iduser']     = $r['IdUser'];
  $_SESSION['username']     = $r['UserName'];
  $_SESSION['leveluser']    = $r['LevelUser'];
  $_SESSION['photo']        = $r['photo'];
  $_SESSION['kelas']        = $r['wali_kelas'];
  $_SESSION['passuser']     = $r['Password'];	
  
  if($_SESSION['leveluser']==1){
	echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='admin.php'</script>";
  } else if($_SESSION['leveluser']==2){
      echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='kasir.php'</script>";
	mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==3){
      echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='pimpinan.php'</script>";
	mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==4){
        echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='payroll.php?id=home'</script>";
	mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  } if($_SESSION['leveluser']==0){
        echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='super.php?id=home'</script>";
	mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  }
  if($_SESSION['leveluser']==5){
        echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='office_bazar.php?id=home'</script>";
	mysql_query("update tbl_user set status=1,w_login=NOW() where id_user='$id_user'");
  }
}
else{

  echo "<div id='gagal' class='alert alert-danger'>Mohon maaf username & password anda salah<button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div>";
}

?>