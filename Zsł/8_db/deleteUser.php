<?php
if (!empty($_GET['userId'])) {
    require_once 'db.php';
    $sql="DELETE FROM `users` WHERE `users`. `id` = $_GET[userId]";
    $connect->query($sql);
    if ($connect->affected_rows) {
        header('location: db.php');
    }else{
        header('location: db.php');
    }
}
?>