<?php
    session_start();
    if(!isset($_SESSION['email']))
    {
        $_SESSION['error_message'] = 'Per accedere a questa pagina devi prima aver effettuato il login';
        header('Location: http://localhost:8080/booking-appointments/');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazione</title>
    <link rel="icon" href="img/booking.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  

    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina
            window.history.replaceState(null, null, window.location.href);
        
    </script>

</head>

<body class="bg-info">
    <h1 class="text-center text-white mt-5">PRENOTAZIONE</h1>

    <div class="d-flex w-100 justify-content-center">
        
        <form class="d-flex flex-column gap-2 w-25 mt-5 align-items-center" action="" method="POST">
            
            <label for="data_appuntamento" class="w-100 text-left"><b>Data e ora appuntamento:</b></label>
            <select class = "w-100 form-select shadow-none" name="data_appuntamento">
            <?php
                require_once("php/config.php");
                $sql = "SELECT * FROM appuntamenti_disponibili";                
                $risultato = mysqli_query($connessione, $sql);
    
                if (mysqli_num_rows($risultato) > 0)
                {
                    while($riga = mysqli_fetch_assoc($risultato))
                    {
                        print('"<option value = "');
                        print($riga['DATA_DISPONIBILE']);
                        print('">');
                        print($riga['DATA_DISPONIBILE']);
                        print("</option>");
                    }
                }
                else print('<br><p style = "color:red; font-weight: bold"><b>Non è possibile scegliere una data di prenotazione</b></p>');                
            ?>
            </select>          
            <input type = "submit" class = "btn btn-primary w-100" value="Prenota" name = "prenota">
            <span class = "align-self-end"><a href="index.php">Torna in homepage</a></span>
            <?php 
                include 'php/controllo_prenotazione.php';
            ?>
        
        </form>

    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>