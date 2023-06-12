<?php 

function passwordGenerate($length, $repetition, $useNumbers, $useLetters, $useSymbols) {
    $result = "";

    $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "0123456789";
    $symbols = "!?&%$<>^+-*/()[]{}@#_=";

    $typeCharacters = "";

    if($useLetters) {
        $typeCharacters .= $letters;
    } else if($useNumbers) {
        $typeCharacters .= $numbers;
    } else if($useSymbols) {
        $typeCharacters .= $symbols;
    } else if ($typeCharacters == "") {
        $typeCharacters = $letters . $numbers . $symbols;
    }

    $charNumber = strlen($typeCharacters);

    if($charNumber < $length) {
        $length = $charNumber;
    }

    while(strlen($result) < $length) {
        $randoNum = rand(0, $charNumber-1 );
        $currentChar = $typeCharacters[$randoNum];
        
        if( $repetition || !str_contains($result, $currentChar) ) {
            $result .= $currentChar;
        }
    }

    return htmlspecialchars($result);
}

?>
    ?>