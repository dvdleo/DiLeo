<?php
session_start();
$title ='Accueil';
$description = '';
?>

<?php include('layouts/header.php'); ?>

<div class="row">
	<div class="col-sm-12 col-lg-8">
		<h1>Les prochains évènements</h1>
		<div>
			<ul>
			<a href="event_more" type="button" class="btn btn-outline-success">Ajouter un évènement</a>
		</ul>
		</div>
	</div>
</div>



<?php include('layouts/footer.php'); ?>