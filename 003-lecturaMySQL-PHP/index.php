<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo</title>
    <link rel="stylesheet" href="style.css?v=sdf">
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

<?php
//constante
const NOMBRE ="Juan";

//variable
$edad =32;

// arrays
$trabajos =[
    'Guia de museo',
    'camarero en verano',
    'Vigilante piscina',
    'electricista',
    'mecanico'];

echo  "Hola, mi nombre es ".NOMBRE." y tengo ".$edad." años.<br>";
echo "A lo largo de mi vida he trabajdo como: ";

for( $i=0 ; $i<count($trabajos) ; $i++ ){
  echo $trabajos[$i];

  //poner coma en caso de que no sea el último
  if($i!=count($trabajos)-1){
    echo ', ';
  }
  //poner punto si es el último elemento
  else{
    echo '.';
  }
}

// Array multidimensional con los datos:

$datos =[
    // titulo del libro                 Codigo   Autor                              Portada     
    ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],
    ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],  ['titulo'=>'El Quijote',           'codigo'=> 546,    'autor'=>'Cervantes',   'portada'=> 'quijote.jpg'],
    ['titulo'=>'El Hobbit',            'codigo'=> 545 ,   'autor'=>'Tolkien',     'portada'=> 'hobbit.jpg'],  
    ['titulo'=>'La piedra filosofal',  'codigo'=> 554,    'autor'=>'Rowling',     'portada'=> 'hp1.jpg'],
    ['titulo'=>'El Código Davinci',    'codigo'=> 654,    'autor'=>'Dan Brown',   'portada'=> 'codigo.jpg'],
    ['titulo'=>'Ana Karenina',         'codigo'=> 666,    'autor'=>'Toldstoy',    'portada'=> 'Akarenina.webp']
];

//Bucle para recorrer el array:
echo '<ul>';
for($i=0; $i<=count($datos)-1; $i++){
    echo '<li>';
    echo '<img src="img/'.$datos[$i]['portada'].'">';
    echo '<h4>'.$datos[$i]['titulo'].'</h4>';
    echo '<p>'.$datos[$i]['autor'].'</p>';
    echo '<p>C: '.$datos[$i]['codigo'].'</p>';
    echo '</li>';
}
echo '</ul>';


