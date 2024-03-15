<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.s0">
    <title>PHP-badwords</title>

    <link rel="stylesheet" href="style.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container p-2 d-flex flex-column align-items-center justify-content-center">

        
        <div class="col p-0 m-0 d-flex flex-column justify-content-center align-items-center ">
            
            <h1>php</h1>
            <div class="card" style="width: 25rem;">
                <div class="card-body">
                    <h3 class="card-title">Inserisci una Frase</h3>
                    <form action="results.php">
                        <div class="mb-3">
                            <label class="form-label color-lab">Frase</label>
                            <input type="text" class="form-control" aria-describedby="emailHelp" name='phrase'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label color-lab">Parola da Censurare</label>
                            <input type="text" class="form-control" name='bad_word'>
                        </div>
                        <button type="submit" class="btn my-btn">Invia</button>
                    </form>
                </div>
            </div>
            
        </div>

    </div>


    <!-- SCRIPT-BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>