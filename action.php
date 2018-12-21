<?php
$m=isset($_GET['m']) ? $_GET['m']:"";
if(anti($m)=='buku') include "modul/buku/daftar.php";

if(anti($m)=='trans') include "modul/trans/daftar.php";

if(anti($m)=='jurnal') include "modul/jurnal/daftar.php";
if(anti($m)=='djurnal') include "modul/jurnal/djurnal.php";

if(anti($m)=='mhs') include "modul/mhs/daftar.php";
if(anti($m)=='editMhs') include "modul/mhs/edit.php";

if(anti($m)=='lap') include "modul/lap/daftar.php";

if(anti($m)=='ubah') include "modul/pass/daftar.php";

else  if(anti($m)=='home')include "modul/home.php";
?>

<!-- berisi kumpulan link dan nama halaman yang ditujunya -->
<?php
$m=isset($_GET['m']) ? $_GET['m']:"";

if(empty($m)){?>
<div class="login-box">
    <img src="img/smk.jpg" width=50% /></br>
    <strong> Produk Kreatif dan Kewirausahaan</br></strong></p></div>
<?php }
switch ($m) {
   case 'petugas':
         include "modul/admin/petugas.php";
         break;
   case 'edit_order':
         include "modul/admin/edit_order.php";
         break;
    case 'editO':
         include "modul/admin/edit.php";
         break;
    case 'hapus_order':
         include "modul/admin/hapus_order.php";
         break;
    case 'pesanan':
         include "modul/admin/pesanan.php";
         break;
    case 'order':
         include "modul/staff/order.php";
         break;

}

?>