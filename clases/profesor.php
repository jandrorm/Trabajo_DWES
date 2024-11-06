<?php
    class Profesor extends Miembro{
       private bool $titular;
       private $asignatura;
 
       public function __construct($id,$nombre,$apellidos,$email,$asignatura){
        parent::__construct($id,$nombre,$apellidos,$email);
        $this->titular = false;
        $this->asignatura = $asignatura;
       }
 
 
       public static function crearProfesores(){
        $profesores = [];
        $profesores [] = new Profesor(1, "Steve", "Mozniak", "steve@apple.com", "DWES");
        $profesores [] = new Profesor(2, "Ada", "Lovelace", "ada@gmail.com", "DIW");
        $profesores [] = new Profesor(3, "Taylor", "Otwell", "taylor@laravel.com", "DWEC");
        $profesores [] = new Profesor(4, "Rasmus", "Lerdoff", "rasmus@php.com", "DAW");
 
        return $profesores;
        }
       
        public function __toString(){
            return parent::__toString().",  {$this->asignatura}";
        }
    }      
       
?>