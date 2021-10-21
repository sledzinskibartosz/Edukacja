<?php
function show(){
    echo "Funkcja show";
}
function showName($name){
    return "<br>Imię: ".$name;
}
function stringValidate($name){
    $name = ucfirst(strtolower(trim($name)));
    $length=strlen($name);
    echo "<br>Długość twojego imienia: ".$length;
    $name=str_replace(" ","", $name);
    echo "<br>Imię po zmianie: ".$name;
    $namee=substr($name,0,-5);
    $length=strlen($namee);
    echo "<br>Długość twojego imienia po skróceniu: ".$length;
    echo "<br>Imię po skróceniu: ".$namee;
}
?>