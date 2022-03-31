<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/logout.php'>Sair</a>";
} else {
    header("location: login.php");
}
?>
<?php
require_once '../controller/cPessoaFisica.php';
$cadPessoaF = new cPessoaFisica();
$listPessoaF = $cadPessoaF->getPessoaF();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista PF</title>
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
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                    <th>CPF</th>
                    <th>Sexo</th>
                    <th>Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listPessoaF as $pessoaF) : ?>
                    <tr>
                        <td><?php echo $pessoaF['idPessoa']; ?> </td>
                        <td> <?php echo $pessoaF['nome']; ?> </td>
                        <td> <?php echo $pessoaF['telefone']; ?> </td>
                        <td> <?php echo $pessoaF['email']; ?> </td>
                        <td> <?php echo $pessoaF['cpf']; ?> </td>
                        <td> <?php echo $pessoaF['sexo']; ?> </td>
                        <td>
                            <form action="../controller/deletePessoaF.php" method="POST" />
                            <input type="hidden" name="idPessoa" value="<?php echo $pessoaF["idPessoa"]; ?>">
                            <input type="submit" name="deletePessoaF" value="Deletar" />
                            </form>
                            <form action="editarPessoaF.php" method="POST">
                                <input type="hidden" name="idPessoa" value="<?php echo $pessoaF["idPessoa"]; ?>" />
                                <input type="submit" name="UpdatePessoaF" value="Editar" />
                            </form>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>

            <?php
            // put your code here
            ?>
    </div>
</body>

</html>