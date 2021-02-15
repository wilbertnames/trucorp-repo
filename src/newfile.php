<?php 
$conn=new mysqli("172.18.0.3","root","inipassworddatabase","Trucorp");

$query = "SELECT * FROM users";
$result = $conn->query($query);
$rows = $result->num_rows;

echo "Jumlah data ada ".$rows;

$conn->close();



?>
