<?php

	$nome = "Teste";
	$valor = 50;
	$expira = time() + 3600; // uma hora a partir de agora
	setcookie($nome,$valor,$expira);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gravando Cookies</title>
</head>
<body>

<p>Cookie gravado no navegador do usuário</p>

</body>
</html>