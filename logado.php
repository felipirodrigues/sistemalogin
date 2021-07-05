<?php
session_start();

    if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
        include 'includes/componentes/header.php';
        include 'includes/componentes/apresentacao.php';
        include 'includes/componentes/footer.php';
    } else {
        //echo "nada";
        header("Location: login.php");
    }
    
?>
