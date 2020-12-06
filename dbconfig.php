<?php
$connect = mysqli_connect("localhost","root","","datamining_db");
if (!$connect){
    echo "gagal koneksi ke mysql";
    }
// $selectDB = mysql_select_db("datamining_db") or die (mysql_error());
// if (!$selectDB){
//     echo "gagal terkoneksi ke database";
// }
?>
