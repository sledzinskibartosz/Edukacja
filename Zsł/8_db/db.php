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
    
    $connect = new mysqli("localhost","root","","3pi1t");
    $sql="SELECT * FROM `users` INNER JOIN `cities` ON users.city_id = cities.cities_id";
    $result=$connect->query($sql);

    echo <<< TABLE
<table>
    <tr>
        <th>Id</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Miasto</th>
    </tr>
TABLE;

    while ($user=$result->fetch_assoc()){
        echo <<< USER
        <tr>
        <td>$user[id]</td>
        <td>$user[name]</td>
        <td>$user[surname]</td>
        <td>$user[city_name]<s/td>
        <td><a href="deleteUser.php?userId=$user[id]">Usuń</a></td>
        </tr>
USER;
    }

    echo "</table>";

if(isset($_GET['addUser'])){
    echo <<< FORMADDUSER
    <h4>Dodawanie Użytkowników</h4>
    <form action="adduser.php" method="post">
    <input type="text" name="name" placeholder="podaj imię"><br><br>
    <input type="text" name="surname" placeholder="podaj nazwisko"><br><br>
    <input type="text" name="city_id" placeholder="podaj miasto"><br><br>
    <input type="submit" value="dodaj użytkownika">
    </form>
FORMADDUSER;
}
else{
    echo '<br><a href="db.php?addUser=">Dodaj użytkownika</a>';
}
?>
</body>
</html>