<?php require ('../dbconfig.php'); ?>
<?php
$sql="INSERT INTO penyakit (suhu_tubuh, bintik_merah, musim, tekanan_darah, terkena_dbd)
VALUES('$_POST[suhu_tubuh]','$_POST[bintik_merah]','$_POST[musim]','$_POST[tekanan_darah]','$_POST[terkena_dbd]')";

if (!mysql_query($sql,$connect))
  {
  die('Error: ' . mysql_error());
  }

header('location:../index.php?added=1');
mysql_close($con);
?>