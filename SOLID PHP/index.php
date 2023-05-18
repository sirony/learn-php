<?php

include __DIR__ . '/open-closed-principle-good.php';

$comm = new Communication();

$dog = new Dog();
echo $comm->Communicate($dog);

echo "\n";

$duck = new Duck();
echo $comm->Communicate($duck);

echo "\n";

$fox = new Fox();
echo $comm->Communicate($fox);

echo "\n";

$cock = new Cock();
echo $cock->speak();

// echo $dog->speak();
