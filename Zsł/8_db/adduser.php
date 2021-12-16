<?php
if(!empty($_POST)){}
require_once 'db.php';
$sql="INSERT INTO `users` (`id`, `name`, `surname`, `city_id`) VALUES (NULL, '$_POST[name]', '$_POST[surname]', '$_POST[city_id]');";
$connect->query($sql);
if ($connect->affected_rows) {
    header('location: db.php');
}else{
    header('location: db.php');
}
?>