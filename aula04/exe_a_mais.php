<?php
    function resto($x){
    $resto = $x % 2;
    return $resto ;

    }

    $num1 = 8;
    $num2 = 4;

    $resultado = resto ($num1);


    if ($resultado == 0) {
        echo "par: $resultado";
    }else{
        echo "impar: $resultado";
    }
    


?>