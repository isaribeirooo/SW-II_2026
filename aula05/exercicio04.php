<?php
// email procurado (pode trocar ou usar $_GET)
$emailBuscado = "ana@email.com";

// lê o arquivo
$json = file_get_contents("usuarios.json");

// converte para array
$usuarios = json_decode($json, true);

$encontrado = false;

// busca o usuário
foreach ($usuarios as $usuario) {
    if ($usuario["email"] == $emailBuscado) {
        echo "Usuário encontrado:<br>";
        echo "ID: " . $usuario["id"] . "<br>";
        echo "Nome: " . $usuario["nome"] . "<br>";
        echo "Email: " . $usuario["email"] . "<br>";
        $encontrado = true;
        break;
    }
}

// se não encontrar
if (!$encontrado) {
    echo "Usuário não encontrado!";
}
?>