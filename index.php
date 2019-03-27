<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Importar dados do Excel</title><link rel="icon" type="image/jpg" href="img/logo.png"/>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="estilo.css">
	<head>
	<body>
	<div class="p-3 mb-2 bg-info text-white">
	<script src="https://static.zenvia.com/embed/js/zenvia-chat.min.js"></script>
<script>
    var chat = new ZenviaChat('2f151c3f35443d4794b085de5b91ae03')
        .embedded('button').build();
</script>
<br><br><br>
<img class="d-block mx-auto mb-4" src="img/logo.png" alt="" width="300" height="150">
<div class="d-inline-flex p-2 bd-highlight">
		<h2>Upload Excel</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			
			<input type="file" class="form-control-file" name="arquivo">
			
			
			
			<div class="p-2 bd-highlight"><input type="submit"   class="btn btn-success"value="Enviar"></div>
			<br><br>
			<h5>Video Explicativo</h5>
			<div class="embed-responsive embed-responsive-21by9">
 			 <iframe class="embed-responsive-item" width="320" height="240" src="videos\MAPADECALOR.mp4"></iframe>
		</div>
		
		

			</div>
		</form><br><br><hr><h2 style="color: red;">Antes de Enviar um novo registro exclua os registros que ainda permanecem banco de dados</h2>
		<a href="excluir.php"><input name="deleta"   type="button" class="btn btn-danger btn-lg btn-block" value="Excluir" /></a>
		<hr>
		<div class="mx-auto" style="width: 200px;">
		<br><br><h5>Gerar InfraDefault Personalizado</h5><br>
		<form action="geradefault.php" method="POST">
		<input type="text" name="caixas" placeholder="Insira o número de Nap's">
		<input type="submit" class="btn btn-outline-warning" value="Criar">
		</form><br><br>
		</div>
		




		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</div>
	</body>
</html>