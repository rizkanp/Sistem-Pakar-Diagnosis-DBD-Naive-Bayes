<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="sandhi" />

	<title> Naive Bayes </title>
    

</head>

<body>
<table class="table table-bordered">
<caption style="font-size: 15px;"></caption>
<form action="include/prosespenyakit.php" method="post">
    <tr>
        <th>Suhu Tubuh</th>
        <th>Tekanan Darah</th>
        <th>Bintik Merah</th>
        <th>Musim</th>
    </tr>
    <tr>
        <td>
        <select style="width: 200px;" name="suhu_tubuh">
              <option value="suhu_tubuh_tinggi">Tinggi</option>
              <option value="suhu_tubuh_rendah">Rendah</option>
              <option value="suhu_tubuh_normal">Normal</option>
        </select>
        </td>
        <td>
         <select style="width: 200px;" name="tekanan_darah">
              <option value="tekanan_darah_tinggi">Tinggi</option>
              <option value="tekanan_darah_rendah">Rendah</option>
              <option value="tekanan_darah_normal">Normal</option>
         </select>
         </td>
          <td>
         <select style="width: 200px;" name="bintik_merah">
              <option value="bintik_merah_banyak">Banyak</option>
              <option value="bintik_merah_sedikit">Sedikit</option>
              <option value="bintik_merah_tidak_ada">Tidak Ada</option>
         </select>
         </td>
         <td>
         <select style="width: 200px;" name="musim">
              <option value="musim_hujan">Hujan</option>
              <option value="musim_kemarau">Kemarau</option>
              <option value="musim_pancaroba">Pancaroba</option>
         </select>
         </td>
    </tr>
    </tr>
        <td colspan="10">
					<input class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Proses" />
				</td>
    </tr>
		<tr>
			<td colspan="10">
				<a class="btn btn-default btn-lg btn-block" style="float: left; font-size: 20px;" href="index.php">Reset </a>
			</td>
		</tr>
</form>
</table>
</body>
</html>
