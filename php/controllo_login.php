<!-- script login -->
<?php
if(isset($_POST['login'])) //controllo tasto "submit" premuto//
{
    require_once('config.php'); 

    $email = $_POST['email']; 
    $password = $_POST['password'];

    if($email === "" || $password === "") //controllo campi vuoti
        print('<br><p style = "color:red; font-weight: bold"><b>Hai lasciato uno o più campi vuoti</b></p>');    
    
    else
    {
        $sql = "SELECT * FROM utenti WHERE utenti.email = '$email' AND utenti.password = '$password'";
        $risultato = mysqli_query($connessione, $sql);
    
        if (mysqli_num_rows($risultato) > 0) //login effettuato
        {
            session_start();
            
            $riga = mysqli_fetch_assoc($risultato); 
            
            //assegnazione variabili di sessione

            $_SESSION['id'] = $riga['ID'];
            $_SESSION['nome'] = $riga['NOME'];
            $_SESSION['cognome'] = $riga['COGNOME']; 
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;

            header("location: http://localhost:8080/booking-appointments/");
        }
        else print('<br><p style = "color:red; font-weight: bold"><b>email e/o password errata</b></p>');        
    }
}
?>