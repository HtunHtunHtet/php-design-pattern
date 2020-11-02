<?php

include_once ('IProduct.php');

class CitrusStore implements IProduct
{

    function apples()
    {
        return "CitrusStore sez -- We have apples. <br/>";
    }

    function oranges()
    {
        return "CitrusStore sez -- We have orange. <br/>";
    }
}