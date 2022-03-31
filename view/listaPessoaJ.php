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
require_once '../controller/cPessoaJ.php';
$cadPessoaJ = new cPessoaJ();
$listPessoaJ = $cadPessoaJ->getPessoaJ();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lista PJ</title>
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
        <!--cria Tabela-->
        <thead>
            <!-- Cria Cabeçalho da Tabela-->
            <tr>
                <!-- Cria Linha da Tabela-->
                <th>id</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>CNPJ</th>
                <th>Nome Fantasia</th>
                <th>Funções</th>
                <!--cria Cabeçalho-->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listPessoaJ as $pessoaJ) : ?>
                <tr>
                    <td><?php echo $pessoaJ['idPessoa']; ?> </td>
                    <td> <?php echo $pessoaJ['nome']; ?> </td>
                    <td> <?php echo $pessoaJ['telefone']; ?> </td>
                    <td> <?php echo $pessoaJ['email']; ?> </td>
                    <td> <?php echo $pessoaJ['cnpj']; ?> </td>
                    <td> <?php echo $pessoaJ['nomeFantasia']; ?> </td>
                    <td>
                        <form action="../controller/deletePessoaJ.php" method="POST">
                            <input type="hidden" name="idPessoa" value="<?php echo $pessoaJ["idPessoa"]; ?>" />
                            <input type="submit" name="deletePessoaJ" value="Deletar" />
                        </form>
                        <form action="../view/editarPessoaJ.php" method="POST">
                            <input type="hidden" name="idPessoa" value="<?php echo $pessoaJ["idPessoa"]; ?>" />
                            <input type="submit" name="UpdatePessoaJ" value="Editar" />
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