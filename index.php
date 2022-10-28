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
        #logout a
        {
            display: none;
            padding: 0.75em;
        }
        
        #login a,
        #registrazione a,
        #prenotazione a
        {            
            display: inline-block;
            padding: 1em;
            position: relative;
        }    
        
        #login:hover,
        #registrazione:hover,
        #prenotazione:hover
        {
            background-color: red;
            cursor: pointer; 
        }
        
        #login:hover+#logout a        
        {  
            display: inline-block;
            position: absolute;
            background-color: rgb(13, 110, 253);
        }

        #logout a:hover
        {
            display: inline-block;
            position: absolute;
            background-color: red;
        }
    </style>

    <script>
        
        if (window.history.replaceState) //evita di ricevere messaggio errore dopo refresh pagina
            window.history.replaceState(null, null, window.location.href);
        
    </script>
</head>

<body class="bg-info">
    <nav style="position: relative;" class="d-flex bg-primary">        
        <ul class="d-flex list-unstyled ms-auto mt-auto mb-auto">
            <?php 
                session_start();
                if(isset($_SESSION['email'])){                    
                    print('<li style="color: white; font-weight: bold"><ul class="list-unstyled"><li id="login"><a style="color: white; font-weight: bold" class="text-decoration-none">');                    
                    print($_SESSION['email']);
                    print('</a></li><li id="logout"><a style="color: white; font-weight: bold" class="text-decoration-none" href="php/logout.php">Logout</a></ul></li>');
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
            print('<span style="position: absolute; right: 1em; color: red; font-weight: bold">');
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