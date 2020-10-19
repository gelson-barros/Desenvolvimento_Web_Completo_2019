<?php
session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
  header('Location: index.php?login=erro2');
}


?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="../frameworks/bootstrap4/css/bootstrap.min.css">

    <style>
      .card-home {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_abrir_chamado.png" width="70" height="70">
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <img src="formulario_consultar_chamado.png" width="70" height="70">
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>