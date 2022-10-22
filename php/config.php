<?php
    //credenziali connessione database//

    $host = "localhost: 3307";  
    $user = "root";
    $password = "";
    $db = "booking-jab-marza";

    $connessione = new mysqli($host, $user, $password, $db);

    if($connessione === false)
        die("Errore durante la connessione: " . $connessione->connection_error);
?>
