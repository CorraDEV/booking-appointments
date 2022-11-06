<?php
    session_start();
    if(!isset($_SESSION['email']))
    {
        header('Location: http://localhost:8080/booking-appointments/');
    }
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedi recensioni effettuate</title>
    <link rel="icon" href="img/booking.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina   
            window.history.replaceState(null, null, window.location.href);
    
    </script>
</head>

<body class = "bg-info">
    <h1 class = "text-center text-white mt-5 mb-5">VEDI PRENOTAZIONI EFFETTUATE</h1>
    
    <div class="text-center mt-5 mb-4"><a style="font-size: 1.25em;" href="index.php">Torna in homepage</a></div>

    <?php
        $sql = "SELECT * FROM prenotazioni";
        require_once('php/config.php');
        $risultato = mysqli_query($connessione, $sql);
        
        print('<div class="d-flex flex-column align-items-center">');
        
        while($riga = mysqli_fetch_assoc($risultato))                        
            print('<div class="mt-4 mb-4 w-25 bg-dark p-2" style="border-radius: 4em;"><div class="d-flex w-100 align-items-center justify-content-center bg-warning pt-4 pb-4" style="border-radius: 4em;"><span>'.$riga['DATA_APPUNTAMENTO'].'</span></div></div>');
        
        print('</div>');    
    ?>
    
    <!-- Bootstrap -->
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity = "sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin = "anonymous"></script>
</body>

</html>