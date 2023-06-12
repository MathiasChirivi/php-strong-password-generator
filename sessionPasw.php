    <?php 
        session_start();

        // var_dump($_SESSION['length']);
    ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
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
                    <div class="p-3 h-75 d-flex justify-content-center align-items-center ">
                            <strong class="m-0 me-1">La tua password é:</strong>
                            <!--Genera la password casuale -->
                            <?php echo $_SESSION['password'] ?>
                    </div>
                </div>
                <a class="d-flex align-items-center" href="./formAsk.php">Torna alla home</a>
            </div>
        </div>
    </main>

</body>
</html>