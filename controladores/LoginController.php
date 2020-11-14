<?php

require_once('../modelos/Login.php');


$usuario = htmlspecialchars($_POST['usuario']);
$contraseña = htmlspecialchars($_POST['contraseña']);

if (!empty($usuario) && !empty($contraseña)) {

    $sess = new Login($usuario, $contraseña);

    $data = $sess->getSession();


    if (!is_object($data)) {
        session_start();
        $_SESSION['exist'] = false;
        $_SESSION['message_exist'] = 'El usuario no existe en la base de datos';
        header('Location:/');
    } else {
        var_dump($data);
        session_start();
        $_SESSION['exist'] = true;
        $_SESSION['usuario_id'] = $data->user_id;
        $_SESSION['usuario'] = $data->nombres . ' ' . $data->apellido_paterno . ' ' . $data->apellido_materno;
        $_SESSION['role'] = $data->role_id;

        var_dump($data->role_id);

        if ($data->role_id === 1) {
            header('Location:/vistas/recepcionista/administrador.php');
        }

        if ($data->role_id=== 2) {
            header('Location:/vistas/recepcionista/recepcionista.php');
        }

        if ($data->role_id === 3) {
            header('Location:/vistas/recepcionista/usuario.php');
        }
    }
} else {
    session_start();
    $_SESSION['empty'] = true;
    $_SESSION['empty_input'] = 'Todos los campos son necesarios';
    header('Location:/');
}
