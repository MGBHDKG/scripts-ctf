<?php 
    $file = file_get_contents("./index.php");
    echo "<pre>" . htmlspecialchars($file) . "</pre>";