<?php
$color = isset($_GET['color']) ? $_GET['color'] : '000000';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U1</title>
</head>
<body style="background:<?= $color ?>;">
    <h1>
        <a href="http://localhost/php/php1/015/3.php">Black</a>
        <form action="http://localhost/php/php1/015/3.php" method="get">
            <input type="color" name="color">
            <button type="submit">GO</button>
        </form>
    </h1>
</body>
</html>