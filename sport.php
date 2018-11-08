<?php session_start() ?>
<?php include('layouts/header.php'); ?>
<?php include ('php/db.php'); ?>

<body>
	<div>
		<div class="col-sm-12 col-lg-8">
			<h1>Les évènements sportifs</h1>
			<br>
			<?php require_once('php/sport.php');?>
			<div>
				<div>
					<?php foreach($events as $event){ ?> 
					<?php if($event['category_id'] == 2){ ?>
                    <div id="event_<?php echo $event['id']; ?>'">
						<div class="titre">
						<?php echo $event['name']; ?>
						</div>
						<div class='description'>
						<div> Lieu :
						<?php echo $event['place']; ?>
						</div>
						<div> Date :
						<?php echo $event['date']; ?>
						</div>
						<div class="prix"> Prix :
						<?php echo $event['price']; ?>
						€
						</div>
                    </div>
                </div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
			
		</div>
	</div>
</body>
<?php include('layouts/footer.php'); ?>