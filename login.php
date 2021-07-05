<?php
session_start();
include 'includes/componentes/header.php';
require 'includes/utils/config.php';

    if (isset($_POST['email']) && empty($_POST['email']) == false) {
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        //echo $email, $senha;
        
        $select = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha';";
        $preparada = $conexao->query($select);
        
        if($preparada->rowCount() > 0){
            $dado = $preparada->fetch();

            //print_r($dado);
            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['nome'];
            $_SESSION['email'] = $dado['email'];

            //echo $_SESSION['id'], $_SESSION['nome'], $_SESSION['email'];
            header("Location: logado.php");
            
        };
    }
    
include 'includes/componentes/form-login.php';  
include 'includes/componentes/footer.php';  
   
?>

