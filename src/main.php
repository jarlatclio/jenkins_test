<?php
require './Api/Directory.php';
echo "Test for Jenkins being executed";

$dirThing = new JGDirectory();
$dirThing->setPath("/tmp");


?>
