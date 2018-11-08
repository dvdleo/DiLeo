<link rel="stylesheet" type="text/css" href="css/components/style.css">

<?php
session_start();
$title ='Accueil';
$description = '';
?>

<?php include('layouts/header.php'); ?>

<div class="row" style="text-align: center;">
    <div class="col-sm-12 col-lg-8">
        <h1>Les prochains évènements</h1>
        <br>
        <?php require_once('php/get_events.php'); ?>
        <div class="card" style="width: 18rem; float: left; margin-top: 24px;" >
            <div class="card-header" style="background-color: purple; color: white;">
                Concerts
            </div>
            <ul class="list-group list-group-flush">
                <?php foreach($events as $event){ ?> 
                    <?php if($event['category_id'] == 1){ ?>
                        <li class="list-group-item"><a href="concert.php" style=""><?php echo $event['name']; ?></a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
        
        <br>

        <div class="card" style="width: 18rem; margin-left: 60%;">
            <div class="card-header" style="background-color: purple; color: white;">
                Sports
            </div>
            <ul class="list-group list-group-flush">
                <?php foreach($events as $event){ ?> 
                    <?php if($event['category_id'] == 2){ ?>
                        <li class="list-group-item"><a href="sport.php"><?php echo $event['name']; ?></a></li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>

    </div>
</div>



<?php include('layouts/footer.php'); ?>


