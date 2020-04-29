<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metric Conversion</title>
</head>
<body>
    <div id="main-content">
        <h1>Convert Area</h1>
        <form action="" method="post">
            <div class=entry>
                <label for="">From:</label>&nbsp;
                <input type="text" name="from_value" value="">&nbsp;
                <select name="from_unit">
                    <option value="-1">From Unit</option>
                    <option value="inches">Inches</option>
                </select>
            </div>
            <div class=entry>
                <label for="">To:</label>&nbsp;
                <input type="text" name="to_value" value="">&nbsp;
                <select name="to_unit">
                    <option value="-1">To Unit</option>
                    <option value="inches">Inches</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
        <br>
        <a href="../index.php">Return to Menu</a>
    </div>
    

</body>
</html>