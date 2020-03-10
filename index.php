<?php
  require_once __DIR__ . '/classes/Elettrodomestici.php';
  require_once __DIR__ . '/classes/Lavatrice.php';

  $frigorifero = new Elettrodomestici ('Bosch','365 kWh/annum', 750, 'argento');
  var_dump($frigorifero);

  $congelatore = new Elettrodomestici('Whirlpool','234 kWh/annum', 245, 'bianco');
  var_dump($congelatore);

  $lavasciuga = new Elettrodomestici('Samsung', '122 kWh/annum', 599, 'nero', '59db', 'A++');
  $lavasciuga->classe = 'A+++';
  var_dump($lavasciuga);

  $lavasciuga2 = new Lavatrice('Bosch', '150 kWh/annum', 239, 'blue', '79db', 'A+');

  $lavasciuga2->caricamento = 'Frontale';
  $lavasciuga2->classe = 'A++';
  var_dump($lavasciuga2);

  $lavatrice2 = new Elettrodomestici('Samsung', '122 kWh/annum', 599, 'nero', '59db', 'A++');
  $lavatrice2->acquirenti = 'Mario Rossi';
  $lavatrice2->nomePagante();
  var_dump($lavatrice2);

 ?>
