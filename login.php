<?php
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require_once 'modelUsuarios.php'; // Certifique-se de ajustar o nome do arquivo se necessário

    $controller = new controllerUsuarios();
    $usuario = $controller->autenticarUsuario($email, $senha);

    if ($usuario) {
        $_SESSION['usuario_id'] = $usuario['id_usuario'];
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>
