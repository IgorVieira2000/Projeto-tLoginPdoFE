<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../controller/cLogin.php';
$login = new cLogin();

?>
<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <title>Tela Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" 
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />

    </head>
    <body>
    <div class="container">
    <div class="wrapper">
        <form action="<?php $login->login() ?>"method="POST" name="Login_Form" class="form-signin">
             <form method="POST">
             <h3 class="form-signin-heading">Bem-Vindo Por Favor Faça Seu Login</h3>
             <hr/>
            <label for="email"></label>
            <input class="form-control" type='email' name='email' placeholder="E-Mail Aqui..."/>
            <br/>
            <input class="form-control" type='password' name='pas' placeholder="Senha Aqui..."/>
            <br/>
            <input class="btn btn-outline-success btn-lg btn-block" type='submit' name='logar' value='LOGAR'/>
            <br/>
            <input class="btn btn-outline-danger btn-lg btn-block" type='reset' name='limpar' value="LIMPAR"/>
            <hr/>
             </form>
        <?php
        // put your code here
        ?>
        </div>
    </div>
    </body>
</html>
