<?php
namespace Classes;

class Circle implements isquare 
{
    private $r;
    const PI = 3.1415;

    public function __construct($r) {
        $this->r = $r;
    }

    public function getSquare(){
        return $this->r * self::PI ** 2;
    }
}