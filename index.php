<?php
/** autoload using psr-4 */
require_once "vendor/autoload.php";

/** manual include file  */
// require_once('src/aaira.php');

use Akash\Anaya\noor\Aaira;
use Akash\Aaira as Aairan;
use Akash\Test;
use Naher\Noor;

$obj = new Aaira();
$obj->fun();

$obj = new Aairan();
$obj->fun();

$obj = new Test();
$obj->get_msg();

$obj = new Noor();
$obj->get_name();
?>