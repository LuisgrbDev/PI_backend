<?php
// Inicia a sessão
session_start();

// Encerra a sessão (remove todas as variáveis de sessão)
session_unset();
session_destroy();

// Redireciona para a página de login
header("Location: login.php");
exit();
?>
