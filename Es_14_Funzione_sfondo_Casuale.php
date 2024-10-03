<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sfondo casuale</title>
</head>
<body>

<?php 

    function sfondoCasuale($lar){
        
        if($lar<150){
            return "#7FFFD4";
        }elseif($lar<=250){
            return "#1E90FF";
        } else{
            return "#0000FF";
        }
    }

    $lar=random_int(50,500);
    $colore=sfondoCasuale($lar);
    $altezza=$lar*2;

    echo "<div style='width: ".$lar."px; height:".$altezza."px ; background-color:".$colore.";'></div>";

?>
    
</body>
</html>