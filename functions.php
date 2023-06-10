<?php 

$length = $_GET['length'];

    function passwordGenerate($length){
        $passwordLength = ""; 
        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz$%&/_()';
        if($length <= 0) {
            $passwordLength = 'Nessun parametro valido inserito';
        } else {
            $passwordLength = substr(str_shuffle($data), 0, $length);
        }

        return $passwordLength;
    }
    ?>