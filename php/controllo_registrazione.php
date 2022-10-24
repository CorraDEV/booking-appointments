<!-- script registrazione -->
<?php    
    if(isset($_POST['sign_up'])) //controllo tasto "submit" premuto//
    {
        require_once('config.php'); 

        $email = $_POST['email']; 
        $password = $_POST['password'];

        if($email === "" && $password === "") //controllo campi vuoti//
            print('<br><p style = "color: red;"><b>Hai lasciato uno o più campi vuoti</b></p>');
        
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            print('<br><p style = "color: red;"><b>Email non valida</b></p>');        

        else
        {
            $sql = "SELECT * FROM utenti WHERE utenti.email = '$email'";
            $riga = mysqli_query($connessione, $sql);    
            
            if (mysqli_num_rows($riga) > 0) //controllo email già utilizzata// 
                print('<br><p style = "color:red;"><b>Questa email è già stata utilizza</b></p>');
            
            else
            {
                $sql = "INSERT INTO utenti (EMAIL, PASSWORD) VALUES ('$email', '$password')";
                $riga = mysqli_query($connessione, $sql);    
                header("location: ./index.php");
            }
        }
    }
?>