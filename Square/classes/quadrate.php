<?php
namespace Classes;

class Quadrate implements isquare
{
    private $a;

    public function __construct($a) 
    {
        $this->a = $a;
    }

    public function getSquare() 
    {
        return $this->a * $this->a;
    }
}