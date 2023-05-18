<?php

// An example of a code that does not confirm to the Open/Cloded principle

class Dog
{
    public function bark(): string
    {
        return 'woof woof';
    }
}

class Duck
{
    public function quack(): string
    {
        return 'quack quack';
    }
}

class Fox
{
    public function whatDoesTheFoxSay(): string
    {
        return 'wooo wooo...';
    }
}


class communication
{
    public function Communicate($animal): string
    {
        switch (true) {
            case $animal instanceof Dog:
                return $animal->bark();

            case $animal instanceof Duck:
                return $animal->quack();

            case $animal instanceof Fox:
                return $animal->whatDoesTheFoxSay();
            default:
                throw new InvalidArgumentException('Unknown animal');
        }
    }
}
