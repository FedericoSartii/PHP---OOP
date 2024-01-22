<?php
    require_once("Alunno.php");
    $array = [];
    $a = new Alunno("Andrea", "Dimarco", 18);
    $b = new Alunno("Alessio", "Bastoni", 19);
    $c = new Alunno("Matteo", "Darmian", 20);
    array_push($array, $a);
    array_push($array, $b);
    array_push($array, $c);
    foreach($array as $alunno){
        echo $alunno->__toString();
    }
?>