<!-- script login -->
<?php
if(isset($_POST['login'])) //controllo tasto "submit" premuto//
{
    require_once('config.php'); 

    $email = $_POST['email']; 
    $password = $_POST['password'];

    $sql = "SELECT * FROM utenti WHERE utenti.email = '$email' AND utenti.password = '$password'";
    $riga = mysqli_query($connessione, $sql);

    if (mysqli_num_rows($riga)>0)    
        print('<br><p style = "color:green;"><b>login effettuato con successo</b></p>');

    else print('<br><p style = "color:red;"><b>email e/o password errata</b></p>');
}
?>