<?php
$sale = new Sale(10.5, date("Y-m-d"));
/*$sale->total =1.5;
$sale->date = date("Y-m-d");*/
$sale->createInvoice();
echo $sale::$count;
Sale::reset();
print_r($sale);
class Sale{
    public int $total; //Tipado fuerte en Clases
    public string $date;
    //Propiedades estaticas
    public static $count;

    //Constructor: indica lo que debe exitir para crear un objeto
    public function __construct( int|float $total, $date){ //Union en total
        $this->total = $total;
        $this->date = $date;
        self::$count++; //las propiedades estaticas se comparten
    }
    //Get obtine y set asigna
    public function getDate(){
        return $this->date;
    }
    public function setDate(string $date){
        //Se pueden realizar validaciones
        $this->date = $date;
    }

    //Metodo estatico
    public static function reset(){
        self::$count = 0;
    }

    //Destructor: permite eliminar los objetos cuando se termina el programa
    public function __destruct(){
        echo "Se ha eliminado el objeto";
    }

    //Metodos
    public function createInvoice(){
        echo "Se crea la factura";
    }
}

//Herencia
class OnlineSale extends Sale{
    public $paymentMethod;
    public function __construct( int|float $total, $date, string $paymentMethod){
        parent::__construct($total, $date);
        $this->paymentMethod = $paymentMethod;
    }
}
//Encapsulamiento
/*
public: todos pueden acceder a el
private: solo puede ser visto por la clase donde esta definida
protect: solo pueden ver los elementos en la clase donde se define y las clases que heredan
*/