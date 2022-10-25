<!-- script login -->
<?php
if(isset($_POST['login'])) //controllo tasto "submit" premuto//
{
    require_once('config.php'); 

    $email = $_POST['email']; 
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        print('mail non valida');

    if($email === "" && $password === "")
        print('<br><p style = "color:red;"><b>entrambi i campi non sono compilati</b></p>');    
        
    else if($email === "" && $password != "")
        print('<br><p style = "color:red;"><b>campo email non compilato</b></p>');    

    else if($email != "" && $password === "")
        print('<br><p style = "color:red;"><b>campo password non compilato</b></p>');
    
    else
    {
        $sql = "SELECT * FROM utenti WHERE utenti.email = '$email' AND utenti.password = '$password'";
        $riga = mysqli_query($connessione, $sql);
    
        if (mysqli_num_rows($riga) > 0)    
            print('<br><p style = "color:green;"><b>login effettuato con successo</b></p>');
    
        else print('<br><p style = "color:red;"><b>email e/o password errata</b></p>');        
    }
}
?>