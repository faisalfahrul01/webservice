<html>
<head>
<title>Rest Web Services</title>
</head>
<body>
<?php
if (isset ($_POST['nisn'])) {
$url = 'https://f4isalfahrul.000webhostapp.com/pkl1.php';
//$data = "[{\"nisn\":\".$_POST['nisn'].\",\"kelas\":\".$_POST['kelas'].\",\"kode_guru\":\".$_POST['kode_guru'].\"}]";//
$data="{\"nisn\":\"".$_POST['nisn']."\",\"kelas\":\"".$_POST['kelas']."\",\"kode_guru\":\"".$_POST['kode_guru']."\"}";
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
<form method="POST" action="pkl.php">
<table>
<tr>
<td>nisn</td>
<td><input type="text" name="nisn" id="nisn"></td>
</tr>
<tr>
<td>kelas</td>
<td><input type="text" name="kelas" id="kelas"></td>
</tr>
<tr>
<td>kode_guru</td>
<td><input type="text" name="kode_guru" id="kode_guru"></td>
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


