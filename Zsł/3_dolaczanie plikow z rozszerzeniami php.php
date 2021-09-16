<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dołaczanie pliku 3_1.php</title>
</head>
    <body>
        <h3>Początek pliku</h3>
            <?php
                include '3_1.php';
                include_once '3_1.php';
                require '3_1.php'; //include - jeżeli nie można znaleśc pliku, to kod się wykonuje; require nie wykonuje kodu, jeżeli nie znajdzie pliku
                require_once '3_1.php';
            ?>
        <h3>Koniec pliku</h3>
    
    </body>
</html>