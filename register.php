<?php
$title ='Register';
$description = '';
?>

<?php include('layouts/header.php'); ?>

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