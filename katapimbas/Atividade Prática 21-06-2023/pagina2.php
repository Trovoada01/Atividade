<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <?php
    echo '<center><h1>Cadastro</h1></center>';
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    echo $nome;
    echo $senha;

    session_start();
    $_SESSION["usuario"]   = $nome; 
    $_SESSION["senha"]     = $senha;
    ?>
</body>
</html>