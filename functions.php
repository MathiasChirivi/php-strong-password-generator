<?php 

$length = $_GET['length'];

    function passwordGenerate($length){

        $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz$%&/_()';
        if($length <= 0) {
            return 'Nessun parametro valido inserito';
        } else {
            return substr(str_shuffle($data), 0, $length);
        }

        $_SESSION['pagePassword'] = $length;

        if ($length)  {
            header('Location: sessionPasw.php');
        } else {
            echo 'Compila il form';
        }
    }
    ?>