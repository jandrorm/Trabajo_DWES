<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("clases/Miembro.php");
    require("clases/Alumno.php");
    require("clases/Profesor.php");
    require("clases/Asignatura.php");
 
    $alumnos = Alumno::crearAlumnosMuestra();
    $profesores = Profesor::crearProfesores();
    $asignaturas = Asignaturas::crearAsignaturas();
    $menor23 = Alumno::filtrar($alumnos);
 
$alumnos[0]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);  
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);  
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);
?>
<h2>Alumnos</h2>
<ul>
<?php foreach ($alumnos as $alumno) { ?>
    <li>
    <?= $alumno ?>
    </li>
    <?php } ?>
</ul>
    <h2>Profesores:</h2>
    <ul>
<?php foreach ($profesores as $profesor) {?>
        <li>
        <?= $profesor ?>
        </li>
        <?php } ?>
    </ul>
 
   
    <h2>Asignaturas:</h2>
    <ul>
    <?php foreach ($asignaturas as $asignatura) { ?>
        <li>
        <?= $asignatura ?>
        </li>
    <?php } ?>
    </ul>  
 
    <h2>Alumnos <= 23</h2>
    <ul>
    <?php foreach($menor23 as $alumno){ ?>
        <li>  
        <?= $alumno ?>
        </li>
    <?php } ?>
    </ul>
 
    <h2>Alumnos con al menos dos asignaturas</h2>
    <?php $filtrarAsig = array_filter($alumnos, function($alumno){
        return count($alumno->getAsignaturas()) >=2;
    });?>
 
    <ul>
    <?php foreach ($filtrarAsig as $alumno) {  ?>
        <li>
        <?= $alumno ?>
        </li>
    <?php } ?>
    </ul>
 
    <h2>Asignaturas con algún alumno matriculado</h2>
    <?php
   
    $asignaturasMatriculados = [];
 
    $asignaturasMatriculados = array_filter($asignaturas, function($asignatura) use ($alumnos,$asignaturasMatriculados){
        foreach ($alumnos as $alumno){
            if (in_array($asignatura, $alumno->getAsignaturas())){
                return true;
            }
        }
        return false;
    });
 
    ?>
    <ul>
    <?php foreach($asignaturasMatriculados as $asignatura){ ?>
        <li>
        <?= $asignatura; ?>
        </li>
    <?php } ?>
    </ul>
</body>
</html>