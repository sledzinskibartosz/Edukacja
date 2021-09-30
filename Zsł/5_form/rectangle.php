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
        <input type="text" name="sideB" placeholder="Podaj długość boku b"><br><br>
        <input type="submit" value="Oblicz" name="button">
    </form>

    <br>
    <?php
        if (isset($_GET['button'])) {
            if(!empty($_GET['sideA']&&!empty($_GET['sideA']))){
            $liczba=str_replace(',', '.',$_GET['sideA']);
            $liczba1=str_replace(',', '.',$_GET['sideB']);
            $liczbaa=$liczba*2+$liczba1*2;
            $liczba=$liczba*$liczba1;
            echo <<< RESULT
            <hr>
            <br>Pole prostokąta wynosi: $liczba cm<sup>2</sup>
            <br><br>Obwód prostokąta wynosi: $liczbaa cm
RESULT;
            }else{
                echo "<hr><br>Wypełnij długość boku a i b";
            }
    }
    ?>
</body>
</html>