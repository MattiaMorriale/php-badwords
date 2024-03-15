<?php

$phrase = $_GET['phrase'];

$bad_word = $_GET['bad_word'];


$number_element = strlen($phrase);

$censured_word = str_replace($bad_word, '***', $phrase );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-badwords</title>

    <link rel="stylesheet" href="style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container p-2 d-flex align-items-center justify-content-center">
        
        
        <div class="col p-0 m-0 d-flex flex-column justify-content-center align-items-center ">
            
            <h1>php</h1>
            
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h3 class="card-title">Frase:</h3>
                    <strong><?php echo $phrase ?></strong>
                    <br>
                    <strong>la frase è lunga [<span class='text-primary'><?php echo $number_element ?></span>] caratteri</strong>
                    
                    <hr>
                    
                    <h3 class="card-title">Frase Censurata:</h3>
                    <strong><?php echo $censured_word ?></strong>
                </div>
            </div>
            
        </div>

    </div>

    <!-- SCRIPT-BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>