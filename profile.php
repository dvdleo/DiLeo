<?php session_start();?>
<?php include('layouts/header.php'); ?>
<?php include ('php/db.php'); ?>

<body>
	<div>
		<div class="col-sm-12 col-lg-8">
			<h1>Mon profil</h1>
			<br>
			<?php require_once('php/profile.php');?>

			<div>
				<div class="profil">
					<?php if(isset($_SESSION['user'])) { ?>
					<?php $_SESSION['user']= $user ?>
						<div> Nom :
						<?php echo $user['first_name']; ?>
						</div>
						<div> Prénom :
						<?php echo $user['last_name']; ?>
						</div>
						<div> Email :
						<?php echo $user['email']; ?>
						</div>
					<?php } ?>
				</div>
			</div>
			
		</div>
	</div>
</body>
<?php include('layouts/footer.php'); ?>