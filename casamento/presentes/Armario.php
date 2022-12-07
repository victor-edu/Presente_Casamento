<?php

    namespace Desafio\Casamento\presente;

    class Armario {

        public function doaArmario($valor)
        {
            $this->validacao($valor);
            $this->armario-=$valor;  
        }
        public function validacao($valor){
           
            if ($this->armario<$valor){
               echo 'O valor do Armario já foi ultrapassado'.PHP_EOL;
            } 
        }
        
        public  function getArmario(){
            return $this->armario;
        }
       
    
    }
    
    