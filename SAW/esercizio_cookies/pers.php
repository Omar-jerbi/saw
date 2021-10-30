<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilepers.css">
    <title>personalizzazione</title>
</head>

<body>
    <form action="setcookie.php" method="post">
        <div class="colors">
            text color: <input type="color" name="c1" id="c1">
            background: <input type="color" name="c2" id="c2" value="#ff0000">
            font: <select name="f" id="f">
                <option value="tnr">times new roman</option>
                <option value="ari">arial</option>
                <option value="geo">georgia</option>
            </select>
        </div>

        <input style="display: block;" type="submit" value="Submit">
    </form>    
</body>
</html>