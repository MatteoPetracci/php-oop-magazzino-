<?php
  require_once __DIR__ . '/classes/Elettrodomestici.php';
  require_once __DIR__ . '/classes/Lavatrice.php';

  $frigorifero = new Elettrodomestici ('Bosch','365 kWh/annum', 750, 'argento');
  var_dump($frigorifero);

  $congelatore = new Elettrodomestici('Whirlpool','234 kWh/annum', 245, 'bianco');
  var_dump($congelatore);

  $lavasciuga = new Elettrodomestici('Samsung', '122 kWh/annum', 599, 'nero', '59db', 'A++');
  $lavasciuga->classe = 'A+++';
  $lavasciuga->acquirenti = 'Paolo Bianchi';
  $lavasciuga->nomePagante();
  var_dump($lavasciuga);


  $lavasciuga2 = new Lavatrice('Bosch', '150 kWh/annum', 239, 'blue', '79db', 'A+');
  $lavasciuga2->caricamento = 'Frontale';
  $lavasciuga2->classe = 'A++';
  $lavasciuga2->nazione = 'Italia';
  $lavasciuga2->getNation();
  var_dump($lavasciuga2);

  $lavatrice2 = new Elettrodomestici('Samsung', '122 kWh/annum', 599, 'nero', '59db', 'A++');
  $lavatrice2->acquirenti = 'Mario Rossi';
  $lavatrice2->nomePagante();

  var_dump($lavatrice2);

  $lavasciuga3 = new Lavatrice('Bosch', '250 kWh/annum', 739, 'blue', '45db', 'A++');
  $lavasciuga3->caricamento = "Dall 'alto";
  $lavasciuga3->classe = 'A++';
  $lavasciuga3->acquirenti = 'Giuseppe Verdi';
  // $lavasciuga3->nomePagante();
  $lavasciuga3->nazione = 'Cina';
  $lavasciuga3->getNation();

  var_dump($lavasciuga3);

  var_dump(get_class_methods(new Lavatrice('Samsung', '133 kWh/annum', 599, 'Giallo', '39db', 'A++')));

 ?>
