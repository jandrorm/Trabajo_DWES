<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once("clases/TriangleGenerator.php");
 
$altura = 5;
$triangulo = new triangulo($altura);
?>
<h2>Triangulo</h2>
<pre>
<?php
$triangulo->dibujo();
?>
</pre>
</body>