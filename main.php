<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }
        li, td {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }
        hr {
            color: #3333cc;
            width: 300;
            text-align: left;
        }
        /* width= 300;
            text-align= left; */

        a{
            color: #000000;
        }
    </style>
</head>
<body>
    <!-- <img src="bookmark.gif" alt="PHPbookmark logo" border="1" -->
    <img src="data:image/jpeg;base64,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" alt="PHPbookmark logo" border="1"
        align="left" valign="bottom" height="55" width="57">
    <img src="" alt="">
    <h1>PHPbookmark</h1>
    <hr>
    <ol>
        <li>Store your bookmarks online with us!</li>
        <li>See what other users use!</li>
        <li>Share your favorite links with others!</li>
    </ol>

    <p><a href="register_form.php">NOT a member?</a></p>
    <form method="post" action="member.php">
        <table bgcolor="#cccccc">
            <tr>
                <td colspan="2">Member log in here:</td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="log in">
                </td>
            </tr>
            <tr>
                <td colspan="2"><a href="forgot_form.php">Forgot your password?</a></td>
            </tr>
        </table>
    </form>
        
</body>
</html>