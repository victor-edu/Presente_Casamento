<?php

use Desafio\Casamento\presente\Armario;
use Desafio\Casamento\presente\fogao;
use Desafio\Casamento\presente\geladeira;

   require_once 'presentes/Armario.php';
   require_once 'presentes/Geladeira.php';
   require_once 'presentes/Fogao.php';
    
    $primeira=new       
    $segunda= new geladeira(100);
    $terceira= new Armario(300);
   

   
   echo $segunda->getGeladeira();
    

    // controle de quais presentes eles querem ganhar e então as pessoas
    // podem entrar e realizar uma doação parcial do valor do presente ou total, assim tendo
    // o controle de quais presentes eles ganharam ou quanto de dinheiro falta para
    // completar tal presente. A criatividade é livre p