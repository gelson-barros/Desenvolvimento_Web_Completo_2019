<?php require_once 'validador_acesso.php' ?><html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="../frameworks/bootstrap4/css/bootstrap.min.css">

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

      <div class="card-abrir-chamado">
        <div class="card">
          <div class="card-header">
            Abertura de chamado
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">

                <form>
                  <div class="form-group">
                    <label>Título</label>
                    <input type="text" class="form-control" placeholder="Título">
                  </div>

                  <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control">
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>Rede</option>
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3"></textarea>
                  </div>

                  <div class="row mt-5">
                    <div class="col-6">
                      <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
                    </div>

                    <div class="col-6">
                      <a class="btn btn-lg btn-info btn-block" type="submit">Abrir</a>
                    </div>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>