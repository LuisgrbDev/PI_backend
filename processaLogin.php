<?php
session_start();
require_once 'backend/controller/controllerUsuarios.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $controllerUsuarios = new controllerUsuarios();
    $usuario = $controllerUsuarios->autenticarUsuario($email, $senha);

    if (true) {
        $_SESSION['usuario'] = $usuario;
        header("Location: frontend/eventos.php");
        exit();
    } else {
        $_SESSION['mensagem'] = "E-mail ou senha inválidos.";
        $_SESSION['tipo_mensagem'] = "erro";
        header("Location: frontend/login.php");
        exit();
    }
}
?>
    