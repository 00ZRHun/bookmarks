<?php
    require_once "login.php";
    $conn = new MYSQLI($hn, $un, $pw, $db);
    if($conn->connect_error)  die("Fatal Error");
    // else                        echo "Good To Go";
?>