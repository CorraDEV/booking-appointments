<?php
    if(isset($_POST['invia_recensione']))
    {
        $commento_recensione = $_POST['commento_recensione'];
        $voto_recensione = $_POST['voto_recensione'];

        if(strlen($commento_recensione) > 1000)
            print('<br><p style = "color:red; font-weight: bold">devi rispettare il limite massimo di caratteri</p>');        
        
        else if($voto_recensione > 10 || $voto_recensione < 1)
            print('<br><p style = "color:red; font-weight: bold">voto non valido</p>'); 
        
        else
        {
            include_once('config.php');           
            $email_commento =  $_SESSION['email'];
            $sql = "INSERT INTO recensioni (EMAIL, COMMENTO, VOTO) VALUES ('$email_commento', '$commento_recensione', '$voto_recensione')";
            $riga = mysqli_query($connessione, $sql);               
            header("Location: http://localhost:8080/booking-appointments/");
        }
    }
?>