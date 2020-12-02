<?php
    require_once "db_functions.php";
    require_once "output_functions.php";
    require_once "user_auth_functions.php";
    
    session_start();

    if(isset($_POST['username']) && isset($_POST['passwd'])) {
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];
        
        $conn = db_connect();

        // $query = "SELECT * FROM user WHERE username='$username' AND passwd=sha1('$password')";
        // echo "passwd->" . $passwd;
        $passwd = sha1("$passwd");
        // echo "passwd->" . $passwd;

        $query = "SELECT * FROM user WHERE username='$username' AND passwd='$passwd'";
        // $query = "SELECT * FROM user WHERE username='$username' AND passwd='$password'";
        
        $result = $conn->query($query);

        if(!$result->num_rows>0) {
            $_SESSION['valid_user'] = $username;
        }
        if(!$result) {
            echo "Could not log you in.";
            echo "Query -> $query";
        } /* else {
            echo "Good to GO";
            echo "Query -> $query";
        } */
        
        do_html_header('Home');
        check_valid_user();
        
        // give new options
        display_user_menu();
        do_html_footer();
    }
?>