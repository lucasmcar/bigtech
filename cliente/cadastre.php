<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bigtest.css">
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            
            <div class="content-box">
                <h3 class="text-center">Formulário de Cadastro</h3>
        <form>
            <div class="row">
            <div class="col-12 col-md-4">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" aria-describedby="homeHelp" placeholder="Seu nome completo">
            </div>
            </div>
            <div class="col-12 col-md-8">
            <div class="form-group">
                <label for="nome">Usuário</label>
                <input type="text" class="form-control" id="usuario" aria-describedby="usuarioHelp" placeholder="Seu usuário">
                
            </div>
            </div>
            <div class="col-12 col-md-8">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu email">
                
            </div>
            </div>
            <div class="col-6 col-md-6">    
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" aria-describedby="pwdHelp" placeholder="Senha">
                
                </div>
            </div>
            <div class="col-6 col-md-6">   
            <div class="form-group">
                <label for="confsenha">Confirme a senha</label>
                <input type="password" class="form-control" id="confsenha" aria-describedby="pwdHelp" placeholder="Senha">
                
            </div>
            </div>
            <div class="col col-lg-3 col-xs-12"> 
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="aceito">
                <label class="form-check-label" for="exampleCheck1">Concordo com os termos de uso</label>
            </div>
            <button type="submit" id="btnEnvia" class="btn btn-primary">Enviar</button>
            </div>
            </div>
        </form> 
        </div>
        </div>
    </body>
</html>
