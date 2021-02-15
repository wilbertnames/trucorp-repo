<?php 
$conn=new mysqli("172.18.0.3","root","inipassworddatabase","Trucorp");

$query = "SELECT * FROM users";
$result = $conn->query($query);

echo "<table border='1'>
<tr>
	<th>ID</th>
	<th>Nama</th>
	<th>Kantor</th>
</tr>";

while($row = $result->fetch_row())
{
echo "<tr>";
for($i = 0;$i < $result->field_count;$i++){
echo "<td>$row[$i]</td>";
	}
echo "</tr>";
}
echo "</table>";

$conn->close();
?>
