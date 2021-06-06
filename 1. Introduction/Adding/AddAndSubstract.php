<?php

class AddAndSubstract
{
    private $num1;

    private $num2;

    public function __construct(Int $num1, Int $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function adding(): Int
    {
        return $this->num1 + $this->num2;
    }

    public function substract() : Int
    {
        return $this->num1 - $this->num2;
    }
}
