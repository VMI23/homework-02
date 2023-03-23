<?php

class Computer extends Player
{
    public function __construct($name, $symbol) {
        parent::__construct($name, $symbol);
    }

    public function getCoordinates() {
        $row = rand(0, 2);
        $col = rand(0, 2);

        return [$row, $col];
    }



}