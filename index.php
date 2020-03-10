<?php
  require_once __DIR__ . '/classes/Elettrodomestici.php';
  require_once __DIR__ . '/classes/Lavatrice.php';

  $congelatore = new Elettrodomestici('Whirlpool','234 kWh/annum', 245, 'bianco');
  var_dump($congelatore);

  $lavasciuga = new Elettrodomestici('Samsung', '122 kWh/annum', 599, 'nero', '59db', 'A++');
  var_dump($lavasciuga);

  $lavasciuga2 = new Lavatrice('Bosch', '150 kWh/annum', 239, 'blue', '79db', 'A+');

  $lavasciuga2->caricamento = 'Frontale';
  var_dump($lavasciuga2);


 ?>
