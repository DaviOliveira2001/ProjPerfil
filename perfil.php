<?php
//verificar se o usuário está logado//

session_start();

if(!isset($_SESSION["id"])){
    header("Location: login.php");
    exit();
}

//exibir as informações do usuário logado//

$id = $_SESSION["id"];
$nome = $_SESSION["nome"];
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/perfil.css">
    <title>Perfil</title>
</head>
<body>
    <div class="perfil">
    <h1>Seu perfil</h1><br><br>
    <p>ID:<?php echo $id; ?></p><br>
    <p>Nome:<?php echo $nome; ?></p><br>
    <p>Email:<?php echo $email; ?></p><br>
    <p><a href="editar_usuario.php">Editar cadastro</a></p>
    <p><a href="excluir_usuario.php">Excluir cadastro</a></p>
    </div>
</body>
</html>