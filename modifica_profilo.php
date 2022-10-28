<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link rel="icon" href="img/booking.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina   
            window.history.replaceState(null, null, window.location.href);
    
    </script>
</head>

<body class = "p-3 mb-2 bg-info">
    <h1 class = "text-center text-white mt-5">MODIFICA PROFILO</h1>
    
    <div class = "d-flex w-100 justify-content-center">
        
        <form class = "d-flex flex-column gap-2 w-25 mt-5 align-items-center" action = "" method = "POST">
            <input type = "text" class = "w-100 form-control shadow-none" placeholder = "Nome" name = "nome">
            <input type = "text" class = "w-100 form-control shadow-none" placeholder = "Cognome" name = "cognome">            
            <input type = "password" class = "w-100 form-control shadow-none" placeholder = "Password" name = "password">
            <input type = "submit" class = "btn btn-primary w-100" value="Salva modifiche" name = "salva_modifiche">
            <?php 
                include 'php/controllo_modifica_profilo.php';
            ?>
        </form>

    </div>

    <!-- Bootstrap -->
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity = "sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin = "anonymous"></script>
</body>

</html>