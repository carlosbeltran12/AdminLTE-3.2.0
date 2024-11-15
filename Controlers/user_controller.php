<?php
require_once(__DIR__ . '/../Models/usuario.php');
class UsuarioController{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Usuario();
    }

    public function registrar($nombre,$apellido){
        $this->modelo->registrarUsuario($nombre,$apellido);
        header("Location: /AdminLTE-3.2.0/views/php/tabla.php");
        exit;
    }
}