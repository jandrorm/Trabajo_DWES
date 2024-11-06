<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$libros = [  
    "libro1" => [  
        "titulo" => "PHP para Principiantes",  
        "autor" => "Carlos Ruiz",  
        "precio" => 19.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro2" => [  
        "titulo" => "JavaScript Avanzado",  
        "autor" => "Laura García",  
        "precio" => 25.99,  
        "categoria" => "Desarrollo web"  
    ],  
    "libro3" => [  
        "titulo" => "Algoritmos en Python",  
        "autor" => "Miguel Fernández",  
        "precio" => 29.99,  
        "categoria" => "Algoritmos"  
    ]  
];
$categ = array_filter($libros, function($libro){
    return $libro["categoria"] == "Desarrollo web";
});
?>
<table border="1">
    <h2>Información de todos los libros</h2>
    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Precio</th>
        <th>categoria</th>
    </tr>
    <?php
    foreach ($libros as $libro){
    echo "<tr>";
    echo "<td>".$libro["titulo"] . "</td>";
    echo "<td>".$libro["autor"] . "</td>";
    echo "<td>".$libro["precio"] ."€". "</td>";
    echo "<td>".$libro["categoria"] . "</td>";
    echo "</tr>";
    }
    ?>
</table>
    <h2>Libors de la categoría 'Desarrollo Web'</h2>
    <?php
    echo "<ol>";
    foreach ($categ as $libro){
        echo "<li>".$libro["titulo"] . "</li>";
    }
    echo"</ol>";
    ?>
</body>
</html>