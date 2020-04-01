<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="dobbel1.php" method="post">
    <input type="submit" value="Gooi de dobbelstenen">
</form>
    <?php
        $randomNumbers = array( rand(1, 6), rand(1, 6), rand(1, 6), rand(1, 6), rand(1, 6));
        echo "<br>dobbelsteen1: ", $randomNumbers[0];
        echo "<br>dobbelsteen2: ", $randomNumbers[1];
        echo "<br>dobbelsteen3: ", $randomNumbers[2];
        echo "<br>dobbelsteen4: ", $randomNumbers[3];
        echo "<br>dobbelsteen5: ", $randomNumbers[4];
    ?>

</body>
</html>