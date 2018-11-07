<?php 
require("php/db.php");

echo 'BON';
die();

// est ce que le formulaire est soumis ? 
if(!empty($_POST)) {

	// on crée des variables plus sympas avec les données du formulaire 
	$name 	= $_POST['name'];
	$place 	= $_POST ['place'];
	$date 	= $_POST ['date'];
	$price 	= $_POST ['price'];

	// On vérifie que les champs requis sont bien remplis
	if(empty($name)) {
	$error = "Veuillez renseigner le titre de l'évènement !";
	} elseif (empty($place)) {
	$error="Veuillez renseigner le lieu de l'évènement!";
	} elseif (empty($date)) {
	$error="Veuillez renseigner les dates de l'évènement!";
	} elseif (empty($price)) {
	$error="Veuillez ajouter les prix des billets !";
	}

	echo 'TEST';
	die();

	//Si le formulaire est valide...
	if(isset($error)) {
		$sql = "INSERT INTO events_nantes ( category, events, users )
		VALUES (NULL, :category_id, :name, :place, :date , :price, NOW())";

		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":name", $name);
		$stmt->bindValue(":place", $place);
		$stmt->bindValue(":date", $date);
		$stmt->bindValue(":price", $price);
		$stmt->execute();
	}
}