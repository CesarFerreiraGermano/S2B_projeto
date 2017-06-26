<?php
include_once 'Login_banco.php';
include_once 'Login_funcoes.php';
include_once 'Conexao.php';


$email = $_POST['email'];
$senha = $_POST['senha'];

$usuario = loginUsuario($con, $email, $senha);

if ($usuario) {
    logaUsuario($usuario['usuario_email']);
    $_SESSION['usuario_responsavel'] = $usuario['usuario_responsavel'];
    $_SESSION['usuario_foto'] = $usuario['usuario_foto'];
    header("Location: index.php");
}else {
    $_SESSION['danger'] = 'Usuário ou senha inválida.';
    header("Location: index.php");
}

?>