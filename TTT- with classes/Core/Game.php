<?php





class Game{

    private $player1;
    private $player2;

    public static $isTie = false;

    private static $isWinner = false;


    public function __construct(Player $player1, Player $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
    }


    public function newGame()
    {


        while(!self::$isWinner && !self::$isTie){


            Board::displayBoard();


            $p1Coord =  $this->player1->getCoordinates();
            $p1Symb = $this->player1->getPlayersSymbol();




            if(Board::getBoard($p1Coord) !== " " ){
                echo "slot is taken";
                echo PHP_EOL;
                continue;
            }else{
                Board::setBoard($p1Coord,$p1Symb);
                Board::displayBoard();
            }

            if(Logic::checkWinner($this->player1, $this->player2)){
                self::$isWinner=true;
                break;
            };


            while(!self::$isTie){

                    if(get_class($this->player2)=="Computer"){
                    echo "Computer makes a move";
                    echo PHP_EOL;}

                $p2Coord =  $this->player2->getCoordinates();
                $p2Symb = $this->player2->getPlayersSymbol();



                if(Board::getBoard($p2Coord) !== " "){
                    echo "Slot is taken";
                    echo PHP_EOL;

                }else{
                    Board::setBoard($p2Coord,$p2Symb);
                    break;
                }
            }

//
            if(Logic::checkWinner($this->player1, $this->player2)){
                self::$isWinner=true;

            }
//


            //Check Winners logic
//





    }

}}
