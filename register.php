<?php
$title ='Register';
$description = '';
?>

<?php include('layouts/header.php'); ?>

<?php 
require("php/db.php");



// est ce que le formulaire est soumis ? 
if(!empty($_POST)) {

	// on crée des variables plus sympas avec les données du formulaire 
	$name 	= $_POST['first_name'];
	$place 	= $_POST ['last_name'];
	$date 	= $_POST ['email'];
	$price 	= $_POST ['password'];

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

	echo 'TEST';
	die();

	//Si le formulaire est valide...
	if(isset($error)) {
		$sql = "INSERT INTO events_nantes ( category, events, users )
		VALUES (NULL, :first_name, :last_name, :email, :password , NOW())";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":first_name", $first_name);
		$stmt->bindValue(":last_name", $last_name);
		$stmt->bindValue(":email", $email);
		$stmt->bindValue(":password", $password);
		$stmt->execute();
	}
}

?>

<form method="POST" action="index.php">
	<div class="form-group">
		<label for="name">Nom</label>	
		<input type="text" required="required" class="form-control" placeholder="First name">
	</div>
	<div class="form-group">
		<label for="name">Prénom</label>
		<input type="text" required="required" class="form-control" placeholder="Last name">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" required="required" class="form-control" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="password">Mot de passe</label>
		<input type="password" required="required" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">
		<button type="button" class="btn btn-outline-success">S'inscrire</button>
	</div>
</form>

<?php include('layouts/footer.php'); ?>