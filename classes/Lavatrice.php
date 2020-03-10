<?php

  require 'Elettrodomestici.php';

  class Lavatrice extends Elettrodomestici
  {
    public $caricamento;
    public $rumore;
    public $classe;
    function __construct($marca,$consumo,$prezzo,$colore,$rumore, $classe)
    {
      $this->marca = $marca;
      $this->consumo = $consumo;
      $this->prezzo = $prezzo;
      $this->colore = $colore;
      $this->rumore = $rumore;
      $this->classe =$classe;
    }
  }

  $lavasciuga = new Lavatrice('Samsung', '122 kWh/annum', 599, 'nero', '59db', 'A++');
  var_dump($lavasciuga);


 ?>
