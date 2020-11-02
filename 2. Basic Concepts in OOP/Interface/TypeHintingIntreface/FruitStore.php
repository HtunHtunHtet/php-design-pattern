<?php

include_once ('IProduct.php');

class FruitStore implements IProduct
{

    function apples()
    {
        return "FruitStore sez -- We have apples. <br/>";
    }

    function oranges()
    {
        return "FruitStore sez -- We have orange. <br/>";
    }
}