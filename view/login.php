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
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Tela login</title>
        <link href="stylelogin.css" rel="stylesheet">

    </head>
    <body>
        <div>
        <h1>Login</h1>
        <form action="<?php $login->login() ?>"method="POST">
             <form method="POST">
            <label for="email"></label>
            <input type='email' name='email' placeholder="E-Mail Aqui..."/>
            <br><br>
            <input type='password' name='pas' placeholder="Senha Aqui..."/>
            <br><br>
            <input class="btn-hover color-1" type='submit' name='logar' value='LOGAR'/>
            <input class="btn-hover color-1" type='reset' name='limpar' value="LIMPAR"/>
             </form>
        <?php
        // put your code here
        ?>
        </div>
    </body>
</html>
