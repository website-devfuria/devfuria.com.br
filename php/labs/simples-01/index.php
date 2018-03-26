<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php require "../inc-head.php" ?>
    </head>
    <body>
        <?php require "../inc-jumbo.php" ?>

        <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    
                    <form action="index-action.php" method="post">
                        <div class="form-group">
                            <label for="ex1">Name</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="text-center">
                            <input type="submit" value="Submit me!" class="btn btn-default"/>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

    </body>
</html>
