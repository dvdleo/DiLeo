<?php include('layouts/header.php'); ?>
<?php include('layouts/head.php'); ?>
<?php include ('php/db.php'); ?>

<div class="container">
	<form>
		<div class="card-body">
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
		</div>
		<div>
			<button type="button" class="btn btn-outline-success">S'inscrire</button>
		</div>
	</form>
</div>
<?php include('layouts/footer.php'); ?>