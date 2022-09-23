<?php
require_once "vendor/autoload.php";
// require_once('src/aaira.php');

use Akash\Anaya\noor\Aaira;
use Akash\Aaira as Aairan;
use Akash\Test;

$obj = new Aaira();
$obj->fun();

echo "\n";
$obj = new Aairan();
$obj->fun();

echo "\n";
$obj = new Test();
$obj->get_msg();
?>