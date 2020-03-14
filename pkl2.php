<?php
 
$connect=mysqli_connect("localhost", "id12804414_pkl", "panthera69","id12804414_praktekkerja");
 
$query = "SELECT * from PKL ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "nisn" => $row["nisn"],
    "kelas" => $row["kelas"], 
    "kode_guru" => $row["kode_guru"]);
   
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"MENAMPILKAN DATA PKL\":" . $data . "}";
?>
