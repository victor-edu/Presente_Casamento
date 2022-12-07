<?php

    namespace Desafio\Casamento\presente;

    class fogao {

        private $fogao=500;

        public function doaFogao($valor)
        {
            $this->validacao($valor);
            $this->fogao-=$valor;  
        }
        public function validacao($valor){
           
            if ($this->fogao<$valor){
               echo 'O valor do Fogao já foi ultrapassado'.PHP_EOL;
            } 
        }
        
        public  function getFogao(){
            return $this->fogao;
        }
       
    
    }
    