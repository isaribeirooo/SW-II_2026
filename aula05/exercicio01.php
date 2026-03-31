<?php
// cria array com 3 produtos
$produtos = array(
    array("nome" => "Notebook", "preco" => 3500, "quantidade" => 10),
    array("nome" => "Mouse", "preco" => 50, "quantidade" => 100),
    array("nome" => "Teclado", "preco" => 120, "quantidade" => 50)
);

// converte para json
$json = json_encode($produtos, JSON_PRETTY_PRINT);

// salva no arquivo
file_put_contents("produtos.json", $json);

echo "Arquivo produtos.json criado!";
?>
