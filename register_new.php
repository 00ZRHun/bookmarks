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
  
    
?>