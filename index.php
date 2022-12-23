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
				
			<center><img src="icon.png" width="50%" style="margin-bottom: 50px;";></center>
				
				<a href="#index" class="BTNmenu">Accueil</a>
				
				<a href="#info" class="BTNmenu">A propos</a>
				
				<a href="#skills" class="BTNmenu">Compétences</a>
				
				<a href="#history" class="BTNmenu">Expérience</a>
				
				<a href="#Formation" class="BTNmenu">Formation</a>
				
				<a href="#contact" class="BTNmenu">Contact</a>
			
			</div>
			
			<div class="main_page">
			
				<div class="exercice_display">

					<a class="page_sous_title_exo2" id="#index"> Acceuil </a>

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
									echo '<h2>'.$Comp['nom'].' : ';
									echo $Comp['niveau'].'</h2>';
								}
							}
							?>

						</div>

						<div class="emptyspace">
							
						</div>

					<a id="history" class="page_sous_title_exo2">Expérience</a>

						<div class="progress">

							<?php
							$data=yaml_parse_file("History.yaml");
							foreach ($data as $domaine=> $tbComp) {
								echo '<h1>'.$domaine.'</h1>';
								foreach ($tbComp as $Comp) {
									echo '<h2>'.$Comp['nom'].' : ';
									echo $Comp['niveau'].'</h2>';
								}
							}
							?>

							<a href="CV_Matheo_Bruno.pdf"  class="BTNmenu">CV</a>


						</div>

						<div class="emptyspace">
							
						</div>

					<a id="Formation" class="page_sous_title_exo2">Formation</a>

						<div class="progress">

							<?php
							$data=yaml_parse_file("Formation.yaml");
							foreach ($data as $domaine=> $tbComp) {
								echo '<h1>'.$domaine.'</h1>';
								foreach ($tbComp as $Comp) {
									echo '<h2>'.$Comp['nom'].' : ';
									echo $Comp['niveau'].'</h2>';
								}
							}
							?>

								<a href="CV_Matheo_Bruno.pdf" class="BTNmenu">CV</a>

						</div>

						<div class="emptyspace">
							
						</div>

					<a id="contact" class="page_sous_title_exo2">Contact</a>

					<div>

					    <form id="fcf-form-id" class="fcf-form-class" method="post" action="index.php#contact">
            			<label for="Name" class="fcf-label">Ton nom</label>
            			<div class="fcf-input-group">
  		              	<input type="text" id="Name" name="Name" class="fcf-form-control" required>
			            </div>
     					<div class="fcf-form-group">
      			     	<label for="Email" class="fcf-label">Ton addresse Mail</label>
    			        <div class="fcf-input-group">
      		            <input type="email" id="Email" name="Email" class="fcf-form-control" required>
        			    </div>
				        <div class="fcf-form-group">
       			 	    <label for="Message" class="fcf-label">Ton message</label>
     			        <div class="fcf-input-group">
 		                <textarea id="Message" name="Message" class="fcf-form-control" rows="6" maxlength="3000" required></textarea>
 			            </div>
   				        </div>
				        <div class="fcf-form-group">
      			        <button type="submit" id="fcf-button" class="fcf-btn fcf-btn-primary fcf-btn-lg fcf-btn-block">Send</button>
   				        </div>

<?php
if (isset($_POST['Email'])) {

    // EDIT THE FOLLOWING TWO LINES:
    $email_to = "bruno.matheo61@gmail.com";
    $email_subject = "site";

    // validation expected data exists
    if (
        !isset($_POST['Name']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Message'])
    ) {
        problem('Erreur.');
    }

    $name = $_POST['Name']; // required
    $email = $_POST['Email']; // required
    $message = $_POST['Message']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if (!preg_match($email_exp, $email)) {
        $error_message .= 'adresse invalide.<br>';
    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if (!preg_match($string_exp, $name)) {
        $error_message .= 'Nom invalide.<br>';
    }

    if (strlen($message) < 2) {
        $error_message .= 'Message invalide.<br>';
    }

    $email_message = "Form details below.\n\n";

    function clean_string($string)
    {
        $bad = array("content-type", "bcc:", "to:", "cc:", "href");
        return str_replace($bad, "", $string);
    }
    $email_message .= "Name: " . clean_string($name) . "\n";
    $email_message .= "Email: " . clean_string($email) . "\n";
    $email_message .= "Message: " . clean_string($message) . "\n";

    // create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
?>
    Message envoyé

<?php
}
?>


        			</div>

				</div>
			</div>
		</div>
	</div>

	<div style="height: 5%;background-color: #393f50;"></div>
</body>	
</html>