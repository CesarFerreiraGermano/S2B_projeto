<?php
session_start();

function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario() {
    if (!isset($_SESSION["usuario_logado"])) {
        $_SESSION['danger'] = "Você não tem acesso a está funcionalidade!";
        header("Location: index.php");
        die();
    }
}

function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
	$_SESSION['usuario_logado'] = $email;
}

function logout(){
    session_destroy();
    session_start();
    $_SESSION['success'] = "Logoff efetuado com sucesso";
    header("Location: index.php");
}

?>