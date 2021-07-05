<?php
session_start();
require 'config.php';

    if(isset($_SESSION['id']) && empty($_SESSION['id'])==false){
        $id = $_SESSION['id'];
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $select = "SELECT * FROM usuarios WHERE ";
        //$update = "UPDATE usuarios SET nome = '$nome' AND email = '$email' WHERE id = '$id';";

        $preparada = $conexao->query($update);

        if ($preparada->rowCount()>0){
            $dados = $preparada->fetch();

            $update = "UPDATE usuarios SET nome = '$nome' AND email = '$email' WHERE id = '$id';";

            $preparada = $conexao->query($update);
        }
    }


?>
<form method="POST">
    Nome:</br>
    <input type="text" name="nome"></br></br>
    Email:</br>
    <input type="text" name="email"></br></br>
    <input type="submit" value="Alterar">
</form>

<a href="index.php">Voltar ao início</a>