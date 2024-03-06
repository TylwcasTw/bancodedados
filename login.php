<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["loginEmail"];
    $senha = $_POST["loginSenha"];


if($email == 'usuario' && $senha =='senha'){
    echo "login bem sucedido!";
   } else {
    echo "Falha no Login. Verifeque se as credenciais foram digitadas corretamente.";
}
}
?>



<!DOCTYPE html>
<html long="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, iitial-scale=1.0">
    <title>loin</title>
    <link rel= "stylesheet" href="Styles_.css"/>

    

    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="login.php" mwthod="POST">
        <h1>login<h1>
            <label for ="email">email:</label>
            <input type="text" name="email" requires>

            <label for="senha">Senha:</label>
            <input type="password" name="password" requires>

            <button>Entrar</button>
            <a href="../Banco_dad/esqueci_senha.php">Esqueci minha senha</a>
        </form>
    </div>
</body>
</html>

            