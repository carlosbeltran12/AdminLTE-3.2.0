<?php

require_once 'conexion.php';
class Usuario extends Conexion{
    public function registrarUsuario($nombre,$apellido){
        $sql = "INSERT INTO users (nombre, apellido) VALUES (:nombre, :apellido)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellido', $apellido);
        $stmt->execute();
    }
}