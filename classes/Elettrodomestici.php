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
  }
?>
