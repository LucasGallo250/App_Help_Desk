<? require_once "validador_acesso.php" ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk - Abrir Chamado</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="home.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>

    </nav>

    <div class="container">    
      <div class="row">


        <div class="card-abrir-chamado">
          <div class="card">
            
            <div class="card-header">
              Abertura de Chamado
            </div>

            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <!-- criar o formulário pro Título e Categoria -->
                  <form method="POST" action="registrar_chamado.php">
                    <!-- FORM: TITULO -->
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Título">
                    </div>
                    <!-- FIM FORM: TITULO -->
                    
                    <!-- FORM: CATEGORIA -->
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                        <option>BUGS</option>
                      </select>
                    </div>
                    <!-- FIM FORM: CATEGORIA -->
                    
                    <!-- DESCRIÇÃO -->
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>
                    <!-- FIM DESCRIÇÃO -->

                    <div class="row mt-4">
                      <div class="col-6">
                        <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                      </div>
                      
                    </div>
                  </form>


                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- FIM: criar a tabela do chamado -->

    </div>
  </body>
</html>