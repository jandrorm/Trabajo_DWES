<?php
    class Miembro{
        public int $id;
        public $nombre;
        public $apellidos;
        public $email;
   
 
     public function __construct(int $id,$nombre,$apellidos,$email) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
    }
 
        public function getId(): int
        {
                return $this->id;
        }
 
       
        public function setId(int $id): self
        {
                $this->id = $id;
 
                return $this;
        }
 
       
        public function getNombre()
        {
                return $this->nombre;
        }
 
       
        public function setNombre($nombre): self
        {
                $this->nombre = $nombre;
 
                return $this;
        }
 
       
        public function getApellidos()
        {
                return $this->apellidos;
        }
 
       
        public function setApellidos($apellidos): self
        {
                $this->apellidos = $apellidos;
 
                return $this;
        }
 
 
        public function getEmail()
        {
                return $this->email;
        }
 
 
        public function setEmail($email): self
        {
                $this->email = $email;
 
                return $this;
        }
 
        public function __toString(){
         return "Nombre: {$this->nombre},  {$this->apellidos}, email: {$this->email}";  
        }
}
?>