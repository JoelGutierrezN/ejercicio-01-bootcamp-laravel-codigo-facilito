<?php
    session_start();
    $_SESSION['message'] = '';

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'admin' && $password == '1234'){
            $_SESSION['message'] = "Bienvenido";
            header('Location: project.php');
        }else{
            $_SESSION['message'] = 'Usuario o contraseña incorrectos';
            header('Location: project.php');
        }
    }else{
        $_SESSION['message'] = 'Los campos de usuario y contraseña son obligatorios';
        header('Location: project.php');
    }

?>
