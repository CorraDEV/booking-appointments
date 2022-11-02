<!-- script prenotazione -->
<?php
if(isset($_POST['prenota'])) //controllo tasto "submit" premuto//
{
    require_once('config.php'); 

    $data_appuntamento = $_POST['data_appuntamento']; 

    $sql = "SELECT * FROM prenotazioni WHERE DATA_APPUNTAMENTO = '$data_appuntamento'";
    $riga = mysqli_query($connessione, $sql);    
        
    if (mysqli_num_rows($riga) > 0) //controllo appuntamento libero// 
        print('<br><p style = "color:red; font-weight: bold"><b>Non è possibile prenotare in questa data e ora specifica</b></p>');
    
    else
    {
        $sql = "SELECT * FROM appuntamenti_disponibili WHERE DATA_DISPONIBILE = '$data_appuntamento'";
        $riga = mysqli_query($connessione, $sql);

        if (mysqli_num_rows($riga) === 0) //controllo inserimento valore da ispeziona elemento di chrome// 
            print('<br><p style = "color:red; font-weight: bold"><b>Data e ora inesistenti</b></p>');    
        
        else //inserimento valori nella tabella prenotazioni
        {
            $session_email = $_SESSION['email'];
            $sql = "INSERT INTO prenotazioni (EMAIL, DATA_APPUNTAMENTO) VALUES ('$session_email', '$data_appuntamento')";
            $riga = mysqli_query($connessione, $sql);    
            print('<br><p style = "color:green; font-weight: bold"><b>il suo appuntamento è stato fissato con successo</b></p>');     
        }
    }
}        
?>