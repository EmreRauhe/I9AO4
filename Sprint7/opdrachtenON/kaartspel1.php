<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $vormen = array("ruiten", "harten", "klaveren", "schoppen");
    $waarden = array("boer", "vrouw", "heer", "1", "2", "3", "4", "5". "6", "7", "8", "9", "10");
    $kaart = rand(0, 3);
    $kaart1 = rand(0, 12);
    echo "<img src='kaarten/$vormen[$kaart]_$waarden[$kaart1].svg'>";
    ?>
</body>
</html>
