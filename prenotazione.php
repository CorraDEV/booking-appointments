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
            
            <label for="data_appuntamento" class="w-100 text-left"><b>Data appuntamento:</b></label>
            <select class = "w-100 form-select shadow-none" name="data_appuntamento">
                <option value="2022-12-01">2022-12-01</option>
                <option value="2022-12-02">2022-12-02</option>
                <option value="2022-12-03">2022-12-03</option>
                <option value="2022-12-04">2022-12-04</option>
            </select>          
            <label for="ora_appuntamento" class="w-100 mt-2 text-left"><b>Ora appuntamento:</b></label>
            <select class = "w-100 form-select shadow-none" name="ora_appuntamento">
                <option value="14:00:00">14:00:00</option>
                <option value="15:00:00">15:00:00</option>
                <option value="16:00:00">16:00:00</option>
                <option value="17:00:00">17:00:00</option>
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