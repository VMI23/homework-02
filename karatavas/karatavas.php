<?php


require_once 'hangmanpics.php';



$words = [
    "giraffe",
    "tiger",
    "elephant",
    "crocodile",
    "fox"
    ];



$wordToBeGuessed = $words[rand(0,(count($words)-1))];

$arrayLetters = str_split($wordToBeGuessed);


$arrayOfDash = [];
for ($k=0;$k<count($arrayLetters); $k++){
    $arrayOfDash[$k] = " _ ";
}
echo implode("",$arrayOfDash);

//var_dump($arrayLetters);

echo PHP_EOL;
$attempts = 3;
$pic=0;

while($attempts > 0 && (in_array(" _ ", $arrayOfDash))){

    $userInput = readline("Please enter your letter. Remaining attempts: {$attempts} ");


    if (strpos($wordToBeGuessed, $userInput) !== false){



        $elements = array_keys($arrayLetters, $userInput);
        //gives array of indeces of letters provided;

        foreach ($elements as $i){
            $arrayOfDash[$i] = $userInput;
        }
                echo implode("",$arrayOfDash);
        echo PHP_EOL;




    }else{
        echo "Letter is not present";
        echo PHP_EOL;
        $attempts-=1;
        $pic +=1;
        echo $hangman[$pic];
        }

    if($attempts === 0){

        echo " You lost";
        echo PHP_EOL;

    }

    if(!in_array(" _ ", $arrayOfDash)){

        echo "Congratulations! You Won";
        echo PHP_EOL;
    }

}




