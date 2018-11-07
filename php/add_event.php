<?php 
require("db.php");
session_start();


// est ce que le formulaire est soumis ? 
if(isset($_POST)) {

	// on crée des variables plus sympas avec les données du formulaire 
    $users_id    = $_SESSION['user']['id'];
	$name 	     = $_POST['name'];
	$place 	     = $_POST['place'];
	$date 	     = $_POST['date'];
	$price 	     = $_POST['price'];

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

	//Si le formulaire est valide...
	if(!isset($error)) {
		$sql = "INSERT INTO events (user_id, name, place, date, price, date_created)
		VALUES ( :user_id, :name, :place, :date , :price, NOW() )";

		$stmt = $conn->prepare($sql);
        $stmt->bindValue(":user_id",          $_SESSION['user']['id']);
		$stmt->bindValue(":name",             $_POST['name']);
		$stmt->bindValue(":place",            $_POST['place']);
		$stmt->bindValue(":date",             $_POST['date']);
		$stmt->bindValue(":price",            $_POST['price']);
		$stmt->execute();
        
       header('Location: ../');
        
	}
}