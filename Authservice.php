<?php
session_start();

require_once("backend/model/controllerUsuarios.php");
require_once("backend/model/modelUsuarios.php");

$type = filter_input(INPUT_POST, "type");

if ($type === "register") {

    $new_nome = filter_input(INPUT_POST, "new_nome");
    $new_email = filter_input(INPUT_POST, "new_email", FILTER_SANITIZE_EMAIL);
    $new_password = filter_input(INPUT_POST, "new_password");
    $confirm_password = filter_input(INPUT_POST, "confirm_password");

    
    if ($new_email && $new_nome && $new_password) {
        if ($new_password === $confirm_password) {
            
            $usuario = new Usuario(null, $new_nome, $new_email);
            $modelUsuarios = new modelUsuarios();
            if(!$modelUsuarios->getByEmail($new_email)){
                $success = $modelUsuarios->create($usuario);

            } else{
                echo "Email já utilizado";
            }
           
        } else {
            echo "Senhas incompativeis!";
        }
    } else {
        echo "Dados de input inválidos!";
    }
} elseif ($type === "login") {

    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password");

    $modelUsuarios = new modelUsuarios();
    $usuario = $modelUsuarios->getByEmail($email);    

    if($usuario && password_verify($password, $usuario->getSenha())) {
        header('Location: index.php');
        exit();
    } else {
        echo "Email ou Senha inválidos!";
    }
} elseif ($type === "logout"){
   
    $_SESSION = array();
    session_destroy();

    header("Location: auth.php");
    exit();
}

?>