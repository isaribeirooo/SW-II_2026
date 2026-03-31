<?php

    // string json contendo os dados de um funcionario
    $json_str = '{"nome": "Isa e Miguel", "idade": 17, "sexo": "F E M"}';

    //faz o parsing na string, gerando um objeto PHP
    $obj = json_decode($json_str);

    //echo $obj;
    echo "<pre>";
    var_dump($obj);
    echo "</pre>";

    echo "<hr>";

    //imprime o conteudo do objeto
    echo "nome: $obj->nome<br>";
    echo "idade: $obj->idade<br>";
    echo "sexo: $obj->sexo<br>";

?>