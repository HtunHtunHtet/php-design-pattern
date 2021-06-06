<?php

include_once ('Dogs.php');
include_once ('Cats.php');

class Client
{
    function __construct()
    {
        $dogs=new Dogs();
        $cats=new Cats();
    }
}

$client = new Client();
