<?php 
require("db.php");

// est ce que le formulaire est soumis ? 
if(isset($_POST)) {

	// on crée des variables plus sympas avec les données du formulaire 
	$email 	= $_POST['email'];
	$password 	= $_POST ['password'];
	

	// On vérifie que les champs requis sont bien remplis
	} elseif (empty($email)) {
	$error="Veuillez renseigner votre e-mail!";
	} elseif (empty($password)) {
	$error="Veuillez renseigner votre mot de passe!";
	}

	echo 'TEST';
	die();

	//Si le formulaire est valide...
	if(isset($error)) {
		$sql = "INSERT INTO events_nantes ( category, events, users )
		VALUES (NULL, :email, :password)";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":email", $email);
		$stmt->bindValue(":password", $password);
		$stmt->execute();
	}
}

?>