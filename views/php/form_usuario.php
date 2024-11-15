<?php
require_once '../../Controlers/user_controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $controller = new UsuarioController();
    $mensaje = $controller->registrar($nombre,$apellido);

    if ($mensaje) {
        echo "<p>$mensaje</p>";
    }
}