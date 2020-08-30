<?php
namespace Astronomy;
include "planet.php";
include "earth.php";
$planet = new Planets\Earth(); // Unqualified name
// $planet = new \Astronomy\Planets\Planet(); // Qualified name
$planet->getName();



