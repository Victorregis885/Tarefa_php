<?php

    $numero = $_GET['numero'];
    $numero_2 = $_GET['numero2'];
    $op = $_GET['op'];



   switch($op){
    case "soma":
        $soma = $numero + $numero_2;
        echo "  <center>A soma dos valores é $soma  </center>";
        break;
    
    case "mult":
        $mult = $numero * $numero_2;
        echo " <center>O produto dos valores é $mult </center>";
        break;

    case "div":
        $div = $numero / $numero_2;
        echo "<center>A divisão dos valores é $div </center>";
        break;
    
    case "sub":
        $sub = $numero - $numero_2;
        echo "<center>A subtração dos valores é $sub </center>";
        break;

    default:
        echo "<center>Operação invalida!! </center>";
   }

?>