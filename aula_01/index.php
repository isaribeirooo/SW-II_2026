<?php
$nome = "Isadora";
$idade = 16;
$preco = 10.50;
$ativo = true;
echo "Nome: " . $nome . "<br>";
echo "Idade: " . $idade . "<br>";
echo "Preço: R$" . $preco . "<br>";
echo "Status: " . ($ativo ? "Ativo" : "Inativo");
?>