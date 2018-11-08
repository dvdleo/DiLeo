<?php
session_start();
$title ='Accueil';
$description = '';
?>

<?php include('layouts/header.php'); ?>

<div class="row">
    <div class="col-sm-12 col-lg-8">
        <h1>Les prochains évènements</h1>

        <?php require_once('php/get_events.php'); ?>
        
        <ul>
            <?php foreach($events as $event){ ?> 
            <?php if($event['category_id'] == 1){ ?>
            <li><?php echo $event['name']; ?></li>
            <?php } ?>
            <?php } ?>
        
        </ul>
        
        <br>
        
        <ul>
            <?php foreach($events as $event){ ?> 
            <?php if($event['category_id'] == 2){ ?>
            <li><?php echo $event['name']; ?></li>
            <?php } ?>
            <?php } ?>
        
        </ul>

    </div>
</div>



<?php include('layouts/footer.php'); ?>


