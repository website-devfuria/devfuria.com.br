<?php
$bike = (bool) rand(0, 1) ? "checked" : null;
$car = (bool) rand(0, 1) ? "checked" : null;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Form de exemplo com checkboxes</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">
            <p>
                <input type="checkbox" name="bike" id="bike" value="on" <?php echo $bike; ?>>I have a bike
            </p>
            <p>
                <input type="checkbox" name="car" id="car" value="on" <?php echo $car; ?>>I have a car
            </p>
            <p>
                <input type="submit" value="Submit me!" />
            </p>
        </form>
    </body>
</html>
