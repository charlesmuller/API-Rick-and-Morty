<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>API Rick and Morty</title>
</head>
<body>
	<h1>API Rick and Morty</h1>
	<div class="card">
	<?php
		$url = "http://rickandmortyapi.com/api/character";
		$url2 = "http://rickandmortyapi.com/api/episode";
		
		$resultado = json_decode(file_get_contents($url));
		$resultado2 = json_decode(file_get_contents($url2));
			
		foreach($resultado->results as $personagem){
			if ($personagem->id == 1){
			
				echo "Nome: ".($personagem->name)."<br>";
				echo "Status: ".($personagem->status)."<br>";
				echo "Planeta: ".($personagem->origin->name)."<br>";

				foreach($resultado2->results as $episodio){
					if($episodio->id == 1){
						echo "Episódio: ".($episodio->name)."<br>";
					}
				}
			}
		}
	?>
	</div>
	<div class="card">
	<?php
		foreach($resultado->results as $personagem){
			if ($personagem->id == 3){
			
				echo "Nome: ".($personagem->name)."<br>";
				echo "Status: ".($personagem->status)."<br>";
				echo "Planeta: ".($personagem->origin->name)."<br>";

				foreach($resultado2->results as $episodio){
					if($episodio->id == 1){
						echo "Episódio: ".($episodio->name)."<br>";
					}
				}
			}
		}
	?>
	</div>
</body>
</html>