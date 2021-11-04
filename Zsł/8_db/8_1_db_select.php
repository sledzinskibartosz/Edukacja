<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    <?php
    $connect = new mysqli("localhost", "root", "", "3pi1t");
    $sql = "SELECT * FROM `users`";
    $result=$connect->query($sql);
    //$user=$result->fetch_assoc();
    //print_r($user);

    while($user=$result->fetch_assoc()){
        echo<<< USER
            Imię i nazwisko: $user[name] $user[surname]
            <hr>
USER;
    }
    ?>
</body>
</html>