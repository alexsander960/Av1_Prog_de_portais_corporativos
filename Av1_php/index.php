<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .box {
            margin-left: 790px;
            margin-top: 120px;  
             }

        .box2 {
            margin-left: 840px;
            margin-top: 440px;  
              }

        p     {
            font-size: 18px;
            color: white;
              }

        body {
            background-image: url("background.jpg");
            background-repeat: no-repeat; 
            background-size: cover;
             }
        </style>

        <title>Login</title>
</head>

    <body>
        <div class="box">
                    <h3><b>Login</b></h3>
                <?php
                if(isset($_SESSION['nao_autenticado'])):
                ?>

            <div>
                <?php
                endif;
                unset($_SESSION['nao_autenticado']);
                ?>

                    <form action="login.php" method="POST">
                        <input class="w3-input w3-border" style="width:350px" name="usuario" name="text"  placeholder="Seu usuário" autofocus="">
                        <input class="w3-input w3-border" style="width:350px" name="senha"  type="password" placeholder="Sua senha">
                        <button class="w3-btn w3-teal"type="submit">Entrar</button>
                    </form>
            </div>

                <div class="box2">       
                    <p><b>Usuário: ADMIN/ Senha: 123</b></p>
                    <p><b>ADMIN2/ Senha: 123</b></p>
                    <p><b>ADMIN3/ Senha: 123</b></p>
                    <p><b>ADMIN4/ Senha: 123</b></p>
                    <p><b>ADMIN5/ Senha: 123</b></p>
                </div>  
    </body>

</html>