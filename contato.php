<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contato</title>
</head>
<body>
	<form action="envio.php" method="POST">
		<div>
			<input type="text" name="nome" placeholder="Nome">
		</div>
		<div>
			<input type="email" name="email" placeholder="Email">
		</div>
		<div>
			<textarea name="msg">				
			</textarea>
		</div>
		<input type="submit" name="enviar">
		
	</form>
</body>
</html>