<?php // Import databese dischi 
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
            <img src="dist/img/spotify-logo.png" alt="logo spotify">
        </div><!-- ./General Container  -->
    </header><!-- ./Header  -->

    <!-- main -->
    <main>  
        <div class="general_container">
            <div class="album_content">
                <?php foreach($album as $data) { ?>     
                    <div class="box_album">
                        <ul>
                            <li>
                                <img src="<?php echo $data['poster']?>" alt="poster">
                            </li>
                            <li>
                                <h3><?php echo $data['title']?></h3>
                            </li>
                            <li>
                                <h4><?php echo $data['author']?></h4>
                            </li>
                            <li>
                                <h4><?php echo $data['year']?></h4>
                            </li> 
                        </ul>
                    </div>
                <?php } ?>  
            </div>
        </div><!-- ./General Container  -->
    </main><!-- ./main -->


    


        <!-- Main JS -->
        <script src="dist/js/main.js"></script>
</body>
</html>