<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
        }
        td{
            border:1px solid black;
        }
        </style>
</head>
<body>
    <h4>Rower</h4>
    <forms>
    <form action="db.php" method="post">
        <input type="text" name="rower" placeholder="Podaj Id rowera"><br><br>
        <input type="submit" value="Zatwierdź">
    </form>
    <?php // w sql mam 3pi1t -> rower -> id,informacje
    $id=$_POST['rower'];
    $connect = new mysqli("localhost", "root", "", "3pi1t");
    $sql="SELECT * FROM `rower` WHERE id=$id";
    $result=$connect->query($sql);
    echo <<< TABLE
    <table>
    <tr>
        <th>Id</th>
        <th>Dane rowera</th>
    </tr>
TABLE;
while($rower=$result->fetch_assoc()){
    echo <<< USER
    <tr>
        <td>$rower[id]</td>
        <td>$rower[informacje]</td>
    </tr>
USER;
}
echo "</table>";
    ?>
</body>
</html>
