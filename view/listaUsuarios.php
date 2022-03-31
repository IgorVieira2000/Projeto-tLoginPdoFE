<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/logout.php'>Sair</a>";
} else {
    header("location: login.php");
}
require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
$listUsers = $cadUser->getUsuarios();

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lista Usuario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
        thead {
            color: cyan;
        }

        tbody {
            color: white;
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

<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Usuário</th>
                    <th>E-mail</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listUsers as $user) : ?>
                    <tr>
                        <td><?php echo $user['idUser']; ?> </td>
                        <td> <?php echo $user['nome']; ?> </td>
                        <td> <?php echo $user['email']; ?> </td>
                        <td>
                            <form action="../controller/deleteUser.php" method="POST">
                                <input type="hidden" name="idUser" value="<?php echo $user["idUser"]; ?>" />
                                <input type="submit" name="deleteUser" value="delete" />
                            </form>
                            <form action="editarUsuario.php" method="POST">
                                <input type="hidden" name="idUser" value="<?php echo $user["idUser"]; ?>" />
                                <input type="submit" name="Update" value="editar" />
                            </form>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
            <?php
            ?>
    </div>
</body>

</html>