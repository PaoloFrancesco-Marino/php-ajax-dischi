<?php // Import database album 
    include __DIR__ . '/partials/database_dischi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Ajax - Dischi</title>

    <!-- Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"> 
    <!-- Main CSS -->
    <link rel="stylesheet" href="dist/css/main.css">
</head>

<body>

    <!-- Header  -->
    <header>
        <div class="general_container">
            <nav class="navbar">
                <div class="sx">
                    <img src="dist/img/spotify-logo.png" alt="logo spotify">
                    <a href="index.php">Home</a>
                </div>
                <div class="dx">
                    <input type="text" placeholder="Iserisci una Ricerca">
                    <button>Invia</button>
                </div>
            </nav>
        </div><!-- ./General Container  -->
    </header><!-- ./Header  -->

    <!-- main -->
    <main>  
        <div class="general_container">
            <div class="album_content">

            </div>
        </div><!-- ./General Container  -->
    </main><!-- ./main -->


    <!-- Handlebars Template -->
    <script id="album-template" type="text/x-handlebars-template">
        <div class="box_album">
            <ul>
                <li>
                    <img src="{{ poster }}" alt="poster">
                </li>
                <li>
                    <h3>{{ title }}</h3>
                </li>
                <li>
                    <h4>{{ author }}</h4>
                </li>
                <li>
                    <h4>{{ year }} </h4>
                </li> 
            </ul>
        </div>
    </script><!-- ./Handlebars Template -->


    <!-- Main JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> <!-- Handlebars -->
    <script src="dist/js/main.js"></script> <!-- JS -->
</body>
</html>