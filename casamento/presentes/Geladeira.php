<?php

    namespace Desafio\Casamento\presente;

    class geladeira {

        private $geladeira=1000;

        public function doaGeladeira($valor)
        {
            $this->validacao($valor);
            $this->geladeira-=$valor;  
        }
        public function validacao($valor){
           
            if ($this->geladeira<$valor){
              return 'O valor do Geladeira já foi ultrapassado'.PHP_EOL;
            } 
            
        }
        
        public  function getGeladeira(){
            return $this->geladeira;
        }
       
    
    }
        
    