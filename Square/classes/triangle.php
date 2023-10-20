<?php
namespace Classes;

class Triangle implements isquare 
{
    private $a;
    private $h;

    public function __construct($a, $h) {
        $this->a = $a;
        $this->h = $h;
    }

    public function getSquare(){
        return ($this->a * $this->h) / 2;
    }
}