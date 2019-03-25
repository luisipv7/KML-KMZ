<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Importar dados do Excel</title>
	<head>
	<body>
	<script src="https://static.zenvia.com/embed/js/zenvia-chat.min.js"></script>
<script>
    var chat = new ZenviaChat('2f151c3f35443d4794b085de5b91ae03')
        .embedded('button').build();
</script>
		<h1>Upload Excel</h1>
		
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			<input type="submit" value="Enviar">
		</form><br><br><hr><h2 style="color: red;">Antes de Enviar um novo registro exclua os registros que ainda permanecem banco de dados</h2>
		<a href="excluir.php"><input name="deleta" type="button" value="Excluir" /></a>

		<br><br><h1>Gerar InfraDefault Personalizado</h1><br>
		<form action="geradefault.php" method="POST">
		<input type="text" name="caixas" placeholder="Insira o número de Nap's">
		<input type="submit" value="Criar">
		</form>




		
	</body>
</html>