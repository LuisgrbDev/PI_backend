<?php
require_once 'controllerUsuarios.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirma_senha = $_POST['confirma_senha'];

    if ($senha === $confirma_senha) {
        $controller = new controllerUsuarios();
        $senha_hashed = password_hash($senha, PASSWORD_BCRYPT);
        $resultado = $controller->cadastrarUsuario($nome, $email, $senha_hashed);

        if ($resultado) {
            echo "Usuário cadastrado com sucesso!";
            // Redirecionar ou exibir uma mensagem de sucesso
        } else {
            echo "Erro ao cadastrar o usuário.";
            // Exibir mensagem de erro
        }
    } else {
        echo "As senhas não coincidem.";
        // Exibir mensagem de erro
    }
}
?>
