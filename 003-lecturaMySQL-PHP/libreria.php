<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>PHP</h1>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="libreria.php">Libreria</a></li>
        </ul>
    </nav>
</header>
<main>
<h2>Catálogo de porductos Libería Zifar</h2>
<p>La información aquí mostrada bebe de la base de datos "libería" que está en un MYSQL</p>
<ul>
<!-- aquí el código que consulta la base de datos y la recorre para mostrar su contenido -->

<?php
//datos de conexión con la base de datos MySQL
$servername = "localhost";
$username = "root"; // nombre de usuario
$password = ""; // contraseña en XAMPP está vacía
$dbname = "libreria";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Revisar si hay algún error en la conexión y si lo hay mostrarlo:
if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}


$sql = "SELECT titulo, portada, autor, precio from libros WHERE disponible=1 AND precio >2  ORDER BY titulo ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // bucle que recorre el array donde se almacena la info
  // el array es lo que ha devuelto la consulta MySQL
  while($dato = $result->fetch_assoc()) {
    echo '<li>';
    echo '<img src="img/'.$dato['portada'].'">';
    echo '<h3>'.$dato['titulo'].'</h3>';
    echo '<p>'.$dato['autor'].'</p>';
    echo '<p>PVP:'.$dato['precio'].'€ </p>';
    echo '</li>';
  }
} else {
  echo "No se han encontrado resultados <a href="index.php">Volver a la página de inicio</a>";
}

$conn->close();
?>





</ul>
</main>

</body>
</html>