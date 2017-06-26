<?php

    function loginUsuario($conn, $email, $senha) {
        $senhaMD5 = md5($senha);
        // proteger contra sql injection
        $email = mysqli_real_escape_string($conn, $email);
        $query = "select * from usuarios where usuario_email = '{$email}' and usuario_senha = '{$senhaMD5}'";
        $resultado = mysqli_query($conn, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }
?>