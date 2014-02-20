<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Form de exemplo com radios</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="form-action.php" method="post">
            <p>
                <input type="radio" name="band-rock" value="beatles"/>The Beatles
                <input type="radio" name="band-rock" value="led-zeppelin"/> Led Zeppelin
                <input type="radio" name="band-rock" value="pink-floyd"/>Pink Floy
            </p>
            <p>
                <input type="button" id="btnSubmit" value="Submit me!" />
                <input type="button" id="btnLoad" value="Load!" />
            </p>
        </form>
        <script type="text/javascript" src="radios-v1.js"></script>
    </body>
</html>
