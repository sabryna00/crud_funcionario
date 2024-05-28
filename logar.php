<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        session_start();
        require 'conexao.php';
        $sql = "SELECT  * FROM usuarios WHERE usuario = :usuario && senha = :senha ";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue("usuario", $usuario);
        $resultado->bindValue("senha", $senha);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $dadoRecebido = $resultado->fetch();
            $_SESSION['nome'] = $dadoRecebido['nome'];
            $_SESSION['id'] = $dadoRecebido['id'];
            header('location: index.php');
        } else {
            header('location: login.php?erro=ok');
        }

    }
}