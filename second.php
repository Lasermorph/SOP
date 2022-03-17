<?php
//Delete user cookie if we login as somebody else
if ((isset($_COOKIE['user']) && isset($_COOKIE['password'])) && (isset($_POST['username']) && isset($_POST['password'])))
{
    setcookie('user', null, -1, '/');
    setcookie('password', null, -1, "/");
}
//if username and password is set put it in a cookie
if (isset($_POST['username']) && isset($_POST['password']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    setcookie('user', $user, time() + 86400 * 30, '/');
    setcookie('password', $pass, time() + (86400 * 30), "/");
    //reload page to make cookies take effect
    echo '<script>document.location.href = "./second.php";</script>';
}
if (!isset($_COOKIE['user']) && !isset($_COOKIE['password']))
{
    echo '<script>document.location.href = "./login.php";</script>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <style>

    </style>
    <title>
        Anton er min
    </title>
</head>
<body>
    <?php
    echo '<h1> Help </h1>';
    echo $_COOKIE['user'] . '<br>';
    echo $_COOKIE['password'];
    ?>
</body>
<footer>

</footer>
</html>