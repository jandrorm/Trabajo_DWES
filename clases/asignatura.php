<?php
    class Asignaturas{
        private $id;
        private $nombre;
        private $creditos;
       
        public function __construct($id, $nombre, $creditos){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->creditos = $creditos;
        }
 
        public function __toString(){
            return "Nombre: {$this->nombre}, Céditos: {$this->creditos}";
        }
 
      public static function crearAsignaturas(){
        $asignaturas = [];
        $asignaturas [] = new Asignaturas (1, "DWES", 7);
        $asignaturas [] = new Asignaturas (2,"DWEC",6);
        $asignaturas [] = new Asignaturas (3,"DIW",4);
        $asignaturas [] = new Asignaturas (4,"DAW",6);
        return $asignaturas;
      }
     
 
        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }
 
        /**
         * Set the value of id
         */
        public function setId($id): self
        {
                $this->id = $id;
 
                return $this;
        }
 
        /**
         * Get the value of nombre
         */
        public function getNombre()
        {
                return $this->nombre;
        }
 
        /**
         * Set the value of nombre
         */
        public function setNombre($nombre): self
        {
                $this->nombre = $nombre;
 
                return $this;
        }
 
        /**
         * Get the value of creditos
         */
        public function getCreditos()
        {
                return $this->creditos;
        }
 
        /**
         * Set the value of creditos
         */
        public function setCreditos($creditos): self
        {
                $this->creditos = $creditos;
 
                return $this;
        }
    }
?>