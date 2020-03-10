<?php
  class Elettrodomestici {
    public $marca;
    public $consumo;
    public $prezzo;
    public $colore;
    public $acquirenti;
    // Costruttore
    public function __construct($marca, $consumo, $prezzo, $colore)
    {
      if (!is_int($prezzo)) {
      die("Prezzo non è un numero");
    }
      // Inizializzo le variabili
      $this->marca = $marca;
      $this->consumo = $consumo;
      $this->prezzo = $prezzo;
      $this->colore = $colore;
    }
    public function nomePagante() {
      return $this->acquirenti;
    }
  }
  // $frigorifero = new Elettrodomestici ('Bosch','365 kWh/annum', 750, 'argento');
  // var_dump($frigorifero);
?>
