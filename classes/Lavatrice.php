<?php

  require 'Elettrodomestici.php';

  class Lavatrice extends Elettrodomestici
  {
    public $caricamento;
    public $rumore;
    public $classe;
    public function __construct($marca,$consumo,$prezzo,$colore,$rumore, $classe)
    {
      // parent::__construct($marca,$consumo,$prezzo,$colore,$rumore, $classe)
        $this->marca = $marca;
        $this->consumo = $consumo;
        $this->prezzo = $prezzo;
        $this->colore = $colore;
        $this->rumore = $rumore;
        $this->classe = $classe;
    }
  }



  $lavasciuga2 = new Lavatrice('Bosch', '150 kWh/annum', 239, 'blue', '79db', 'A+');

  $lavasciuga2->caricamento = 'Frontale';
  var_dump($lavasciuga2);


 ?>
