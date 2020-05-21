<?php 

include __DIR__ . '/database_dischi.php';

header('Content-Type: application/json');

echo json_encode($album);

?>