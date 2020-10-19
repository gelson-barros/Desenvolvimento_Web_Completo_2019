<html>

<head>
	<meta charset="utf-8" />
	<title>App Mail Send</title>

	<link rel="stylesheet" href="../frameworks/bootstrap4/css/bootstrap.min.css">

</head>

<body>

	<div class="container">

		<div class="py-3 text-center">
			<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
			<h2>Send Mail</h2>
			<p class="lead">Seu app de envio de e-mails particular!</p>
		</div>

		<div class="row">
			<div class="col-md-12">

				<div class="card-body font-weight-bold">
					<form method="post" action="processa_envio.php">
						<div class="form-group">
							<label for="para">Para</label>
							<input type="text" class="form-control" id="para" name="para" placeholder="joao@dominio.com.br">
						</div>

						<div class="form-group">
							<label for="assunto">Assunto</label>
							<input type="text" class="form-control" id="assunto" name="assunto" placeholder="Assundo do e-mail">
						</div>

						<div class="form-group">
							<label for="mensagem">Mensagem</label>
							<textarea class="form-control" id="mensagem" name="mensagem"></textarea>
						</div>

						<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>