<?php
session_start();
require_once 'backend/controller/controllerUsuarios.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    if ($senha !== $confirma_senha) {
        $_SESSION['mensagem'] = "As senhas não conferem.";
        $_SESSION['tipo_mensagem'] = "erro";
        header("Location: frontend/cadastro.php");
        exit();
    }

    $senha_hash = password_hash($senha, PASSWORD_BCRYPT);

    $controllerUsuarios = new controllerUsuarios();
    $resultado = $controllerUsuarios->cadastrarUsuario($nome, $email, $senha_hash);

    if ($resultado) {
        $_SESSION['mensagem'] = "Usuário cadastrado com sucesso! Faça o login.";
        $_SESSION['tipo_mensagem'] = "sucesso";
        header("Location: frontend/login.php");
    } else {
        $_SESSION['mensagem'] = "Erro ao cadastrar usuário.";
        $_SESSION['tipo_mensagem'] = "erro";
        header("Location: frontend/cadastro.php");
    }
    exit();
}
?>
