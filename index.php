<?php
  include 'classes/Elettrodomestici.php';

  $lavatrice = new Elettrodomestici ('Samsung', '122 kWh/annum', 599, 'nero');
  var_dump($lavatrice);

  $frigorifero = new Elettrodomestici ('Bosch','365 kWh/annum', 750, 'argento');
  var_dump($frigorifero);
  
  $lavastoviglie = new Elettrodomestici ('Whirlpool','265 kWh/annum', 330, 'bianco');
  var_dump($lavastoviglie);
 ?>
