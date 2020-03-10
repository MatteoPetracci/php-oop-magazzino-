<?php
  class Elettrodomestici {
    public $marca;
    public $consumo;
    public $prezzo;
    public $colore;
    // Costruttore
    public function __construct($marca, $consumo, $prezzo, $colore)
    {
      // Inizializzo le variabili
      $this->marca = $marca;
      $this->consumo = $consumo;
      $this->prezzo = $prezzo;
      $this->colore = $colore;
    }

    public function getPrice()
    {
      return $this->prezzo;
    }
  }


  $lavatrice = new Elettrodomestici ('Samsung', '122 kWh/annum', 599, 'nero');
  var_dump($lavatrice);
  echo $lavatrice->gePrice();
?>
