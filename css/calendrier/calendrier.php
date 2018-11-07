<link rel="stylesheet" href="calendrier.css" type="text/css">
<?php



function calendrier($mois,$anne)
{
   /// reste du code 
}

cal_days_in_month (int $mois,int $anne);    
$nbjour = cal_days_in_month( CAL_GREGORIAN, $mois, $anne);

echo "<table class='p' >";

for($i = 1; $nbjour >= $i; $i++){
/// code ici
}

$p = cal_to_jd(CAL_GREGORIAN, $mois, $i, $anne); 
$jourweek = jddayofweek($p);

if($i == $nbjour){

}

if($jourweek == 1) {
    echo "<tr>";
}
echo "<td class='plein'>".$i."</td></tr>";


else if($i == 1){
    echo "<tr>";
    if($jourweek ==0){
        $jourweek = 7;
    }


    for($$b = 1 ;$b != $jourweek; $b++){
        echo "<td></td>";
    }

    echo "<td class='plein'>".$i."</td>";

    if($jourweek == 7){
        echo "</tr>";
    }

}

else {
    if($jourweek == 1) 
    {
        echo "<tr>";
    }
    
    echo "<td class='plein'>".$i."</td>";
    
    if($jourweek == 0){
        echo "</tr>";
    }
    
}

echo "</table>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">


    <div style="margin-bottom:5%">
        <img id="pre" src="flep.png" height="40px" width="40px" style="float/left">
        <img id="post" src="flep2.png" height="40px" width="40px" style="float:right">
    </div>
    
    <div id="content">

    </div>
    
    <script src="jquery.js"></script>
    <script>

        var mois = <?php echo $mois;?>;
        var anne = <?php echo $anne;?>;

    </script>
    
</head>

<body>


</body>