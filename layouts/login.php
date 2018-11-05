<?php include('layouts/header.php'); ?>
<?php include('layouts/head.php'); ?>
<?php include ('php/db.php'); ?>

<div class="container">
	<form>
		<div class="card-body">
			<div class="form-group">
				<label for="email">Email</label>	
				<input type="email" required="required" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label for="password">Mot de passe</label>
				<input type="text" required="required" class="form-control" placeholder="password">
			</div>
		</div>
	</form>