<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Entrar</title>
		<link rel="stylesheet" href="CSS/estilo.css">
	</head>
	<body>
		<div id="corpo-form">
		<h1 align="center">Entrar</h1>
		<form action="logar.php" method="POST" >
			<input name="email" type="email" placeholder="Usuário">
			<input name="senha" type="password" placeholder="Senha">
			<input type="submit" name="entrar" value="ACESSAR">
                        <br>
                        <a href="alterar_tela.php"><h3><strong>Esqueceu sua senha? Clique aqui!</strong></h3></a>
                        <a href="cadastrar_tela.php"><strong><h4>Ainda não é inscrito? Cadastre-se!</h4></strong></a>

		</form>
		</div>
	</body>
</html>