<?php

  require_once __DIR__ . '/Elettrodomestici.php';
  require_once __DIR__ . '/../traits/NazioneProvenienza.php';

  class Lavatrice extends Elettrodomestici
  {
    use NazioneProvenienza;
    public $caricamento;
    public $rumore;
    public $classe;
    public function __construct($marca,$consumo,$prezzo,$colore,$rumore,$classe)
    {
      // parent::__construct($marca,$consumo,$prezzo,$colore,$rumore, $classe)
        $this->marca = $marca;
        $this->consumo = $consumo;
        $this->prezzo = $prezzo;
        $this->colore = $colore;
        // $this->acquirenti = $acquirenti;
        $this->rumore = $rumore;
        $this->classe = $classe;
    }
  }

 ?>
