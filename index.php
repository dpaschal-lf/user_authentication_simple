<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to the LF TodoList</title>
</head>
<body>
    <header>
<?php
    if(isset($_SESSION['userinfo']))
    {
        //user is logged in
        ?><a href="logout.php">Log Out</a><?php
        echo "Welcome back, ".$_SESSION['userinfo']['display_name'].'!';
    }
    else
    {
        //user is not logged in
        ?><a href="loginform.php">Log In</a><?php
    }
?>
    </header>



</body>
</html>










