<html>
	<head>
		<meta charset="utf-8" />
		<title>Curso PHP</title>
	</head>

	<body>

		<?php
			//string, int, float, boolean, array
			//deve obrigatoriamente iniciar com o caracter $
			//não pode conter espaços ou caracter especiais(com exceção do underline)
			//naõ requer conter suporte a definição explicita de tipo
			//tipagem dinamica
			//case sensiteve faz destincão nas letras
			//$nome != $Nome != $NOME
			//variaveis validas : $nome $fone1 $endereco_2
			//variaveis invalidas $ idade $1fone $número

			//string
			$nome = 'Jorge Sant Ana';

			//int
			$idade = 29;

			//float
			$peso = 82.5;

			//boolean
			$fumante_sn = true; //(true = 1) ou (false = vazio)

			//... lógica ...//

			$idade = '30';

		?>

		<h1>Ficha cadastral</h1>
		<br/>
		<p>Nome: <?= $nome ?></p>
		<p>Idade: <?= $idade ?></p>
		<p>Peso: <?= $peso ?></p>
		<p>Fumante: <?= $fumante_sn ?></p>
		
	</body>
</html>