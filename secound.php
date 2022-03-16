<?php
    $user=$_POST['username'];
    $pass=$_POST['password'];
    setcookie('user', $user, time() + 86400 * 30, '/');
    setcookie('password', $pass, time() + (86400 * 30), "/");
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