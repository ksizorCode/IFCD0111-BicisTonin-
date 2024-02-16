<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cursos de Dicampus</h1>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dicampus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM cursos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<li>";
    echo '<img src="img/'.$row["imagen"].'">';
    echo "<h2>".$row["titulo"]."</h2>";
    echo "<p>Horas:".$row["horas"]."</p>";
    echo "<p>Inicio: ".$row["fechaIni"]."</p>";
    echo "<p>Fin: ".$row["fechaFin"]."</p>";
    echo "</li>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>



</body>
</html>