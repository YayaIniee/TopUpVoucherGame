<?php
    require_once('./class/class.Game.php');

    if(isset($_GET['id'])){
        $objGame-> new Game();
        $objGame->id=$_GET['id'];
        $objGame->DeleteGame();

        echo "<script>alert('$objGame->message');</script>";
        echo '<script>window.history.back()</script>';
    }
?>