<html>

<head>
<?php require ('../dbconfig.php');?></head>
<body>
<link href="../style.css" rel="stylesheet" />

<div style="height: 50px;"></div>
<div align="center" style="height: 50px;"><a href="../index.php">&laquo;  Kembali</a></div>
<?php

$hasil = mysqli_query($connect,"SELECT * FROM penyakit") or die(mysql_error());
?>
	<div style='text-align:center;'>
	<table algin='center' width='500px' border='1px' cellpadding='5px' style='margin: auto; border-collapse:collapse;'>
    <caption style="font-size: 20px;margin-bottom: 30px;">Tabel Data</caption>
		<tr bgcolor="#CCCCCC">
        <th width='150px'>Suhu Tubuh</th>
        <th width='150px'>Bintik Merah</th>
        <th width='150px'>Musim</th>
        <th width='100px'>Tekanan Darah</th>
        <th width='200px'>Terkena DBD</th>
        </tr>

		<?php
			while ($data = mysqli_fetch_object($hasil)){


				?>

				<tr>
					<td><?php echo $data->suhu_tubuh;?></td>
					<td><?php echo $data->bintik_merah;?></td>
					<td><?php echo $data->musim;?></td>
					<td><?php echo $data->tekanan_darah;?></td>
                    <td><?php echo $data->terkena_dbd;?></td>
				<?php
			}
		?>
                </tr>
        </table>

<?php

$hasil2 = mysqli_query($connect,"SELECT * FROM nilai") or die(mysql_error());
?>
	<div style='text-align:center;'>
     <div style="height: 20px;"></div>
	<table algin='center' width='500px' border='1px' cellpadding='5px' style='margin: auto; border-collapse:collapse;'>
    <caption style="font-size: 20px;margin-bottom: 20px; margin-top: 20px;">Tabel Nilai</caption>
		<tr bgcolor="#CCCCCC">
        <th width='150px'>Indikasi</th>
        <th width='150px'>YA</th>
        <th width='150px'>TIDAK</th>
        </tr>

		<?php
			while ($data = mysqli_fetch_object($hasil2)){


				?>

				<tr>
					<td><?php echo $data->indikasi;?></td>
					<td><?php echo $data->ya;?></td>
					<td><?php echo $data->tidak;?></td>
				<?php
			}
		?>
                </tr>
        </table>
        <div style="height: 50px;"></div>
        </body>
        </html>
