<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe Dados</title>
</head>
<body>
    
    <?php
        //$nome = $_POST['nome'];
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        $ano = 2026;

    ?>

    <p>Seu nome é:  <?php echo $nome;   ?></p>
    <p>Seu email é:  <?php echo $email;   ?></p>
    <p>Sua idade é:  <?php echo $idade;   ?></p>
    <p>Seu ano de nascimento é:  <?php echo $ano - $idade;   ?></p>


     <?php
    if ($idade >= 18) {
        echo '<p style = "color: green">Vc é maior de idade </p>'; 
    } else {
        echo '<p style = "color: red">Vc é menor de idade </p>';
    }
    

    ?>

</body>
</html>