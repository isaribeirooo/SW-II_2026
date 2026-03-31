<?php

    // string json (array contendo 3 elementos)
    $json_str = '
    {"empregados": ' .
        '[
            {"nome": "Isa e Miguel", "idade": 17, "sexo": "F E M"},'.
            '{"nome": "Pops e July", "idade": 17, "sexo": "F E M"},'.
            '{"nome": "Helo e Brigido", "idade": 17, "sexo": "F E M"}'.
        ']
    }';
    //faz o parsing na string, criando um array "empregados"
    $jsonObj = json_decode($json_str);
    echo "<pre>";
    var_dump($jsonObj);
    echo "</pre>";

    echo "<hr>";
    $empregados = $jsonObj->empregados;
    echo "<pre>";
    var_dump($empregados);
    echo "</pre>";

    echo "<hr>";
    foreach ($empregados as $e){
        echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>";
    }


?>