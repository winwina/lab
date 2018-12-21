<?php

include "lib/conn.php";
$mapel = $_GET['mapel'];
$brg = mysql_query("SELECT * FROM tx_tugas WHERE id_mapel='$mapel'") or die(mysql_error());
while($k = mysql_fetch_array($brg)){
echo "<option value=\"".$k['id']."\">".$k['nama_tugas']."</option>\n";
}
?>

 <?php 
                   /* include "../koneksi.php";
                    $sup = $_POST['supplier'];
                    $barang = mysql_query("select * from barang where supplier = $sup");
                    $html = "<option value=''>Pilih</option>";
                   while($data_brg = mysql_fetch_array($barang)){
                            $html.="<option value='".$data_brg['id_barang']."'>".$data_brg['nama_barang']."</option> " ;
                            };
                            
                            $callback = array('data_brg'=>$html);
                            echo json_encode($callback);*/
                            ?>