<?php
class Computador {
    public $marca;
    public $processador;

    function __construct($marca, $processador) {
        $this->marca = $marca; // $this -este o próprio objeto-
        $this->processador = $processador;
    }

    function get_marca() {
        return $this->marca;
    }
    
    function get_processador() {
        return $this->processador;
    }
}

 $galaxybook4 = new Computador("Samsung","Ryzen"); //Aqui está sendo criado um novo objeto $galaxybook4

 echo "A marca do computador é: " .$galaxybook4->get_marca();//aqui está sendo invocado o novo objeto $galaxybook4, o qual está invocando o método (function) get_marca(), que, por sua vez, está reinderizando o texto (marca do computador) "Samsung", declarado na linha 20

 echo "</br>"; //Aqui está sendo reinderizado uma quebra de linha em html

 echo "O processador do computador é: " . $galaxybook4->get_processador(); //aqui está sendo invocado o novo objeto $galaxybook4, o qual está invocando o método (function) get_processador(), que, por sua vez, está reinderizando o texto (processador do computador) "Ryzen", declarado na linha 20
 //objeto computadores
//marca e processador
?>