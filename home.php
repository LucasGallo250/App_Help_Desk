<? require_once "validador_acesso.php"; ?>
  
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk - Menu</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>
      <!--NAV-->
    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="#menu">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logoff.php" class="nav-link">SAIR</a>
        </li>
      </ul>

    </nav>
    <!--FIM: NAV-->

    <div class="container">    
      <div class="row">

      <!-- TABELA MENU: A partir de abaixo é criado por uma tabela do menu: abrir e consultar do chamado -->
        <div class="card-home">
          <div class="card">
            <!-- MENU -->
            <div class="card-header">
              Menu
            </div>
            <!-- MENU: FIM -->
            
            <!-- FORMULARIOS (IMAGENS) -->
            <div class="card-body">
              <div class="row">
                
                <!-- ABRIR CHAMADO -->
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="formulario_abrir_chamado.png" width="70" height="70">
                  </a>
                </div>
                <!-- ABRIR: FIM -->
                
                <!-- CONSULTAR CHAMADO -->
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="formulario_consultar_chamado.png" width="70" height="70">
                  </a>
                </div>
                <!-- CONSULTAR: FIM -->

              </div>
            </div>
            <!-- FORMULARIOS: FIM -->

          </div>
        </div>
      <!-- TABELA MENU: FIM -->

    </div>
  </body>
</html>