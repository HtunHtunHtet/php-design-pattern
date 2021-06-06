<?php

ini_set('display_erros', '1');
ERROR_REPORTING(E_ALL);
include_once ('AddAndSubstract.php');

$processObject = new AddAndSubstract(10,22);

echo 'Adding = '.  $processObject->adding() . '<br/>';
echo 'Substract= '.$processObject->substract();
