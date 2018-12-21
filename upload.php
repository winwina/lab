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
              <h2 class="page-header">Bahan Ajar</h2>
               <form method="POST" enctype="multipart/form-data">
				<div class="box-body">
                <div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Nama File" name="nama" required/>
					<span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
				  </div>
                  <div class="form-group has-feedback">
					<input type="file" class="form-control" name="file" required/>
				  </div>
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
            
            $file	        = $_FILES['file']['name'];
            $tipe           = $_FILES['file']['type'];
            $nama           = $_POST['nama'];
            $namaSementara = $_FILES['file']['tmp_name'];

            $dirUpload      = "upload/";
            $terupload      = move_uploaded_file($namaSementara, $dirUpload.$file);
            $input = mysql_query("insert into upload(nama,tipe,file) 
								 values('$nama','$tipe','$file')") or die (mysql_error());;
            
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
