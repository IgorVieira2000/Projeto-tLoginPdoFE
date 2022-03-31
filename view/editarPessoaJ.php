<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
} else {

    header("location: login.php");
}
require_once '../controller/cPessoaJ.php';
$cadPessoaJ = new cPessoaJ();
$pessoasJ = null;
if (isset($_POST['UpdatePessoaJ'])) {
    $pessoasJ = $cadPessoaJ->getPessoaJById($_POST['idPessoa']);
}
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Editar PJ</title>
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

    <script type="text/javascript">
        function mascaraFone(i) {
            const v = i.value;
            if (isNaN(v[v.length - 1])) {
                i.value = v.substring(0, v.length - 1);
                return;
            }
            i.setAttribute("maxlength", "15");
            if (v.length == 1) i.value = "(" + i.value;
            if (v.length == 3) i.value += ") ";
            if (v.length == 10) i.value += "-";
        }

        function formataCNPJ() {

            /**/
            var CNPJ = document.getElementById("cnpj");
            if (CNPJ.value.length == 2 || CNPJ.value.length == 6) {
                CNPJ.value += ".";
            } else if (CNPJ.value.length == 10) {
                CNPJ.value += "/";
            } else if (CNPJ.value.length == 15) {
                CNPJ.value += "-";
            }
        }

        function mascara(i) {
            const v = i.value;
            if (isNaN(v[v.length - 1])) {
                i.value = v.substring(0, v.length - 1);
                return;
            }
            i.setAttribute("maxlength", "14");
            if (v.length == 3 || v.length == 7) i.value += ".";
            if (v.length == 11) i.value += "-";
        }
    </script>

</head>
<div>
    <h2>Editar Pessoa Jurídica</h2>
    <form action="../controller/updatePessoaJ.php" method="Post">
        <input type="hidden" name="idPessoa" value="<?php echo $pessoasJ[0]['idPessoa']; ?>" />
        <label>Nome:</label>
        <input value="<?php echo $pessoasJ[0]['nome']; ?>" type="text" name="nome" id="nome" />
        <br>
        <label>Telefone:</label>
        <input value="<?php echo $pessoasJ[0]['telefone']; ?>" type="text" name="telefone" id="telefone" oninput="mascaraFone(this)" />
        <br>
        <label>E-Mail:</label>
        <input value="<?php echo $pessoasJ[0]['email']; ?>" type="text" name="email" id="email" />
        <br>
        <label>CNPJ:</label>
        <input value="<?php echo $pessoasJ[0]['cnpj']; ?>" type="text" name="cnpj" id="cnpj" maxlength="18" oninput="formataCNPJ" />
        <br>
        <label>Nome Fantasia:</label>
        <input value="<?php echo $pessoasJ[0]['nomeFantasia']; ?>" type="text" name="nomeFantasia" id="nomeFantasia" />
        <br>
        <br>
        <br>
        <input type="submit" value="Salvar" name="UpdatePessoaJ" />
    </form>

    <body>
        <?php
        // put your code here
        ?>
</div>
</body>

</html>