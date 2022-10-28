<!-- script login -->
<?php
if(isset($_POST['login'])) //controllo tasto "submit" premuto//
{
    require_once('config.php'); 

    $email = $_POST['email']; 
    $password = $_POST['password'];

    if($email === "" || $password === "")
        print('<br><p style = "color:red; font-weight: bold"><b>Hai lasciato uno o più campi vuoti</b></p>');    
    
    else
    {
        $sql = "SELECT * FROM utenti WHERE utenti.email = '$email' AND utenti.password = '$password'";
        $riga = mysqli_query($connessione, $sql);
    
        if (mysqli_num_rows($riga) > 0)
        {
            session_start();
            $_SESSION['email'] = $email;
            header("location: http://localhost:8080/booking-appointments/");
        }
        else print('<br><p style = "color:red; font-weight: bold"><b>email e/o password errata</b></p>');        
    }
}
?>