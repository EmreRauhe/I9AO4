<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function printArray($item, $key){
            echo "<br>$key" . ": " . "<i> $item <i>";
        }
        $playlist = array(
            array("genre" => "Hiphop", "auteur" => "John Williams", "Titel" => "My Girl"),
            array("genre" => "Jazz", "auteur" => "John Coltrane", "Titel" => "New York"),
            array("genre" => "Hiphop", "auteur" => "Shakira", "Titel" => "Obsession"),
        );
        $playlist[3] = array("genre" => "Latin", "auteur" => "Ceatano Veloso", "titel" => "Cafe Atlantico");
        array_walk_recursive($playlist, "printArray");
        $array1 = implode("|", $playlist[0]);
        echo "<br>Track 0: ", $array1;
        $array2 = implode("|", $playlist[1]);
        echo "<br>Track 1: ", $array2;
        $array3 = implode("|", $playlist[2]);
        echo "<br>Track 2: ", $array3;
        $array4 = implode("|", $playlist[3]);
        echo "<br>Track 3: ", $array4;
    ?>
</body>
</html>