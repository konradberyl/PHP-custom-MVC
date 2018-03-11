<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User list</title>
        <?php require 'views/main/basicCss.php'; ?>

    </head>

    <body>
        <div class="container fullsize">
                <?php require 'views/main/menu.php'; ?>
            <div class="content">
            

                <div class="row">
                    <div class="col-sm-6 col-sm-offset-4">
                        <h1>Available users: </h1>
                        <ul>
                            <?php foreach ($users as $user) { ?>
                                <li><?php echo $user['name']; ?></li>
                            <?php }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php require 'views/main/basicJs.php'; ?>
            </div>
              <?php require 'views/main/footer.php'; ?>
    </body>
</div>

</html>