<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $x=10;
    $x++;
    echo $x; //11
    $x=$x++; 
    echo $x; //11
    $y=$x++;
    echo $x; //12
    echo $y; //11
    echo "<hr>Zadanie:<br>";
    $x=1; 
    echo $x."<br>"; //x=1
    $x=$x++; 
    echo $x."<br>"; //x=1
    $x=++$x; 
    echo $x."<br>"; //x=2
    $y=++$x; 
    echo $x."<br>"; //x=3
    echo $y."<br>"; //y=3
    $y=$x++; 
    echo $x."<br>"; //x=4
    echo $y."<br>"; //x=3
    ?>
</body>
</html>