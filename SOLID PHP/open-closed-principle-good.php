<?php

// An example of a code that does confirm to the Open/Cloded principle


interface Communicatable
{
    public function speak(): string;
}


class Dog implements Communicatable
{
    public function speak(): string
    {
        return 'woof woof';
    }
}

class Duck implements Communicatable
{
    public function speak(): string
    {
        return 'quack quack';
    }
}

class Cock
{
    public function speak(): string
    {
        return 'Cock Cock';
    }
}

class Hen
{
    public function speak(): string
    {
        return 'teee teee';
    }
}

class Fox implements Communicatable
{
    public function speak(): string
    {
        return 'wooo wooo...';
    }
}


class Communication
{
    public function communicate(Communicatable $animal): string
    {
        return $animal->speak();
    }
}
