<?php

class Logic
{

    public static function checkWinner(Player $p1, Player $p2){

        $p1name = $p1->getPlayerName();
        $p1Symb = $p1->getPlayersSymbol();

        $p2name = $p2->getPlayerName();
        $p2Symb = $p2->getPlayersSymbol();

for ($i = 0; $i <= 2; $i++) {
    if (Board::getBoard([$i,0]) === $p1Symb && Board::getBoard([$i,1]) === $p1Symb && Board::getBoard([$i,2]) === $p1Symb) {
        echo $p1name." wins by filling row No:  ".$i;
        echo PHP_EOL;
        Board::displayBoard();
        return true;

    }elseif (Board::getBoard([$i,0]) === $p2Symb && Board::getBoard([$i,1]) === $p2Symb && Board::getBoard([$i,2]) === $p2Symb){
        echo $p2name." wins by filling row No:  ".$i;
        echo PHP_EOL;
        Board::displayBoard();
        return true;
    }
}


//
//
//            //check cols
for($j=0;$j<=2 ;$j++){
    if (Board::getBoard([0,$j]) === $p1Symb && Board::getBoard([1,$j]) === $p1Symb && Board::getBoard([2,$j]) === $p1Symb){
        echo $p1name." wins by filling column No: ".$i;
        echo PHP_EOL;
        Board::displayBoard();
        return true;
    }elseif (Board::getBoard([0,$j]) === $p2Symb && Board::getBoard([1,$j]) === $p2Symb && Board::getBoard([2,$j]) === $p2Symb){
        echo $p2name." wins by filling column No: ".$i;
        echo PHP_EOL;
        Board::displayBoard();
        return true;
    }
}

//check diagonals
if (Board::getBoard([0,0])=== $p1Symb && Board::getBoard([1,1])=== $p1Symb && Board::getBoard([2,2])=== $p1Symb) {
    echo $p1name." wins by filling Diagonal ' \ '";
    echo PHP_EOL;
    Board::displayBoard();
    return true;
}elseif (Board::getBoard([0,0])=== $p2Symb && Board::getBoard([1,1])=== $p2Symb && Board::getBoard([2,2])=== $p2Symb) {
    echo $p2name. " wins by filling Diagonal ' \ '";
    echo PHP_EOL;
    Board::displayBoard();
    return true;
}elseif (Board::getBoard([0,2])=== $p1Symb && Board::getBoard([1,1])=== $p1Symb && Board::getBoard([2,0])=== $p1Symb) {
    echo $p1name . " wins by filling Diagonal ' / '";
    echo PHP_EOL;
    Board::displayBoard();
    return true;
}elseif (Board::getBoard([0,2])=== $p2Symb && Board::getBoard([1,1])=== $p2Symb && Board::getBoard([2,0])=== $p2Symb) {
    echo $p2name . " wins by filling Diagonal ' / '";
    echo PHP_EOL;
    Board::displayBoard();
    return true;
}

}
}