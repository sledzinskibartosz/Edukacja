<?php
    $text = <<< L
    ZSŁ - Zespół
    Szkół
    Łączności<br>
L;
echo $text;
echo nl2br($text);

$name='jaNuSZ';
// zamiana wszystkich litter na małe
$name=strtolower($text);
echo $name; //janusz
// zamiana wszystkich litter na dużye
echo strtoupper($name); //JANUSZ
$nameSurname = "januSZ koWALski<br>";
// zamiana pierwszej litery na dużą
echo ucfirst($nameSurname);
// zamiana każdej pierwszej litery w słowie
echo ucwords($nameSurname);
// zamiania wszystkich liter na małe, a pierwszej na duża
$name="jAnuSz<br>";
echo "$name";
echo ucfirst(strtolower($name));

$lorem="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis laoreet nulla sem, ut bibendum ex vestibulum nec. Etiam eget mi nulla. Pellentesque eros ex, vestibulum id odio vitae, posuere varius risus. Donec accumsan lacinia metus, varius sollicitudin leo viverra quis. Nulla ac dapibus sem. Phasellus ut quam neque. Sed rhoncus ipsum ac neque sollicitudin aliquam. Phasellus eu sem ac tellus mollis efficitur non sit amet magna. Ut ac lectus ac sapien egestas ultricies. ";
echo $lorem."<hr>";
$col=wordwrap($lorem, 30, "<br>");
echo $col."<hr>";
$col=wordwrap($lorem, 30, "TEXT");
//echo $col."<hr>";
$col=wordwrap($lorem, 30, "<hr>");
//echo $col."<hr>";

// wyczyszczenie bufora(ekranu)
// ob_clean();

// usuwanie białych znaków
$name="Janusz";
$name1="  Janusz ";
echo "Długość \$name: ".strlen($name)."<br>"; //6
echo "Długość \$name1: ".strlen($name1)."<br>"; //9
echo strlen(ltrim($name1)); //7
echo strlen(rtrim($name1)); //8
echo strlen(trim($name1))."<hr>"; //6

// przeszukiwanie ciągów znaków
$mail="janusz@gmail.com";
echo strstr($mail, "@"); //@gmail.com
echo strstr($mail, "G"); //nic nie wyświetli
echo stristr($mail, "G"); //gmail.com

//substr
echo substr($mail, 2); //nusz@gmail.com
echo substr($mail, 6); //gmail.com
echo substr($mail, -3); //com
echo substr($mail, -2,1)."<hr>"; //o

//Zadanie
$personality="Janusz Kowalski";
//do zmiennej name przypisać imię, do zmiennej surename przypisać nazwisko
$imię=substr($personality, 0,6);
echo $imię;
$surimię=substr($personality, 6);
echo $surimię;
?>