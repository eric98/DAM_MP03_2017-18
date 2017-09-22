<?php

class PrimeraClasse {

    var $atribut = "Atr. Public";
    public static $public = "public";
    private $priv = "privat";
    protected $proc = "protected";
    
    function __construct($param) {
//        $this->atribut = "Modificat al constructor";
        $this->atribut = $param;
    }

        public function mostrar() {
        echo $this->atribut;
    }

    public static function mostrarEstatic() {
        echo PrimeraClasse::$pub;
    }
    
    public function parametresVariables(){
        $params = func_get_args();
        $numParams = func_num_args();
//        var_dump($args);
        echo $numParams . "\n";
        print_r ($params);
    }

}

$obj = new PrimeraClasse("Objecte 1 \n");
$obj1 = new PrimeraClasse(123456);

$obj->parametresVariables(1,'a',3.4,"hola");

//PrimeraClasse::mostrarEstatic();

//$var = 0;
//
//echo "empty()" , var_dump(empty($var)); //està definida i no te res
//echo "isset()" , var_dump(isset($var)); //està definida i té algun valor
//echo "is null()" , var_dump(is_null($var)); //és null

$a = true; //boolean
var_dump($a);

$a = 4; //int
var_dump($a);

$a = 4.0; //float
var_dump($a);

$a = 'c'; //string
var_dump($a);

$a = array(); //array
var_dump($a);

$a = new PrimeraClasse("01"); //object
var_dump($a);

var_dump(3+4.0); //float
var_dump(3+4); //int
var_dump(3+"7.5"); //float
var_dump("a3"+7.5); //float

var_dump(3+(int)4.9); //int
var_dump((float)3+4.9); //float
var_dump((float)3+4); //float

var_dump((string)3+4); //int
var_dump((string)(3+4)); //string

var_dump((bool)0); //false
var_dump((bool)0.0); //false
var_dump((bool)"0"); //false
var_dump((bool)""); //false
var_dump((bool)array()); //false
var_dump((bool)NULL); //false