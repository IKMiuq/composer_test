<?php
require '../vendor/autoload.php';

use Otus\Example;

try{
	$ex = new Example();
	$ex->greet();
}
catch(Exception $e){
	echo 'Выброшено исключение: ',  $e->getMessage(), "\n";
}
