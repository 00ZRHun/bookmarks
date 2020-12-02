<?php


    function db_connect() {
        $hn = "localhost";
        $un = "root";
        $pw = "";
        $db = "bookmarks";

        // $conn = new mysqli('$hn', '$un', '$pw', '$db');
        $result = new mysqli($hn, $un, $pw, $db);
        // $result = $conn->connect_error;

        // if($conn->connect_error) {
        if(!$result) {
            // echo 'Could not connect to database server';
            echo 'casd';
        }
        /* if($result) {
            throw new Exception('Could not connect to database server');
        } */ else {
            // return $result;
            // echo "Good to GO";
        }
        return $result;
    }

?>