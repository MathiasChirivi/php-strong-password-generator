    <?php 

        // Includi il file functions.php
        include 'functions.php';

        if(!empty($_GET['length'])){
            $passwordAsk = passwordGenerate($_GET['length']);
            if($passwordAsk){
                session_start();
                $_SESSION['length'] = $passwordAsk;
                header('Location: ./sessionPasw.php');
            }
        }

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <!-- add bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col-auto m-auto p-4">
                    <h2 class="text-white">Strong Password Generator</h2>
                    <h5 class="text-white">Genera una password sicura</h5>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="col-12">
                <div class="container-fluid bg-info-subtle">
                    <div class="p-3 h-75 d-flex justify-content-center ">
                        Nessun Parametro valido inserito
                        <!-- <?php 
                            if(isset($_GET["length"])){
                            echo passwordGenerate($_GET["length"]);
                            }
                        ?> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="col-12">
                <div class="container-fluid bg-white p-3">
                    <div class="d-flex flex-column">
                        <form action="formAsk.php" method="get">
                            <div class="d-flex justify-content-around">
                                <div>
                                    <label for="">Lunghezza password:</label>
                                </div>
                                <div class="inputLenght">
                                    <input class="widthInput" autocomplete="off" min="6" max="20" type="number" name="length" >
                                </div>
                            </div>
                            <div class="d-flex justify-content-around mt-4">
                                <label for="">Consenti ripetizioni di uno o piu caratteri:</label>
                                <div class="d-flex flex-column ms-5">
                                <div class="d-flex flex-column ">
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                si
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            no
                                        </label>
                                    </div>
                                    <div class="mt-3 d-flex flex-column">
                                        <label>
                                            <input type="checkbox" name="useNumbers" value="1"> Utilizza numeri
                                        </label>
                                        <label>
                                            <input type="checkbox" name="useLetters" value="1"> Utilizza lettere
                                        </label>
                                        <label>
                                            <input type="checkbox" name="useSymbols" value="1"> Utilizza simboli
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5">Invia</button>
                            <button type="submit" class="btn btn-secondary mt-5">Annulla</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    

<!-- Add js Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>