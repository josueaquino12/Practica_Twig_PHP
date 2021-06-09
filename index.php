<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Proyecto Twig</title>
</head>
<body>

<?php

require_once './vendor/autoload.php';

/*$loader = new Twig_Loader_Array(array(
    'index' => 'Hola soy {{name}}, {{saludo}}!',
));

$twig = new Twig_Environment($loader);*/

/*
$params = [
    'name' => 'Josue',
    'saludo' => 'bienvenidos a mi pagina'
];

echo $twig->render('index',$params);*/

$loader = new Twig_Loader_Filesystem('./vistas');
$twig = new Twig_Environment($loader, []);
$todo = 'todos';
$saludo = 'bienvenidos a mi pagina';

$persona = [
    'nombre' => 'josué',
    'apellido' => 'aquino',
    'edad' =>24
];

$animales = [
    'gato',
    'perro',
    'conejo',
    'hamster',
    'vaca',
    'toro',
    'leon'
];

$verdad=true;

echo $twig->render('bienvenida.twig', compact('todo', 'saludo', 'persona', 'animales'));
echo $twig->render('practica.twig', compact('todo', 'saludo', 'persona','verdad'));

//echo "<h1 style=color:red>".$twig->render('index',compact('name', 'saludo'))."</h1>";


?>
    
</body>
</html>