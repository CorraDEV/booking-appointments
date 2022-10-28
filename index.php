<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" href="img/booking.png">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">  
    <style>
    /*tutto lo stile sottostante permette al footer di rimanere in basso nella pagina*/     
        html 
        {
            height: 100%;
        }
        
        body
        {
            display: flex;
            flex-direction: column;
            min-height: 100%;
        }
        
        footer
        {
            width: 100%;
            padding: 1em 0;
            margin-top: auto;
        }
        
    /*****************/

    /*stile dei link presenti nella barra di navigazione*/   
        #opzioni_profilo
        {
            position: absolute;
            top: 3.5em;
            display: none;
            flex-direction: column;
            background-color: rgb(13, 110, 253);
        }

        #logout a,
        #modifica_profilo a
        {
            display: inline-block;
            width: 100%;
            padding: 1em;            
        }

        #login a,
        #registrazione a,
        #prenotazione a
        {            
            display: inline-block;
            padding: 1em;
        }    
        
        #login:hover,
        #registrazione:hover,
        #prenotazione:hover
        {
            background-color: red;
            cursor: pointer; 
        }

        #logout:hover,
        #modifica_profilo:hover
        {
            background-color: red;
        }

        #login:hover ~ #opzioni_profilo,
        #opzioni_profilo:hover
        {
            display: flex;
        }
    </style>

    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina
            window.history.replaceState(null, null, window.location.href);
        
    </script>
</head>

<body class="bg-info">
    <nav id="barra_di_navigazione" style="position: relative;" class="d-flex bg-primary">        
        <ul class="d-flex list-unstyled ms-auto mt-auto mb-auto">
            <?php 
                session_start();
                if(isset($_SESSION['email'])){                    
                    print('<li id="login" style="color: white; font-weight: bold"><a style="color: white; font-weight: bold" class="text-decoration-none">');                    
                    print($_SESSION['email']);
                    print('</a></li><div id="opzioni_profilo"><div id="logout"><a style="color: white; font-weight: bold" class="text-decoration-none" href="php/logout.php">Logout</a></div><div id="modifica_profilo"><a style="color: white; font-weight: bold" class="text-decoration-none" href="modifica_profilo.php">Modifica</a></div></div>');
                }
                else print('<li id="login"><a style="color: white; font-weight: bold" class="text-decoration-none" href="login.php">Login</a></li>');
            ?>            
            <li id="registrazione"><a style="color: white; font-weight: bold" class="text-decoration-none" href="registrazione.php">Registrati</a></li>
            <li id="prenotazione">
                <a style="color: white; font-weight: bold" class="text-decoration-none" href="prenotazione.php">Prenota ora</a>
            </li>
        </ul>
    </nav>
    <?php
        if(isset($_SESSION['error_message'])){
            print('<span style="position: absolute; right: 1em; top: 4em; color: red; font-weight: bold">');
            print($_SESSION['error_message']);
            print('</span>');
            unset($_SESSION['error_message']);
        }
    ?>
    <h1 class="text-center text-white mt-5 mb-5">BOOKING SYSTEM</h1>
    <img src="img/immagine_homepage.jpg" style="display: block; width: 40em; height: auto; margin: 0 auto" alt="impossibile da caricare">
    <h2 class="text-center text-white mt-5">Prenotare non è mai stato così facile</h3>
    <footer class="d-flex gap-4 bg-primary text-white"><span style="margin-left: 1em;">&copy;zZMarza</span><span>&copy;omarjab01</span></footer>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>