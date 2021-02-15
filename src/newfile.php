<?php 
$conn=new mysqli("172.18.0.3","root","inipassworddatabase","Trucorp");

$query = "SELECT * FROM users";
$result = $conn->query($query);
$count = 0;

while($row = $result->fetch_row())
{
echo "<tr>";
for($i = 0;$i < $result->field_count;$i++){
	
$count++;
	}
}
echo "Jumlah ada ada ".$count;

$conn->close();



?>
