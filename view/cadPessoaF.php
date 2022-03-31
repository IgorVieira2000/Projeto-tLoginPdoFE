<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    echo $_SESSION['usuarioT'] . " | " . $_SESSION['emailT'];
    echo " | <a href='../controller/cLogout.php'>Sair</a>";
} else {

    header("location: login.php");
}
?>
<?php
require_once '../controller/cPessoaFisica.php';
$cadPessoaF = new cPessoaFisica();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Cadastro P.Fisica</title>
        <link href="styleCADP.css" rel="stylesheet">
    </head>
    <body>
    <div class="form">
        <h1>Cadastro de Pessoa Física</h1>
        <form action="<?php $cadPessoaF->inserirPessoaF() ?>"method="POST">
            <form method="POST">
                <input type='text' name='nome' placeholder="Nome Aqui..."/>
                <br><br>
                <input type='email' name='email' placeholder="E-Mail Aqui..."/>
                <br><br>
                <input type='text' name='telefone' placeholder="Telefone Aqui..."/>
                <br><br>
                <input type='text' name='endereco' placeholder="Endereço Aqui..."/>
                <br><br>
                <input type='text' name='cpf' placeholder="CPF Aqui..."/>
                <br><br>
                <input type="radio" value="F" name="sexo"/>Feminino
                <input type="radio" value="M" name="sexo"/>Masculino
                <br><br>
                <input type='submit' name='salvar' value='salvar'/>
                <input type='reset' name='limpar' value="limpar"/> 
                <input type="button" name="voltar" value="voltar" onclick="location.href = '../index.php'" />
                <input type="button" name="listar" value='listar' onclick="location.href = 'listaPessoaF.php'"/>
</div>
                </body>
                </html>
