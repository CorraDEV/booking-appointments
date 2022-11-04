<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impostazioni</title>
    <link rel="icon" href="img/booking.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina   
            window.history.replaceState(null, null, window.location.href);
    
    </script>
    <style>
        /*stile scrollbar*/ 
        
        ::-webkit-scrollbar
        {
            width: 1vw;
            border-radius: 1vw;
        }

        ::-webkit-scrollbar-thumb
        {
            background-color: rgb(37, 36, 36);
            height: 1vw;
            width: 2vw;
            border: .2vw solid rgb(172, 172, 172);
            border-radius: 1vw;
        }

        ::-webkit-scrollbar-thumb:hover
        {
            background-color: rgb(87, 82, 82);
        }

        ::-webkit-scrollbar-track
        {
            background-color: grey;
        }
    </style>
</head>

<body class = "bg-info pb-5">
    <h1 class = "text-center text-white mt-5">IMPOSTAZIONI</h1>
    
    <div class="d-flex align-items-center flex-column gap-5 mt-5">  
        <div class="d-flex justify-content-center w-25 bg-dark p-2" style="border-radius: 4em;">
            <div class="d-flex align-items-center flex-column gap-3 bg-warning pt-3 pb-3" style="border-radius: 4em;">
                <p class="w-75">cliccando su "Modifica profilo" è possibile vedere ed eventualmente cambiare le credenziali relative al tuo account con il quale ti sei loggato</p>
                <a href="modifica_profilo.php"><button type="button" class="btn btn-light">Modifica profilo</button></a>
            </div>
        </div>
       
        <div class="d-flex justify-content-center w-25 bg-dark p-2" style="border-radius: 4em;">
            <div class="d-flex align-items-center flex-column gap-3 bg-warning pt-3 pb-3" style="border-radius: 4em;">
                <p class="w-75">cliccando su "Prenotazioni" è possibile vedere ed eventualmente annullare le prenotazioni da te effettuate</p>
                <a href="annulla_prenotazioni.php"><button type="button" class="btn btn-light">Prenotazioni</button></a>
            </div>
        </div>    

        <div class="d-flex justify-content-center w-25 bg-dark p-2" style="border-radius: 4em;">
            <div class="d-flex align-items-center flex-column gap-3 bg-warning pt-3 pb-3" style="border-radius: 4em;">            
                <p class="w-75">cliccando su "Recensioni" è possibile vedere ed eventualmente annullare le recensioni da te effettuate</p>
                <a href="annulla_recensioni.php"><button type="button" class="btn btn-light">Recensioni</button></a>
            </div>
        </div>

        <div class="d-flex justify-content-center w-25 bg-dark p-2" style="border-radius: 4em;">
            <div class="d-flex align-items-center flex-column gap-3 bg-warning pt-3 pb-3" style="border-radius: 4em;">            
                <p class="w-75">cliccando su "Elimina profilo" è possibile cancellare il proprio account, tuttavia le recensioni e le prenotazioni effettuate non verranno cancellate</p>
                <a href="php/elimina_profilo.php"><button type="button" class="btn btn-light">Elimina profilo</button></a>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity = "sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin = "anonymous"></script>
</body>

</html>