<?php
    session_start();
    if(!isset($_SESSION['email']))
    {
        $_SESSION['error_message'] = 'Per poter scrivere una recensione devi prima aver effettuato il login';
        header('Location: http://localhost:8080/booking-appointments/');
    }
?>

<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrivi recensione</title>
    <link rel="icon" href="img/booking.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina   
            window.history.replaceState(null, null, window.location.href);
    
    </script>
</head>

<body class = "bg-info">
    <h1 class = "text-center text-white mt-5">SCRIVI UNA RECENSIONE</h1>
    
    <div class="d-flex w-100 justify-content-center">
        
        <form class="d-flex flex-column gap-2 w-25 mt-5 align-items-center" action="" method="POST">
            <label class="align-self-start" style="font-size: 1.25em;" for="commento_recensione"><b>Commento:</b></label>
            <textarea id="commento_recensione" name="commento_recensione" class="w-100 border border-2 border-dark" style="resize: none; height: 12em; outline: 0;"></textarea>
            <div id="caratteri_mancanti" name="caratteri_mancanti">1000/1000</div>
            <label class="w-25 align-self-end text-size-25" style="font-size: 1.25em;" for="voto_recensione"><b>Voto:</b></label>
            <select class = "w-25 form-select shadow-none align-self-end" id="voto_recensione" name="voto_recensione">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <input type="submit" class="btn btn-primary w-100 mt-3" value="Invia recensione" name="invia_recensione">
            <?php
                include('php/controllo_scrivi_recensione.php');     
            ?>
        </form>
    
    </div>
    
    <script>
        //seleziono gli elementi html tramite il loro id
        const commento_recensione = document.getElementById('commento_recensione');
        const testo_caratteri_mancanti = document.getElementById('caratteri_mancanti');
        
        //dichiaro limite massimo caratteri nel commento
        const massimo_caratteri_commento = 1000;

        //funzione che tiene conto dei caratteri rimanenti
        commento_recensione.addEventListener('input', () => {
    
            const caratteri_rimanenti = massimo_caratteri_commento - commento_recensione.value.length;
            
            //se mancano meno del 10% dei caratteri (cioè meno 100) la scritta diventerà rossa altrimenti la lasci col colore di default
            const color = caratteri_rimanenti < massimo_caratteri_commento * 0.1 ? 'red' : null; 
            
            //assegno la seguente stringa all'elemento avente per id 'testo_caratteri_mancanti' 
            testo_caratteri_mancanti.textContent = `${caratteri_rimanenti}/${massimo_caratteri_commento}`; 
            
            //assegno il colore all'elemento avente per id 'testo_caratteri_mancanti' 
            testo_caratteri_mancanti.style.color = color;
        });
    </script>
    <!-- Bootstrap -->
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity = "sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin = "anonymous">
    </script>
</body>

</html>