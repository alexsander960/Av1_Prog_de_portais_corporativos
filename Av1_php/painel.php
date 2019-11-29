<?php
session_start();
include('verifica_login.php');
?>

    <!DOCTYPE html>
<html>
        <head>
            <style>
                
            a:link, a:visited {
            background-color: #f44336;
            color: white;
            padding: 14px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
                              }

            a:hover, a:active {
            background-color: red;
                              }
            </style>
        </head>
<body>
    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
    <h2><a href="logout.php">Sair</a></h2>
    <h2><a href="alunos.php">Listar alunos</a></h2>
    <h2><a href="lista.php">Listar usuarios</a></h2>
    <h2><a href="">Pesquisar alunos</a></h2>
</body>

</html>