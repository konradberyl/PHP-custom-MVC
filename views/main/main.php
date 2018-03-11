<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP MVC</title>
        <?php require 'views/main/basicCss.php'; ?>

    </head>
    <body>
        <div class="container fullsize">
            <?php require 'views/main/menu.php'; ?>
            <div class="content">

                <div class="text-center">

                    <h1>Welcome on the main page!</h1>
                    <h2>This webside is custom implementation of MVC</h2>
                    <h3>Based on PHP</h3>
                </div>

                <div class="flexbox-cards">
                    <div class="first-card"><h1>M</h1></div>
                    <div class="second-card"><h1>V</h1></div>
                    <div class="third-card"><h1>C</h1></div>
                </div>
                <div class="home-img">
                <img src="include/img/php.png">
                </div>

                <?php require 'views/main/basicJs.php'; ?>
            </div>
            <?php require 'views/main/footer.php'; ?>
        </div>

    </body>


</html>