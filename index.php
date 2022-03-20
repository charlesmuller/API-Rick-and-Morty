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
			
			$url = "http://rickandmortyapi.com/api/character?page=1";
			$url2 = "http://rickandmortyapi.com/api/episode";
			
			$resultado = json_decode(file_get_contents($url));
			$resultado2 = json_decode(file_get_contents($url2));

			$troca = null;
						foreach($resultado->results as $personagem){
							if($personagem->gender == "Male"){
								if ($personagem->id == 1){
		?>
									<div class="container">
										<img src="<?=$personagem->image?>"><br>
									</div>
		<?php
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
						}	
		?>
	</div>
	<!--
	<div class="btn">
		<input name="$troca" type="submit" value="Próximo personagem">
	</div>
	-->
	<div class="card">
		<?php
				foreach($resultado->results as $personagem){
					if($personagem->gender == "Female"){
						if ($personagem->id == 3){
			?>
							<div class="container">
								<img src="<?=$personagem->image?>"><br>
							</div>
			<?php
					
							echo "Nome: ".($personagem->name)."<br>";
							echo "Status: ".($personagem->status)."<br>";
							echo "Planeta: ".($personagem->origin->name)."<br>";

							foreach($resultado2->results as $episodio){
								if($episodio->id == 6){
									echo "Episódio: ".($episodio->name)."<br>";
								}
							}
						}
					}
				}
		?>
	</div>
</body>
</html>