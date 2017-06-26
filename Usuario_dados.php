<?php
include_once 'Login_banco.php';




$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = loginUsuario($con, $email, $senha);

if ($usuario) {
    logaUsuario($usuario['usuario_email']);
    header("Location: index.php");
}else {
    $_SESSION['danger'] = 'Usuário ou senha inválida.';
    header("Location: index.php");
}

?>