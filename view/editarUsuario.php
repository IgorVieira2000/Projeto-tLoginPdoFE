<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
} else {

    header("location: login.php");
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$Users = null;
if (isset($_POST['Update'])) {
    $Users = $cadUser->getUsuarioById($_POST['idUser']);
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Editar Usuario</title>
        <style>
        thead {
            color: green;
        }

        tbody {
            color: blue;
        }

        tfoot {
            color: red;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, DodgerBlue);
        }

        div {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
            text-align: center;
        }

        label {
            text-align: center;
            padding: 20px;
            margin: 10px;
        }

        input {
            display: block;
            margin-left: auto; 
            width: 420px;
            height: 45px;
            border-radius: Opx;
            box-shadow: 4px 4px;
            border-radius: 10px;
        }
    </style>
    </head>
    <div>
    <h2>Editar Usuario</h2>
    <form action="../controller/updateUser.php" method="Post">
        <input type="hidden" name="idUser" value="<?php echo $Users[0]['idUser']; ?>"/>
        <label>Nome:</label>
        <input value="<?php echo $Users[0]['nome']; ?>" type="text" name="nome" id="nome"/>
        <br>
        <br>
        <label>Email:</label>
        <input value="<?php echo $Users[0]['email']; ?>" type="email" name="email" id="email" />
        <br>
        <br>
        <input type="submit" value="Salvar" name="Update" />
    </form>
    <body>
        <?php
        // put your code here
        ?>
        </div>
    </body>
</html>
