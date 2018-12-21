<!DOCTYPE html>
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
<div class="row">
	<div class="col-md-8">
		<div class="box box-default">
			<div class="box-body">
              <h2 class="page-header">Data Komputer</h2>
               <form method="POST">
				<div class="box-body">
                <div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Nama Komputer" name="nama" required/>
					<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
				  </div>
                  <!-- <div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="IP Address" name="ip" required/>
					<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                    <small id="emailHelp" class="form-text text-muted">Tulis DHCP atau alamat ipnya jika IP static</small>
				  </div> -->
                  <div class="form-group has-feedback">
					<textarea class="form-control" placeholder="Kerusakan Komputer" name="kerusakan" rows="3"></textarea>
					<span class="glyphicon glyphicon glyphicon-wrench form-control-feedback"></span>
                    <small id="emailHelp" class="form-text text-muted">Jika tidak ada kosongkan</small>
				  </div>
				  <div class="form-group has-feedback">
                      <select class="form-control" name="tempat">
                            <option value="lab-atas">Lab Atas</option>
                            <option value="lab-bawah">Lab Bawah</option>
                      </select>
                      <small id="emailHelp" class="form-text text-muted"><strong>Tempat komputer disimpan</strong></small>
                      </div>
				 <div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Petugas yang memperbaiki" name="petugas" required/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				  </div>
                  <div class="form-group has-feedback">
					<textarea class="form-control" placeholder="Keterangan. Tuliskan jika ada barang yang harus dibeli untuk komputer tersebut. Atau diisi dengan keterangan lainnya." name="ket" rows="3"></textarea>
				  </div>
				  <!-- /.box-body -->

				<div class="box-footer">
				  <button type="submit" name ="ok"  class="btn btn-primary">Simpan</button>
				</div>
				</form>
			</div>
		</div>
	</div>
    </div>
	<?php
    include "lib/conn.php";
    if(isset($_POST['ok'])) {
            
            $nama_kom	    = $_POST['nama'];
            $ip      	    = $_SERVER['REMOTE_ADDR'];
            $kerusakan      = $_POST['kerusakan'];
            $lokasi         = $_POST['tempat'];
            $petugas        = $_POST['petugas'];
            $ket            = $_POST['ket'];
            
        
            $input = mysql_query("insert into komputer(nama_kom,ip_address, kerusakan, lokasi, petugas, ket) 
								 values('$nama_kom','$ip', '$kerusakan', '$lokasi', '$petugas', '$ket')") or die (mysql_error());;
            
        if ($input ) {
            echo "<script>alert('Data Berhasil di Simpan..!!');window.location='index.php'</script>";
        } else {
            echo "<script>alert('ERROR!!! Data Gagal di Simpan, Silahkan Coba Lagi!!');window.location='index.php'</script>";
        }
    }
    
    ?>
            <!-- /.box -->
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
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
