<?php
abstract class Product{
    protected float $price;
    protected string $name;

    abstract public function calculatePrice():float;

    public function getName():string{
        return $this->name;
    }
    public function setName(string $name):void{
        $this->name = $name;
    }
}


class Configuracion{
    const BASE_URL = "https://mi-sitio-web.com";
    const VERSION = "1.0.0";
}
// Usar las constantes de clase
echo "La base URL es: " . Configuracion::BASE_URL . "<br>";
echo "La versión es: " . Configuracion::VERSION;

