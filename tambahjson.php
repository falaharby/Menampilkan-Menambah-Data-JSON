<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['nim'])) {
$url = 'http://falaharby.000webhostapp.com/server/jsonmhsw.php';
//$data = "[{\"nim\":\".$_POST['nim'].\",\"nama\":\".$_POST['nama'].\",\"progdi\":\".$_POST['progdi'].\"}]";//
$data="{\"nim\":\"".$_POST['nim']."\",\"nama\":\"".$_POST['nama']."\",\"progdi\":\"".$_POST['progdi']."\",\"tempat_pkl\":\"".$_POST['tempat_pkl']."\",\"permasalahan\":\"".$_POST['permasalahan']."\"}";
echo "datanya ".$data;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$response = curl_exec($ch);
echo "response ".$response;
curl_close($ch);
}
?>
<form method="POST" action="tambahjson.php">
<table>
<tr>
<td>NIM</td>
<td><input type="text" name="nim" id="nim"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" id="nama"></td>
</tr>
<tr>
<td>Progdi</td>
<td><input type="text" name="progdi" id="progdi"></td>
</tr>
<tr>
<td>Tempat PKL</td>
<td><input type="text" name="tempat_pkl" id="tempat_pkl"></td>
</tr>
<tr>
<td>Permasalahan di Tempat PKL</td>
<td><input type="text" name="permasalahan" id="permasalahan"></td>
</tr>
<tr>
<tr>
<td><input type="submit" name="submit" id="submit" value="Tambah"></td>
<td></td>
</tr>
</table>
</form>
</body>
</html>
