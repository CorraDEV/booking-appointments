<!-- script modifica profilo -->
<?php    
    if(isset($_POST['salva_modifiche'])) //controllo tasto "submit" premuto//
    {
        require_once('config.php'); 

        session_start();

        $nome_modificato = $_POST['nome'];
        $cognome_modificato = $_POST['cognome'];
        $password_modificata = $_POST['password'];

        if($nome_modificato === "" || $cognome_modificato === "" || $password_modificata === "") //controllo campi vuoti//
            print('<br><p style = "color: red; font-weight: bold"><b>Hai lasciato uno o più campi vuoti</b></p>');
        /*
        else
        {
            $sql = "SELECT * FROM utenti WHERE utenti.email = '$email'";
            $riga = mysqli_query($connessione, $sql);    
            
            if (mysqli_num_rows($riga) > 0) //controllo email già utilizzata// 
                print('<br><p style = "color:red; font-weight: bold"><b>Questa email è già stata utilizza</b></p>');
            
            else //inserimento dati nel database
            {
                $sql = "INSERT INTO utenti (NOME, COGNOME, EMAIL, PASSWORD) VALUES ('$nome', '$cognome', '$email', '$password')";
                $riga = mysqli_query($connessione, $sql);    
                header("Location: http://localhost:8080/booking-appointments/login.php");
            }
        }
        */
    }
?>