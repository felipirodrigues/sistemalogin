<?php
session_start();

    if(isset($_SESSION['id']) && empty($_SESSION['id']) == false){
        $nome = $_SESSION['nome'];
        $email = $_SESSION['email'];

        //echo $nome, $email;
    }
    else {
        header("Location: login.php");
    }
?>

<div>
    <div class="area-conteudo">
        <div class="titulo">Início</div>
        <div class="apresentacao">
            Bem vindo(a),<strong> <?php echo strtoupper($_SESSION['nome']); ?></strong></br></br>

            Nome: <?php echo $_SESSION['nome']; ?></br>
            Email: <?php echo $_SESSION['email']; ?></br></br>
        </div>
        <div>
            <a href="editar.php">Editar dados</a>
        </div>

    </div>
</div>