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
						<div style="font-size: 30px; margin-top: 20px; margin-bottom: 5px;">
						<?php echo $event['name']; ?>
						</div>
						<div style="font-size: 18px;"> Lieu :
						<?php echo $event['place']; ?>
						</div>
						<div style="font-size: 18px;"> Date :
						<?php echo $event['date']; ?>
						</div>
						<div style="margin-bottom: 20px;font-size: 18px;"> Prix :
						<?php echo $event['price']; ?>
						€
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