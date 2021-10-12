<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>API Rick and Morty</title>
</head>
<body>
	<?php
		$url = "http://rickandmortyapi.com/api/character/";
		$resultado = json_decode(file_get_contents($url));
		var_dump($resultado);
		foreach ($resultado->results as $personagem){
			echo "Personagem: " . $personagem->name . "<br>";
			echo "Localização: " . $personagem->location . "<br>";
		}
		

	?>
</body>
</html>
<head>
	
</head>
