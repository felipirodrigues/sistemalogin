<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id'])==false){
    session_unset();

    header("Location: index.php");
}
?>