<?php

require "Core/Game.php";
require "Core/Player.php";
require "Core/Computer.php";
require "Core/Board.php";
require "Core/Logic.php";

$p1 = new Player("Vitalijs", "G");

//$p2 = new Player("Aleks","#");

$p2 = new Computer("Computer", "x");

$newGame = new Game($p1, $p2);

$newGame->newGame();





