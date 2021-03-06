<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Login</title>
    <link rel="stylesheet" href="css/style_login_cadastro.css">
</head>
<body>
    <div id="corpo-form">
        <h1>Cadastro</h1>
        <form method="POST" action="cadastrar.php">
            <input type="text" name="nome_usuario" placeholder="Nome Completo" maxlength="30">
            <input type="tel" name="telefone_usuario" placeholder="Telefone" maxlength="20">
            <input type="email" name="email_usuario" placeholder="Usuário" maxlength="40">
            <input type="password" name="senha_usuario" placeholder="Senha" maxlength="32">            
            <input type="submit" value="CADASTRAR">           
        </form>

        <div class="aviso_login">
            <a href="index.php">Volte para Login</a>
            <?php

                if(isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);                
                } 

                if(isset($_SESSION['campo_em_aberto'])) {
                    echo $_SESSION['campo_em_aberto'];
                    unset($_SESSION['campo_em_aberto']);
                }

                if(isset($_SESSION['usuario_existe'])) {
                    echo $_SESSION['usuario_existe'];
                    unset($_SESSION['usuario_existe']);
                }

            ?>
            
        </div>
        
    </div>

</body>
</html>