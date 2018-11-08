
<?php 
session_start();
include('layouts/header.php'); ?>
<?php include ('php/db.php'); ?>
<?php
if (empty($_SESSION['user'])){
	die();
}

?>

<div class="container">
	<form method="POST" action="php/add_event.php">
        
		<div class="form-group">
			<label for="name_event">Titre de l'évènement</label>	
			<input type="text" name="name" required="required" class="form-control" placeholder="Title event">
		</div>
		<div class="form-group">
			<label for="place_event">Lieu de l'évènement</label>
			<input type="text" name="place" required="required" class="form-control" placeholder="Place event">
		</div>
		<div class="form-group">
			<label for="date">Date de l'évènement</label>
			<input type="date" name="date" required="required" class="form-control" placeholder="Date event">
		</div>
		<div class="form-group">
			<label for="price">Prix réservation</label>
			<input type="number" name="price" required="required" class="form-control" placeholder="Price event">
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-outline-warning">Ajouter l'évènement</button>
		</div>
	</form>
</div>

<?php include('layouts/footer.php'); ?>
