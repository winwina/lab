<?php session_start();?>
<noscript>
<META http-equiv="refresh" content="0;URL=http://enable-javascript.com/">
</noscript>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SMK Terpadu Al-Ikhwan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-box-body">
        <p class="login-box-msg"><img src="lib/tkj.png" width="80%"></p>
		<center><h4><label>LAB TKJ SMK Terpadu Al-Ikhwan</label></h4></center>
        <form method="POST">
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="PIN" name="pass" required/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
             <div class="col-xs-8">    
              <!--<div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>   /.col -->                     
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="masuk">Login</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
<?php 
include "lib/conn.php";
if(isset($_POST['masuk']))
{
    $pass = $_POST['pass'];
	
    $cari_query = "select * from user where pin='$pass'";      
    $run = mysql_query($cari_query) or die (mysql_error()); 
    $row=mysql_fetch_row($run);
  
    if(mysql_num_rows($run)>0){
		$_SESSION['nama']=$row['1'];
		$_SESSION['jabatan']=$row['3'];
		$_SESSION['id']=$row['0'];
			if($_SESSION['jabatan'] == "0"){
					echo "<script>
					window.open('admin/admin.php','_self');alert('Anda Berhasil Login');
					</script>";
			} else {
        echo "<script>
        window.open('siswa2.php','_self');alert('Anda Berhasil Login');
			</script>"; }
    } else {
        echo "<script>window.open('login.php');alert('Username dan password tidak cocok..!!')</script>"; 
    }
}
?>