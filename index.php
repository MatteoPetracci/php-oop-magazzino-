<?php
  require_once 'classes/Elettrodomestici.php';
  require_once 'classes/Lavatrice.php';

  // $congelatore = new Elettrodomestici('Whirlpool','234 kWh/annum', 245, 'bianco');
  // var_dump($congelatore);

  $lavasciuga = new Elettrodomestici('Samsung', '122 kWh/annum', 599, 'nero', '59db', 'A++');
  var_dump($lavasciuga);

 ?>
