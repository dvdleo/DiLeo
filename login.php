<?php include('layouts/header.php'); ?>
<?php include ('php/db.php'); ?>

<form method="POST" action="php/login.php">
	<div class="form-group">
		<label for="email">Email</label>	
		<input name="email" type="email" required="required" class="form-control" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="password">Mot de passe</label>
		<input name="password" type="password" required="required" class="form-control" placeholder="password">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-outline-success">Se connecter</button>
	</div>
</form>

<?php include('layouts/footer.php'); ?>