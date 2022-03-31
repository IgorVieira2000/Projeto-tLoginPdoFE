<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='controller/logout.php'>Sair</a>";
} else {
    header("location: view/login.php");
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        .navbar {
            background: cyan;
            overflow: hidden;
        }

        .navbar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .navbar li a {
            float: left;
            line-height: 50px;
            padding: 0 20px;
            text-decoration: none;
            color: #333;
        }

        .navbar li a:hover {
            background-color: whitesmoke;
            color: black;
        }

        footer{
            text-align: center;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, DodgerBlue);
        }

    </style>
</head>

<body>
    <header>
        <nav class="navbar">
            <ul class="nav">
                <li><a href="view/cadUsuario.php">Cadastro de Usuário</a></li>
                <li><a href="view/cadPessoaF.php">Cadastro de Pessoa Física</a>
                <li><a href="view/cadPessoaJ.php">Cadastro De Pessoa Jurídica</a>
                </li>
                <li><a href="index.php">Home</a>
            </ul>
            </li>
            </ul>
        </nav>
    </header>

    <img src="fundomenu.jpg" width="100%">
</body>
<footer>
    <h4>Todos Direitos Reservados</h4>
</footer>
</html>