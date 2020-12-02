<?php
    require_once("data_valid_functions.php");
    
    // create short variable name
    $email = $_POST['email'];
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];
    $passwd2 = $_POST['passwd2'];

    // print post;
    // print_r($_POST);
    
    // $_POST['email'] =>(if got value)=> true / false
    /* isset($_POST['email']) {

    } */

    if(!filled_out($_POST)) {
        // echo "something missing";
        echo "You have not filled the form out correctly - please go back and try again";
    }else if(!valid_email($email)) {
        echo "That is not a valid email - please go back and try again";
    } else if($passwd != $passwd2) {
        echo "The password you entered do not match - Please go back and try again";
    } else if((strlen($passwd) < 6) || (strlen($passwd) > 16)) {
        echo "Your password must be between 6 and 16 character - Please go back and try again";
    } 

    $conn = new mysqli('localhost', 'root', '', 'bookmarks');
    if($conn->connect_error)    die("Fatal Error");
    // else                        echo "Good to GO" ;

    $query = "SELECT * FROM user WHERE username='$username'";
    $result = $conn->query($query);
    if(!$result)    die('Could not execute query');
    // else            echo "Good to GO" ;

    if($result->num_rows>0) {
        echo "That username is taken - go back and choose another username";
    } else {
        $passwd = sha1($passwd);
        $query = "INSERT INTO user(email, username, passwd) VALUES ('$email', '$username', '$passwd')";
        $result = $conn->query($query);
    }

    if(!$result) {
        echo "Could not register you in database - please try again later";
    } else {
        echo "<br>";
        echo "Your registration was successful. Go to members page to start up your bookmarks!";
        echo "<br><a href='http://localhost/bookmarks/login.php'>Go to members page</a>";
    }
    
?>