<!DOCTYPE html>
<?php include "lib/resize-class.php";
include "lib/function.php";
include "lib/timeline.php";?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Lab Komputer TKJ</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
     <link href="plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
     <script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/markerclusterer_packed.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">               
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="index.php" class="navbar-brand"><b>Al-</b>Ikhwan</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
                    
                   
                      
                        <!-- inner menu: contains the messages -->
                        <!-- /.menu -->
                      
                  </li><!-- /.messages-menu -->

                  <!-- Notifications Menu -->
                  <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    
                   
                  <!-- User Account Menu -->
                  
                </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              LAB KOMPUTER TKJ
              <small>SMK TERPADU AL-IKHWAN</small>
            </h1>
           
          </section>

          <!-- Main content -->
          <section class="content">
          <div class="box-header with-border">
                <h3 class="box-title"><a href="login.php" role="button"class="btn btn-danger btn-flat">Login</a></h3>
                <h3 class="box-title"><a href="materi.php" role="button"class="btn btn-danger btn-flat">Materi</a></h3>
			<!--	<h3 class="box-title"><a href="upload2.php" role="button"class="btn btn-danger btn-flat">Upload</a></h3>
				
				<h3>SOAL UTS PEMDAS</h3>
				<b>program penyewaan mobil</b></br></br>
				1. masukkan nama penyewaan</br>
				2. masukkan merek mobil</br>
				3. masukkan jumlah hari</br>
				4. masukkan harga sewa per hari</br>
				5. Hitung total harga sewa yaitu jumlah hari*harga sewa per hari</br>
				6. Tuliskan total harga sewa</br>
				
				<b> - Simpan dengan nama UTS_nama_kelas </br>
				- Upload file .cpp nya di web ini (tombol upload di atas)-->
				</div>
              <!-- /.box-body -->
            </div>
          
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          
          <strong>winawulansari &copy;2018</strong>
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
     <script src="plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>
<script type="text/javascript">
  $(function () {
    $("#user").dataTable();
  });
</script>