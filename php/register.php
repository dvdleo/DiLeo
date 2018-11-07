<?php 
require("db.php");

// est ce que le formulaire est soumis ? 
if(isset($_POST)) {

	// on crée des variables plus sympas avec les données du formulaire 
	$first_name = $_POST ['first_name'];
	$last_name 	= $_POST ['last_name'];
	$email		= $_POST ['email'];
	$password 	= $_POST ['password'];

	// On vérifie que les champs requis sont bien remplis
	if(empty($first_name)) {
		$error = "Veuillez renseigner votre nom !";
	} elseif (empty($last_name)) {
		$error="Veuillez renseigner votre prénom!";
	} elseif (empty($email)) {
		$error="Veuillez renseigner votre e-mail!";
	} elseif (empty($password)) {
		$error="Veuillez créer votre mot de passe!";
	}


	//Si le formulaire est valide...
	if(!isset($error)) {
		$sql = "INSERT INTO users (first_name, last_name, email, password, date_created)
		VALUES (:first_name, :last_name, :email, :password, NOW())";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":first_name", $_POST ['first_name']);
		$stmt->bindValue(":last_name", $_POST ['last_name']);
		$stmt->bindValue(":email", $_POST ['email']);
		$password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 14]);
		$stmt->bindValue(":password", $_POST ['password']);
		$stmt->execute();

		session_start();
         $_SESSION['connected'] = true;
        
        header('Location: ../');
	}
}