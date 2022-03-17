<!DOCTYPE html>
<html>
<head>
    <style>
        input.login_field, select
        {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit]
        {
            width: 100%;
            background-color: rgb(0, 150, 255);
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <title>

    </title>
</head>
<body>
    <form method="POST" action="second.php">
    <input type="text" class="login_field" id="uname" name="username" placeholder="Your username..">
    <input type="password" class="login_field" id="pword" name="password" placeholder="Your password..">
    <input type="submit" value="Submit">
</body>
<footer>

</footer>
</html>