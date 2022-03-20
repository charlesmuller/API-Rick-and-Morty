<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>API Rick and Morty</title>
</head>
<body>
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
						echo "Episódio: ".($episodio->name)."<br><br>";
					}
				}
			}
		}

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
</body>
</html>