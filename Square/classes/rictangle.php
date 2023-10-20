<?php
namespace Classes;

class Rictangle implements isquare 
{
    private $a;
    private $b;

    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare(){
        return $this->a * $this->b;
    }
}