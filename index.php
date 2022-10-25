<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazioni</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  
    
    <style>
       
        #login a,
        #registrazione a,
        #prenotazione a
        {
            padding: 1.1em;
        }
        
        #login,
        #registrazione,
        #prenotazione
        {
            padding: 1em 0;
        }

        #login a:hover,
        #registrazione a:hover,
        #prenotazione a:hover
        {
            background-color: red;
        }
    </style>

    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina
            window.history.replaceState(null, null, window.location.href);
        
    </script>
</head>

<body class="bg-info">
    <nav class="d-flex bg-primary">        
        <ul class="d-flex list-unstyled ms-auto mt-auto mb-auto">
            <li id="login"><a style="color: white; font-weight: bold" class="text-decoration-none" href="login.php">Login</a></li>
            <li id="registrazione"><a style="color: white; font-weight: bold" class="text-decoration-none" href="registrazione.php">Registrati</a></li>
            <li id="prenotazione"><a style="color: white; font-weight: bold" class="text-decoration-none"  href="prenotazione.php">Prenota ora</a></li>
        </ul>
    </nav>
    <h1 class="text-center text-white mt-5">HOMEPAGE</h1>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>