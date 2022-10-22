<!-- script login -->
<?php

require_once('config.php'); 

$email = $connessione->real_escape_string($_POST['email']); 
$password = $connessione->real_escape_string($_POST['password']);

$sql = "select * from utenti where utenti.email='$email' and utenti.password='$password'";
$riga = mysqli_query($connessione, $sql);

if (mysqli_num_rows($riga)>0)
{
    header("location: index.php");
}
?>