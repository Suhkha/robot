<link rel="stylesheet" href="styles/bootstrap.min.css">
<link rel="stylesheet" href="styles/main.css">
<?php 
ini_set("display_errors", "1");
error_reporting(E_ALL);

require('Connect.php');

echo "<div class='container'>";
echo "<h1 class='activities--subtitle'>Lista de usuarios registrados</h1>";
echo "<a href='http://koneticamx.com/'>Regresar al sitio</a>";

$all = mysqli_query($link, "select * from users");
while($row = mysqli_fetch_array($all)){
     echo "<table class='table'>";
     	echo "<thead>";
     		echo "<th>Nombre</th>";
     		echo "<th>Email</th>";
     		echo "<th>Ciudad</th>";
     	echo "</thead>";
     	echo "<tbody>";
     		echo "<tr>";
     			echo "<td>";
     				echo $row['name'];
     			echo "</td>";
     			echo "<td>";
     				echo $row['email'];
     			echo "</td>";
     			echo "<td>";
     				echo $row['city'];
     			echo "</td>";
     		echo "</tr>";
     	echo "</tbody>";
     echo "</table>";
}
echo "</div>"
?>