<?php
// esto es un comentario de linea

/*
Esto es un comentario
de parrafo
*/


const COSA = "c/Uria 22";
define(COSA, "c/Uria 22");


$titulo = 'Bicicletas Toñin555';

$alumnos=[
    'Jesus',
    'Montse',
    'Fran',
    'Gonzalo',
    'Gulnat',
    'Miguel',
    'Francisco'
];

//Array multidimensional
$alumnosPRO=[

           /* 0         1       2      3        4   */
  /* 0 */  ['Jesús','Rodríguez',1978,'Avilés', ['SP']],
  /* 1 */  ['Montse','Pérez',   1982,'Gijón',     ['SP','EN','DE','FR']],
  /* 2 */  ['Miguel','Esteban', 1983,'Gijón',   ['SP','EN','HTML','CSS']],
  /* 3 */  ['Gulnat','Pettit',  200,'Shymkent', ['EN','RU','SP','KZ','DE']],
  /* 4 */  ['Victor','Moralejo',2001,'Madrid', ['EN','SP']]
];


for($i=0;$i<count($alumnosPRO);$i++){

echo '<li>El alumno '.$alumnosPRO[$i][0].' '.$alumnosPRO[$i][1].' es de '.$alumnosPRO[$i][3].' y tiene '.(2023 - $alumnosPRO[$i][2]).'</li>';
}
// for($i=0;$i<count($alumnos);$i++){
//     echo $alumnos[$i];
//     echo '<br>';
// }





?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $titulo; ?></title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
        <header>
            <p><?php echo $titulo; ?></p>
            <nav>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="cotacto.php">Contacto</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Bienvenidos a <?php echo $titulo; ?></h1>
            <p>En <?php echo $titulo; ?> somos espexpertos en Bicicletas de Montaña. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, error porro? Nisi, dicta libero? Quibusdam, culpa placeat? Eligendi adipisci quae voluptatem expedita quibusdam ut earum. Architecto recusandae omnis voluptatem dolore!</p>
            <img src="img/bicicleta.jpg" alt="<?php echo $titulo; ?>" title="<?php echo $titulo; ?>">
        </main>

        <footer>
            <p>&copy; Copyright 2024 - <?php echo $titulo; ?></p>
        </footer>

    </body>
</html>