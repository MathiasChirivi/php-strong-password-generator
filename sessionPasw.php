
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <!--Genera la password casuale -->
    <?php 
         session_start();
         $password = $_SESSION['length'];
         echo "La tua Password è:" . $password;
        ?>
    <a href="./formAsk.php">Torna alla home</a>

    <!-- <?php session_unset(); ?>
    <?php session_destroy(); ?> -->
</body>
</html>