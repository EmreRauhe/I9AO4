<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [];
        $array[0] = "een";
        $array[1] = "twee";
        $array[2] = 3;
        $array[3] = "vier";

        echo "Stap 3 <br>"; 
        array_push($array, 5);
        print_r($array);
        echo "<br>";
        var_dump($array[4]);
        array_pop($array);
        echo "<br>";
        print_r($array);
        echo "<br>";
        array_unshift($array, "");
        print_r($array);
        array_shift($array);
        echo "<br>";
        print_r($array);
        array_shift($array);
        echo "<br>";
        print_r($array);
        array_shift($array);
        echo "<br>";
        print_r($array);
    ?>
</body>
</html>