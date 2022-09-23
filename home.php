<?php
/** include file */
require_once('acme/fruit/orange.php');
require_once('acme/color/orange.php');

/** use namespace */
use Acme\Color\Orange;
use Acme\Fruit\Orange as Forange;

$o = new Orange();
$f = new Forange();
echo $o->get_fruit();
echo "\n";
echo $f->get_fruit();
?>