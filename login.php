<?php
$title ='Login';
$description = '';
?>

<?php include('layouts/header.php'); ?>

<form>
	<div class="form-group">
		<label for="email">Email</label>	
		<input type="email" required="required" class="form-control" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="password">Mot de passe</label>
		<input type="text" required="required" class="form-control" placeholder="password">
	</div>
	<div class="form-group">
		<button type="button" class="btn btn-outline-success">Se connecter</button>
	</div>
</form>


<?php include('layouts/footer.php'); ?>