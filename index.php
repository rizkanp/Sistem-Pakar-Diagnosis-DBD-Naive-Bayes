<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Kamis, 15 Nop 2012 19:03:09 GMT">
    <meta name="description" content="Naive Bayer Classified dalam penentuan penyakit dbd">
    <meta name="keywords" content="data mining, naive bayer classified">
    <title>Naive Bayes</title>
    <!-- Di bawah adalah pemanggilan file style yang berada pada satu direktori dengan file ini -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- <script src="js/jquery-latest.js" type="text/javascript"></script> -->

    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  		 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Näive Bayes Classifier</title>

    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-narrow.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <div class="header clearfix">            
            <h3 class="text-muted">Näive Bayes Classifier </h3>
            <h4 class="text-muted">Sistem Pakar Penentuan Penyakit DBD </h4>
        </div>
               <script type="text/javascript">
               <?php
               if (!empty($_GET['proses'])) { // jika nilai dari proses tidak kosong, maka lanjutkan
             if ($_GET['proses'] == 1) {?> /* jika yang di dapatkan nilai proses == 1, maka isi tabel dengan nilai di bawah ini */
                   document.getElementById("isi").innerHTML = "<p style='font-size:25px;'> dari pilihan yang anda lakukan, dapat disimpulkan jika anda memiliki kemungkinan <span style='color:white; text-decoration: underline;'>terkena</span> penyakit <span style='color:white;text-decoration: underline;'>DBD</span></p>";

             <?php } elseif ($_GET['proses'] == 2) {?> /* jika yang di dapatkan nilai proses == 2, maka isi tabel dengan nilai di bawah ini */
               document.getElementById("isi").innerHTML = "<p style='font-size:25px;'> dari pilihan yang anda lakukan, dapat disimpulkan jika anda memiliki kemungkinan <span style='color:white;text-decoration: underline;'>tidak terkena</span> penyakit <span style='color:white;text-decoration: underline;'>DBD</span></p>";
             <?php }
            }
              ?>
              </script>
               </td>
               </tr>
            </table>
            <?php require ('include/tabel_penyakit.php');?>

          </div>
          <div class="col-md-10">
            
          </div>
        </div>
         <div style="height: 200px;"></div>
         <!-- memanggil file footer.php dengan fungsi PHP pada file directory yang sama -->
         <?php require('include/footer.php');?>
  </body>
</html>
