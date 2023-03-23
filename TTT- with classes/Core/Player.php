<?php

class Player
{

    static $availableSymbols = [
        "X", "O", "#", "*"
    ];



    private $playerName;

    private  $playersSymbol;

    public function __construct($playerName, $playersSymbol)
    {
        $this->playerName = $playerName;

        $this->playersSymbol = $playersSymbol;
    }

    public function getCoordinates(){


        $coordinateStr = readline("{$this->playerName}: put in your coordinates: row(0 - 2) col(0 - 2): ");
        $coordinateArray = explode(" ",$coordinateStr);

        $row = intval($coordinateArray[0]);
        $col = intval($coordinateArray[1]);

        return [$row, $col];

    }


    public function getPlayersSymbol()
    {
        return $this->playersSymbol;
    }


    public function getPlayerName()
    {
        return $this->playerName;
    }



}