<?php
$title ='Register';
$description = '';
?>

<?php include('layouts/header.php'); ?>

<form method="POST" action="php/register.php">
	<div class="form-group">
		<label for="name">Nom</label>	
		<input name="first_name" type="text" required="required" class="form-control" placeholder="First name">
	</div>
	<div class="form-group">
		<label for="name">Prénom</label>
		<input name="last_name" type="text" required="required" class="form-control" placeholder="Last name">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input name="email" type="email" required="required" class="form-control" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="password">Mot de passe</label>
		<input name="password" type="password" required="required" class="form-control" placeholder="Password">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-success">S'inscrire</button>
	</div>
</form>

<?php include('layouts/footer.php'); ?>