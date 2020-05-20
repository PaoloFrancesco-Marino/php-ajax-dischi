<?php // Import databese dischi 
    include __DIR__ . '/partials/database_dischi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Ajax - Dischi</title>

    <!-- Main CSS -->
    <link rel="stylesheet" href="dist/css/main.css">
</head>

<body>

        <ul>
            <?php foreach($album as $data) { ?>    
                <li>
                    <img src="<?php echo $data['poster']?>" alt="poster">
                </li>
                <li>
                    <?php echo $data['title']?>
                </li>
                <li>
                    <?php echo $data['author']?>
                </li>
                <li>
                    <?php echo $data['year']?>
                </li>
            <?php } ?>    
        </ul>


        <!-- Main JS -->
        <script src="dist/js/main.js"></script>
</body>
</html>