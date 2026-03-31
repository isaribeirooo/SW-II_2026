<?php
// lê o arquivo
$json = file_get_contents("produtos.json");

// converte para array
$produtos = json_decode($json, true);

// novo produto
$novo = array(
    "nome" => "Monitor",
    "preco" => 900,
    "quantidade" => 20
);

// adiciona ao array
$produtos[] = $novo;

// converte novamente para JSON
$json = json_encode($produtos, JSON_PRETTY_PRINT);

// salva no arquivo
file_put_contents("produtos.json", $json);

echo "Novo produto adicionado!";
?>