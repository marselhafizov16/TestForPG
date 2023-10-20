<?php
error_reporting(-1);
spl_autoload_register();

$q = new classes\Quadrate(10);
echo "Площадь квадрата:" . $q->getSquare();
echo "<br>";

$r = new classes\Rictangle(10, 5);
echo "Площадь прямоугольника:" . $r->getSquare();
echo "<br>";

$t = new classes\Triangle(3, 4);
echo "Площадь треугольника:" . $t->getSquare();
echo "<br>";

$c = new classes\Circle(15);
echo "Площадь круга:" . $c->getSquare();