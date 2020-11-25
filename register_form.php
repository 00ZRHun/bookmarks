<?php
    require_once("output_functions.php");
    do_html_header();
?>

    <form method="post" action="register_new.php">
        <table bgcolor="#cccccc">
        <tr>
            <td>Email Address:</td>
            <td><input type="text" name="email" maxlength="100"></td>
        </tr>
        <tr>
            <td>Preferred Username:<br />(max 16 chars):</td>
            <td valign="top"><input type="text" name="username"
                size="16" maxlength="16"></td>
        </tr>
        <tr>
            <td>Password:<br />(between 6 to 16 chars):</td>
            <td valign="top"><input type="password" name="passwd"
                size="16" maxlength="16"></td>
        </tr>
        <tr>
            <td>Confirm password:</td>
            <td><input type="password" name="passwd2"
                size="16" maxlength="16"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Register">
            </td>
        </tr>
        </table>
    </form>

<?php    
    do_html_footer();
?>