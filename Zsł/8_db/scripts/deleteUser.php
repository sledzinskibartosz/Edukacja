<?php
if (!empty($_GET['userId'])) {
    require_once './connect.php';
    $sql="DELETE FROM `users` WHERE `users`. `id` = $_GET[userId]";
    $connect->query($sql);
    if ($connect->affected_rows) {
        header('location: ../db3.php?error=Prawidłowo usunięto użytkownika');
    }else{
        header('location: ../db3.php?error=Nie usunięto użytkownika');
    }
}
?>