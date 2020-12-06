<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
if (!empty($_GET['added'])) {
	if ($_GET['added'] == 1) {
		echo '<h3 align="center" style="color:red"></h3>';}}
?> 
<table  >
<caption style="font-size: 15px;">Simpan ke dalam tabel</caption>
<form action="include/insert.php" method="post">
    <tr>
        <th>Suhu Tubuh</th>
        <td>
        <select style="width: 100px;" name="suhu_tubuh">
              <option value="Tinggi">Tinggi</option>
              <option value="Rendah">Rendah</option>
              <option value="Normal">Normal</option>
        </select></td>
    </tr>
    <tr>
        <th>Tekanan Darah</th>
        <td>
         <select style="width: 100px;" name="tekanan_darah">
              <option value="Tinggi">Tinggi</option>
              <option value="Rendah">Rendah</option>
              <option value="Normal">Normal</option>
         </select>
         </td>
    </tr>
	<tr>
        <th>Bintik Merah</th>
        <td>
         <select style="width: 100px;" name="bintik_merah">
              <option value="Banyak">Banyak</option>
              <option value="Sedikit">Sedikit</option>
              <option value="Tidak Ada">Tidak Ada</option>
         </select>
         </td>     
    </tr>
   <tr>
        <th>Musim</th>
        <td>
         <select style="width: 100px;" name="musim">
              <option value="Hujan">Hujan</option>
              <option value="Kemarau">Kemarau</option>
              <option value="Pancaroba">Pancaroba</option>
         </select>
         </td>  
   </tr> 
    <tr>
        <th>Terkena DBD</th>
        <td>
         <select style="width: 100px;" name="terkena_dbd">
              <option value="YA">YA</option>
              <option value="TIDAK">Tidak</option>
         </select>
         </td>
    </tr>
        <td></td>
        <td><input type="submit" name="submit" value="simpan" /></td>
    </tr>
</form>
</table>
</body>
</html>