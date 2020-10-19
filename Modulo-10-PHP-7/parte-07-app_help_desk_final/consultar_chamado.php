<?php require_once 'validador_acesso.php';
//chamados
$chamados = array();

//abrir o arquivo.hd
$arquivo = fopen('arquivo.hd', 'r');

//enqunto houver registros (linhas) serem recuperados
while (!feof($arquivo)) { //testa pelo fim do arquivo e retorna true
  //linhas
  $registro = fgets($arquivo);
  if ($_SESSION['perfil_id'] == 2) {
    $registro_dados = explode('#', $registro);
    //só vamos o chamado, se ele foi criado pelo úsuario
    if ($_SESSION['id'] != $registro_dados[0]) {
      continue;
    }
  }
  
  $chamados[] = $registro;
}

//fechar o arquivo aberto
fclose($arquivo);

?>
<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="../frameworks/bootstrap4/css/bootstrap.min.css">

  <style>
    .card-consultar-chamado {
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
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="logoff.php" class="nav-link">SAIR</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">

            <?php foreach ($chamados as $chamado) {

              $chamado_dados = explode('#', $chamado);
              
              if (count($chamado_dados) < 3) {
                continue;
              }

            ?>
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $chamado_dados[2] ?></h6>
                  <p class="card-text"><?php echo $chamado_dados[3] ?></p>

                </div>
              </div>
            <?php } ?>


            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div>
            </di v>
          </div>
        </div>
      </div>
    </div>
</body>

</html>