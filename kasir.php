<?php 
session_start();

include "koneksi.php";
error_reporting(0);


$nav				= "";
$konten				= "home.php";
$kontencss1			="";
$kontencss2			="";
$kontencss3			="";
$kontencss4			="";


$kontenjs0			="";
$kontenjs1			="";
$kontenjs2			="";
$kontenjs3			="";



$hlm 				= isset($_GET['hlm']) ? $_GET['hlm'] : "";
if ($hlm == "") {
		$konten 			= "beranda.php";
		$kontencss2			="";	
	} 
	elseif ($hlm == "penjualan") {
		$nav 				= "DATA MURID";
		$konten 			= "penjualan/penjualan.php";
		$kontenjs1			= "js/jquery-ui.js";
		$kontencss1			="js/jquery-ui.css";
		
	}elseif ($hlm == "tambah_bazar") {
		$konten 				= "bazar/tambah_bazar.php";
	}elseif ($hlm == "tambah_bbazar") {
		$konten 				= "bazar/tambah_bbazar.php";
	}elseif ($hlm == "pelaksanaan_bazar") {
		$konten 			= "pelaksanaan_bazar.php";
		$kontenjs1			= "js/jquery-ui.js";
		$kontencss1			= "js/jquery-ui.css";
	}elseif ($hlm == "data_bazar") {
		$konten 				= "bazar/data_bazar.php";
	} else {
		$nav 				= "Dashboard";
		$konten 				= "dashboard.html";
		$kontenjs0			= "plugins/jQuery/jQuery-2.1.3.min.js";
	}
	


//$hlm_user=$_SESSION['kode'];
//$nip=$_SESSION['nip'];
//$sesi_username			= isset($_SESSION['username']) ? $_SESSION['username'] : NULL;
//if ($sesi_username != NULL || !empty($sesi_username) ||$_SESSION['leveluser']=='1'  ) 

//{

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
	
	 <link rel="stylesheet" href="css/dataTables.bootstrap.css">
	
	<!-- link konten yg di include -->
	
	<link rel="stylesheet" href="<?php echo $kontencss1; ?>" />
	<link rel="stylesheet" href="<?php echo $kontencss2; ?>" />
	<link rel="stylesheet" href="<?php echo $kontencss3; ?>" />
	<link rel="stylesheet" href="<?php echo $kontencss4; ?>" />
	
	
  </head>

  <body>
  <!-- bagian konten mulai -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--Merek dagang-->
            <a href="index.html" class="logo"><span class="lite">TAFAQQUH</span></a>
            <!--Merek dagang-->

            <div class="top-nav notification-row">                
                    <!-- Tombol Keluar -->
					
                  
                            <a href="logout.php" class="btn btn-warning" class="username"><i class="fa fa-sign-out"></i> Keluar </a>
                  
                
                
                <!-- Akhir script tombol keluar-->
            </div>
			
      </header>      
      <!--header Akhir-->

      <!--Menu Samping Mulai-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu"> 


				<li>
                     <img src="Images/logo_tafaqquh.png" class="img-responsive"/>
                  </li>
				  
				  
                  <li class="active">
                      <a class="" href="index.html">
                          <i class="icon_house_alt"></i>
                          <span>Beranda</span>
                      </a>
                  </li>
				 
                 
                  <li>
                      <a class="" href="?hlm=penjualan">
                          <i class="icon_genius"></i>
                          <span>Penjualan</span>
                      </a>
                  </li>
				  
				  
				  
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			 
              
			  <div class="row">
<div class="col-xs-12">
<!-- konten halaman dimulai -->

<?php include $konten; ?>
<!-- konten halaman berakhir -->
</div><!-- /.col -->
</div><!-- /.row -->


          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="<?php echo $kontenjs1; ?>"></script>
		<script src="<?php echo $kontenjs2; ?>"></script>
		<script src="<?php echo $kontenjs3; ?>"></script>
		<script src="<?php echo $kontenjs4; ?>"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.scrollTo.min.js"></script>
		<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
		<script src="js/scripts.js"></script>
		<script src="js/jquery.autosize.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.js"></script>
		
		<script>
  $(function() {
  
                $('#example1').dataTable();
  });
 
  </script> 
  
   <script>
  $(function() {
    var DaftarObat = [<?php echo $pen->ambil_nama();?> ];
    $( "#nama" ).autocomplete({
		source: DaftarObat,
		focus: function(event, ui) {
		event.preventDefault();
		$("#nama").val(ui.item.label);
		},
		select: function(event, ui) {
		event.preventDefault();
		$("#nama").val(ui.item.label);
		$("#kode").val(ui.item.value);
		$("#penerbit").val(ui.item.penerbit);
		$("#stok").val(ui.item.exemplar);
		$("#harga").val(ui.item.harga);
		}
    });
  });
  </script> 

  
  <script>
  $(function() {
    var DaftarObat = [<?php echo $pen->ambil_nama();?> ];
    $( "#tran" ).autocomplete({
		source: DaftarObat,
		focus: function(event, ui) {
		event.preventDefault();
		$("#tran").val(ui.item.label);
		},
		select: function(event, ui) {
		event.preventDefault();
		$("#tran").val(ui.item.label);
		$("#kode").val(ui.item.value);
		$("#penerbit").val(ui.item.penerbit);
		$("#stok").val(ui.item.exemplar);
		$("#harga").val(ui.item.harga);
		}
    });
  });
  </script> 
	
  </body>
</html>
<?php
//}else{
	//session_destroy();
	//header('Location:index.php');
//}
?>	