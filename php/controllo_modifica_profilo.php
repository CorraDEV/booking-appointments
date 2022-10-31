<!-- script modifica profilo -->
<?php    
    if(isset($_POST['salva_modifiche'])) //controllo tasto "submit" premuto//
    {
        require_once('config.php'); 

        $nome_modificato = $_POST['nome'];
        $cognome_modificato = $_POST['cognome'];
        $password_modificata = $_POST['password'];
        $email_modificata = $_POST['email'];

        $id = $_SESSION['id'];

        if($nome_modificato === "" || $cognome_modificato === "" || $password_modificata === "") //controllo campi vuoti//
            print('<br><p style = "color: red; font-weight: bold"><b>Hai lasciato uno o più campi vuoti</b></p>');
        
        else if(!filter_var($email_modificata, FILTER_VALIDATE_EMAIL))
            print('<br><p style = "color: red; font-weight: bold"><b>Email non valida</b></p>');
        
        else
        {
            $sql = "SELECT * FROM utenti WHERE utenti.email = '$email_modificata' AND utenti.id != '$id'";
            $riga = mysqli_query($connessione, $sql);    
                
            if (mysqli_num_rows($riga) > 0) //controllo email già utilizzata// 
                print('<br><p style = "color:red; font-weight: bold"><b>Questa email è già stata utilizzata</b></p>');
        
            else
            {
                $sql = "UPDATE utenti SET utenti.nome = '$nome_modificato', utenti.cognome = '$cognome_modificato', utenti.email = '$email_modificata', utenti.password = '$password_modificata' WHERE utenti.id = '$id'"; 
                $riga = mysqli_query($connessione, $sql);
                    
                $_SESSION['nome'] = $nome_modificato;
                $_SESSION['cognome'] = $cognome_modificato;
                $_SESSION['email'] = $email_modificata;
                $_SESSION['password'] = $password_modificata;
                    
                print('<br><p style = "color: green; font-weight: bold"><b>Modifica avvenuta con successo</b></p>');    
            }
        }
    }
?>