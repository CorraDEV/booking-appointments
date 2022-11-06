<?php
    if(isset($_POST['elimina_profilo']))
    {
        session_start();
        include_once('config.php');
        $email = $_SESSION['email'];
        $sql = "DELETE FROM utenti WHERE EMAIL = '$email'";
        $riga = mysqli_query($connessione, $sql);    
        print('<span style = "color:green; font-weight: bold">Account eliminato con successo</span>');
        session_destroy();        
    }
?>