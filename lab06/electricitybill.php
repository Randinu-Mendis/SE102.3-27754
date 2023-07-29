<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $unit = 15;

    if($unit<50){
        $cost = $unit*3.50;
    }
    else if ($unit<100){
        $cost = $unit*4.00;
    }
    else if ($unit<150){
        $cost = $unit*5.20;
    }
    else{
        $cost = $unit*6.50;
    }

    echo"$cost";

    ?>

</body>
</html>