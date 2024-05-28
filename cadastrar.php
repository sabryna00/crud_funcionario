<?php
echo "oi";
if (isset($_POST['submit'])) {
    if (isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
        require '../conexao.php';
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $sql = "INSERT INTO usuarios(usuario,senha) VALUES(:usuario,:senha)";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue("usuario", $usuario);
        $resultado->bindValue("senha", $senha);
        $resultado->execute();
        header('Location: ../login.php?sucesso=ok');
    }

}