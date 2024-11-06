<?php
    class Alumno extends Miembro{
       private int $edad;
       private array $asignaturas;
       private bool $cursoabonado;
 
       public function __construct($id, $nombre, $apellidos, $email, int $edad, array $asignaturas = [], bool $cursoabonado = false){
        parent::__construct($id, $nombre, $apellidos, $email);
        $this->edad = $edad;
        $this->asignaturas = $asignaturas;
        $this->cursoabonado = $cursoabonado;
       }
 
       
 
       public function contarAsignaturas(){
        return count($this->asignaturas);
       }
 
       public function abonarCurso(): void {
        $this->cursoabonado = true;
        echo"Abonado";
       }
 
       public function matricularEnAsignatura($asignatura){
        if(!in_array($asignatura, $this->asignaturas)){
           //Añadir a asignaturas el objeto asignatura
           $this->asignaturas[]=$asignatura;
        }
        }
     
       
        public function estaMatriculado($asignatura){
            if (in_array($asignatura,$this->asignaturas)) return $asignatura;
            else return null;
        }
       
       public static function crearAlumnosMuestra(){
        $alumnos = [];
        $alumnos [] = new Alumno(1, "Laura", "Martínez", "laura.martinez@email.com", 22);
        $alumnos [] = new Alumno(2, "Sergio", "López", "sergio.lopez@email.com", 25,);
        $alumnos [] = new Alumno(3, "Carlos", "García", "carlos.garcia@email.com", 24);
        $alumnos [] = new Alumno(4, "Marta", "Sánchez", "marta.sanchez@email.com", 23);
        $alumnos [] = new Alumno(5, "Alba", "Fernández", "alba.fernandez@email.com", 21,);
        $alumnos [] = new Alumno(6, "David", "Rodríguez", "david.rodriguez@email.com", 26);
        $alumnos [] = new Alumno(7, "Lucía", "Jiménez", "lucia.jimenez@email.com", 20);
        $alumnos [] = new Alumno(8, "Jorge", "Pérez", "jorge.perez@email.com", 22);
        $alumnos [] = new Alumno(9, "Elena", "Romero", "elena.romero@email.com", 23);
        $alumnos [] = new Alumno(10, "Pablo", "Torres", "pablo.torres@email.com", 24);
       
        return $alumnos;
   
        }
 
       public function menor23(){
        return $this-> edad <= 23;
       }
 
       public static function filtrar($alumnos){
        return array_filter($alumnos, function($alumnos){
            return $alumnos-> menor23();
        });
       }
 
       public function __toString(){
        return parent::__toString();
       }
 
       public function getEdad(): int
       {
              return $this->edad;
       }
 
       
       public function setEdad(int $edad): self
       {
              $this->edad = $edad;
 
              return $this;
       }
 
     
       public function getAsignaturas(): array
       {
              return $this->asignaturas;
       }
 
     
       public function setAsignaturas(array $asignaturas) {
              $this->asignaturas = $asignaturas;
       }
 
     
       public function isCursoabonado(): bool
       {
              return $this->cursoabonado;
       }
 
       
       public function setCursoabonado(bool $cursoabonado): self
       {
              $this->cursoabonado = $cursoabonado;
 
              return $this;
       }
    }
 
?>