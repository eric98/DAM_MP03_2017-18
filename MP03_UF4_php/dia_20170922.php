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
