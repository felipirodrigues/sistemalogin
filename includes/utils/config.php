<?php
    try {
        $parametros = "mysql:dbname=estudos_pdo;host=localhost";
        $dbuser = "subdominio";
        $dbpass = "123mudar";


        $conexao = new PDO($parametros, $dbuser, $dbpass);
    } catch (PDOException $th) {
        echo "Falhou a conexão: ". $th->getMessage();
    }

?>