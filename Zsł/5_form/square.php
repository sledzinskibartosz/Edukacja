<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwadrat</title>
</head>
<body>
    <h3>Kwadrat</h3>
    <form method="get">
        <input type="text" name="sideA" placeholder="Podaj długość boku a"><br><br>
        <input type="submit" value="Oblicz" name="button">
    </form>

    <br>
    <?php
        if (isset($_GET['button'])) {
            if(!empty($_GET['sideA'])){
            $liczba=str_replace(',', '.',$_GET['sideA']);
            $liczbaa=$liczba*4;
            $liczba=$liczba**2;
            echo <<< RESULT
            <hr>
            <br>Pole kwadratu wynosi: $liczba cm<sup>2</sup>
            <br><br>Obwód kwadratu wynosi: $liczbaa cm
RESULT;
            }else{
                echo "<hr><br>Wypełnij długość boku a";
            }
    }
    ?>
</body>
</html>