<!DOCTYPE html>
<html>
    <head>
        <style>
            #fisk {color: red;}
            #img1 
            {
                display: block;
                margin-left: -20px;
                margin-right: -20px;
                margin-top: -20px;
                color: blue;
            }
            .buttonHome
            {
                display: inline;
                padding: 15px 25px;
                font-size: 15px;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                outline: none;
                color: white;
                background-color: rgb(0, 150, 255);
                border: none;
                border-radius: 15px;
            }
            .buttonHome:hover {background-color: blue;}
            .buttonHome:active 
            {
                background-color: rgb(0, 150, 255);
            }

        </style>
        <title>
            Anton er min
        </title>
    </head>
    <body>
    <img id="img1" src="image.php" alt="">
        <?php
            echo '<h1 id = "fisk">Hello World!</h1>';
            $gamer = '5';
        ?>
        <a href="login.php" class="buttonHome">Accept cookies</a>
    </body>
    <footer>

    </footer>
</html>
