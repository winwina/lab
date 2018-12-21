<?php session_start(); ?>
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
              <a href="index2.html" class="navbar-brand"><b>Al-</b>Ikhwan</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                                     
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                  <li class="dropdown messages-menu">
                    <!-- Menu toggle button -->
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
          <div class="callout callout-info">
              
              <div class="box-body">
                <img src="lib/student.png" width="5%">&nbsp;&nbsp;<b><?php echo $_SESSION['nama']; ?>  | Kelas <?php echo $_SESSION['kelas']; ?>  | 
				<a href="logout.php" ">Logout</a></b>
              </div>
              <!-- /.box-body -->
            </div>
			
			<div class="callout callout-danger">
              <h4>TUGAS!</h4>
              <p><?php
					$id = $_SESSION['id'];
					$sql = mysql_query("select * from  tx_tugas, tugas, siswa where  tugas.id_siswa = siswa.id  and tugas.id_siswa = $id") or die (mysql_error());
					
					while($data = mysql_fetch_array($sql)){
						
						echo $data['ket'];
					}
					
                    
			  ?><h3 class="box-title"><a href="upload2.php" role="button"class="btn btn-info btn-flat">Upload Tugas</a></h3></p>
            </div>
			
            <div class="box box-default">
              
			  <section class="content">
			  <h4>Tugas</h4>
          <div class="box box-default">
              <div class="box-body">
				<table id="user" class="table table-bordered table-striped" >
            <thead>
				<tr>
					<th>No</th>
                    <th>Mata Pelajaran</th>
					<th>Detail Tugas</th>
					<th>Tanggal Diupload</th>
					<th>Download</th>
					<th>Keterangan</th>
				</tr>
            </thead>
            <tbody>
			  <?php
					@include "lib/conn.php";
					$id = $_SESSION['kelas'];
                    $sql = mysql_query("select * from tugas, siswa, mapel, tx_tugas where tx_tugas.id = tugas.id_tx and siswa.id = tugas.id_siswa and tugas.id_siswa = $id and tx_tugas.id_mapel = mapel.id ") or die (mysql_error());
                    $no = 1;
                    while($data = mysql_fetch_array($sql)){
			  
			  ?>
              tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $data['nama_mapel']; ?></td>
					<td><?php echo $data['nama_tugas']; ?></td>
					<td><?php echo $data['tgl']; ?></td>
                    <td><a href="<?php echo "tugas/".$data['file']; ?>"><img src="dist/img/dw.png"/></a></td>
					<th><?php echo $data['ket']; ?></th>
					
				</tr>
				<?php
				    $no++;
                    }
                ?>
            </tbody>
        </table>
			</div>
              </div>        </div>
            
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
  </body>
</html>
