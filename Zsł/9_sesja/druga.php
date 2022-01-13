<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Druga strona</title>
</head>
<body>
    <h4>Moja druga strona</h4>

    <?php
        echo $_SESSION['name']."<br>";
        echo session_id();
    ?>
    <hr>
    <a href="./trzecia.php">Strona trzecia</a>
    
</body>
</html>