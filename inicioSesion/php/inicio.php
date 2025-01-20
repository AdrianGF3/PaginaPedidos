<?php 
    session_start();

    $usuarios_Ok = include 'usuarios.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = trim($_POST['nombre']);
        $pasword = trim($_POST['contrasenia']);
        
        if (isset($usuarios_Ok[$usuario]) && password_verify($pasword, $usuarios_Ok[$usuario])) {
            $_SESSION['usuario'] = $usuario;
            header("Location: ../apartados/pedidos.php");
            exit;
        } else {
            header("Location: ../apartados/error.html");
            exit;
        }
    } else {
        header("Location: ../apartados/error.html");
        exit;
    }
?>