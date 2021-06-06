<?php

include_once('IMethodHolder.php');

class ImplementAlpha implements IMethodHolder
{

    public function getInfo($info)
    {
        echo "this is news". $info . "<br/>";
    }

    public function sendInfo($info)
    {
      return $info;
    }

    public function calculate($first, $second)
    {
        $calculated = $first * $second;
        return $calculated;
    }

    public function userMethods()
    {
        $this->getInfo(" The sky is falling..");
        echo $this->sendInfo("Vote For Senator Snort!"). "<br/>";
        echo "You make $". $this->calculate(20,15) . "in your part time job <br/>";
    }
}

$worker  = new ImplementAlpha();
$worker ->userMethods();
