<?php include('layouts/header.php'); ?>

<div class="container">
	<form method="POST" action="php/add_event.php">
		<div class="form-group">
			<label for="name_event">Titre de l'évènement</label>	
			<input type="text" name="title" required="required" class="form-control" placeholder="Title event">
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
			<input type="price" name="price" required="required" class="form-control" placeholder="Price event">
		</div>
		<div class="form-group">
			<button type="button" class="btn btn-outline-success">Ajouter l'évènement</button>
		</div>
	</form>
</div>

<?php include('layouts/footer.php'); ?>
