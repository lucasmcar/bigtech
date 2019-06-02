<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="node_modules/bootstrap/compiler/bigtest.css">
        <title></title>
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-light  bg-gradient-orange fixed-top">
      <a class="navbar-brand ml-5" href="#">Big Tech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Área do cliente</a>
            <div class="dropdown-menu bg-orange" aria-labelledby="dropdown01">
                <a class="dropdown-item" id="cadastro" href="cliente/cadastre.php?cod=1">Cadastre-se</a>
              <a class="dropdown-item" href="#">Login</a>
              
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tabela de Preços</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Serviços</a>
            <div class="dropdown-menu bg-orange" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Computadores/Notebooks</a>
              <a class="dropdown-item" href="#">Desenvolvimento</a>
              <a class="dropdown-item" href="" data-toggle="modal" data-target="#modalExemplo">Instalação CFTV</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Usuário" aria-label="Search">
          <input class="form-control mr-sm-2" type="text" placeholder="Senha" aria-label="Senha">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Entrar</button>
        </form>
      </div>
    </nav>
        
        <div id="conteudo"></div>   
        
    <footer class="footer">
      <div class="container">
          <span class="text-muted text-center">Desenvolvido por Big Tech Soluções</span> 
          <span class="ml-5">&COPY;<?php $d = new DateTime(); echo $d->format('Y');?></span>
          
      </div>
    </footer>
        
 
        
    <!--Modal temporaria-->
        
  <div class="modal" id="modalExemplo" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Função indisponível</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>A modalidade de serviços de CFTV está indisponível no momento.</p>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>
<!--/modal temporaria-->    

        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/functionsJs/function.js"></script>
    </body>
</html>
