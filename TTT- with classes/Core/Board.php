<?php

class Board
{

public static $board = [

[' ', ' ', ' '],
[' ', ' ', ' '],
[' ', ' ', ' ']

];



    public static function displayBoard(){

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo " ".self::$board[$i][$j]." " ;
                if ($j < 2) {
                    echo "|";
                }
            }
            echo "\n";
            if ($i < 2) {
                echo "-------------\n";
            }
        }

    }

    public static function setBoard($coord,$symbol)
    {
        self::$board[$coord[0]][$coord[1]] = $symbol;
    }




                                    //[1 ,2]
    public static function getBoard($coord)
    {
        return self::$board[$coord[0]][$coord[1]];
    }




}