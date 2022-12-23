<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<meta charset="utf-8">
</head>
	
<body style="width: 100%; background-color: #393f50;text-align: center;height: 100vh;position: fixed;">
	
		
			<div>
			<p class="page_title_exo">Accueil
			</p>
		
			<p class="page_sous_title_exo">
			Mathéo BRUNO
			</p>
			
			<div class="menu">
				
			<center><img src="icon.png" width="50%" style="margin-top: 75px; margin-bottom: 50px;";></center>
				
				<a href="#index" class="BTNmenu">Accueil</a>
				
				<a href="#info" class="BTNmenu">A propos</a>
				
				<a href="#skills" class="BTNmenu">Compétences</a>
				
				<a href="#history" class="BTNmenu">Expérience</a>
				
				<a href="#Formation" class="BTNmenu">Formation</a>
				
				<a href="#contact" class="BTNmenu">Contact</a>
			
			</div>
			
			<div class="main_page">
			
				<div class="exercice_display">

					<a class="page_sous_title_exo2" id="index"> Acceuil </a>

						<div class="text_border">

					 	<a class="quote"> "Le secret des ordinateurs, c’est qu’il suffit d’avoir le bon petit génie de l’informatique pour en forcer l’entrée." </a>

						 <a  class="quote2"> Jack Higgins. </a>

						</div>

				 	<br>

				 	<img src="banner.png" width="75%">


						<div class="emptyspace">
						
						</div>


					<a class="page_sous_title_exo2" id="info"> A propos </a>

						<div id="info" class="text_border">

						<a class="quote">"Nous ne pouvons pas prédire où nous conduira la Révolution Informatique. Tout ce que nous savons avec certitude, c'est que, quand on y sera enfin, on n'aura pas assez de RAM."</a>

						<a  class="quote2"> Dave Barry. </a>

						</div>

					<br>

					<img src="banner2.png" width="75%">


						<div class="emptyspace">
						
						</div>

					<a id="skills" class="page_sous_title_exo2">Compétences</a>

						<div class="progress">

							<?php
							$data=yaml_parse_file("Skills.yaml");
							foreach ($data as $domaine=> $tbComp) {
								echo '<h1>'.$domaine.'</h1>';
								foreach ($tbComp as $Comp) {
									echo '<p>'.$Comp['nom'].' : ';
									echo $Comp['niveau'].'</p>';
								}
							}
							?>

						</div>

						<div class="emptyspace">
							
						</div>

					<a id="history" class="page_sous_title_exo2">Expérience</a>

						<div class="progress">

							<?php
							$data=yaml_parse_file("Skills.yaml");
							foreach ($data as $domaine=> $tbComp) {
								echo '<h1>'.$domaine.'</h1>';
								foreach ($tbComp as $Comp) {
									echo '<p>'.$Comp['nom'].' : ';
									echo $Comp['niveau'].'</p>';
								}
							}
							?>

						</div>

						<div class="emptyspace">
							
						</div>

					<a id="Formation" class="page_sous_title_exo2">Formation</a>

						<div class="progress">

							<?php
							$data=yaml_parse_file("Skills.yaml");
							foreach ($data as $domaine=> $tbComp) {
								echo '<h1>'.$domaine.'</h1>';
								foreach ($tbComp as $Comp) {
									echo '<p>'.$Comp['nom'].' : ';
									echo $Comp['niveau'].'</p>';
								}
							}
							?>

						</div>

						<div class="emptyspace">
							
						</div>

					<a id="contact" class="page_sous_title_exo2">Contact</a>

				</div>
			</div>
		</div>
	</div>

	<div style="height: 5%;background-color: #393f50;"></div>
</body>	
</html>