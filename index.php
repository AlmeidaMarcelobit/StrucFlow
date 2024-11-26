<?php
// Defina o tipo de conteúdo corretamente para evitar downloads acidentais
header('Content-Type: text/html; charset=UTF-8');
// Impedir caching desnecessário
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="1; url=templates/home.php">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Redirecionando...</title>
</head>

<body>
	<p>Você será redirecionado em breve. Se não for redirecionado, <a href="templates/home.php">clique aqui</a>.</p>
</body>

</html>
