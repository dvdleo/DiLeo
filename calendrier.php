<?php
session_start();
$title ='Calendrier';
$description = '';
?>

<?php include('layouts/header.php'); ?>
<?php include ('php/db.php'); ?>

<div id="calendar"></div>

<script src="https://rawgit.com/moment/moment/2.18.1/min/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

<?php require('php/get_events.php'); ?>

<script>
    

$('#calendar').fullCalendar({
  events: [
      <?php foreach($events as $event){ ?>
        {
          title    : '<?php echo $event['name']; ?>',
          start    : '<?php echo $event['date']; ?>',
          url      : '<?php echo ($event['category_id'] == 1 ? 'concert.php' : 'sport.php'); ?>#event_<?php echo $event['id']; ?>',
        },
      <?php } ?>
  ],
    eventColor: '#D473D4',
    eventTextColor: '#FFFFFF',
    eventBackgroundColor: '#D473D4'
});
</script>



<?php include('layouts/footer.php'); ?>
