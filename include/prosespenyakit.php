<?php

 
 $st_ya = NULL ;
 $st_tidak = NULL ;
 $st = NULL ; 
if ($_POST["suhu_tubuh"]=="suhu_tubuh_tinggi"){
          $st_ya = 0.75 ;
          $st_tidak = 0.33;
    }
    elseif ($_POST["suhu_tubuh"]=="suhu_tubuh_rendah"){
        $st_ya = 0 ;
        $st_tidak = 0.50;
    }
    elseif($_POST["suhu_tubuh"]=="suhu_tubuh_normal"){
        $st_ya = 0.25 ;
        $st_tidak = 0.16;
    }

$td_ya = NULL ;
 $td_tidak = NULL ;
if ($_POST["tekanan_darah"]=="tekanan_darah_tinggi"){
          $td_ya = 0.25 ;
          $td_tidak = 0.33;   
    }
    elseif ($_POST["tekanan_darah"]=="tekanan_darah_rendah"){
        $td_ya = 0.75 ;
        $td_tidak = 0.16;
    }
    elseif($_POST["tekanan_darah"]=="tekanan_darah_normal"){
        $td_ya = 0 ;
        $td_tidak = 0.33;
    }
    
    $bm_ya = NULL ;
    $bm_tidak = NULL ;
if ($_POST["bintik_merah"]=="bintik_merah_banyak"){
          $bm_ya = 0.75 ;
          $bm_tidak = 0.16;   
    }
    elseif ($_POST["bintik_merah"]=="bintik_merah_sedikit"){
        $bm_ya = 0.25 ;
        $bm_tidak = 0.50;
    }
    elseif($_POST["bintik_merah"]=="bintik_merah_tidak_ada"){
        $bm_ya = 0 ;
        $bm_tidak = 0.33;
    }
    
    $m_ya = NULL ;
    $m_tidak = NULL ;
if ($_POST["musim"]=="musim_hujan"){
          $m_ya = 0.25 ;
          $m_tidak = 0.50;   
    }
    elseif ($_POST["musim"]=="musim_kemarau"){
        $m_ya = 0 ;
        $m_tidak = 0.33;
    }
    elseif($_POST["musim"]=="musim_pancaroba"){
        $m_ya = 0.75 ;
        $m_tidak = 0.16;
    }



$suhu_tubuh_ya = $st_ya;
$tekanan_darah_ya = $td_ya;
$bintik_merah_ya = $bm_ya;
$musim_ya = $m_ya;
$total_ya = 0.40;

$suhu_tubuh_tidak = $st_tidak;
$tekanan_darah_tidak = $td_tidak;
$bintik_merah_tidak = $bm_tidak;
$musim_tidak = $m_tidak;
$total_tidak = 0.60;

$hitung_ya = $suhu_tubuh_ya * $tekanan_darah_ya * $bintik_merah_ya * $musim_ya * $total_ya ;
$hitung_tidak = $suhu_tubuh_tidak * $tekanan_darah_tidak * $bintik_merah_tidak * $musim_tidak * $total_tidak ;



if ($hitung_ya > $hitung_tidak){
    header('location:../index.php?proses=1');
    }

header('index.php?proses=1');
?>