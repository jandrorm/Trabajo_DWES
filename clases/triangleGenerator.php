<?php
    class Triangulo{
        private $altura;
   
        public function __construct( $altura ) {
        $this->altura = $altura;
        }
 
        public  function dibujo(){
        for($i= 1; $i <= $this -> altura; $i++){
            echo str_repeat('&nbsp;', $this-> altura - $i);
            echo str_repeat('*', 2 * $i - 1);
            echo "<br>";
        }
        }
    }
 
?>