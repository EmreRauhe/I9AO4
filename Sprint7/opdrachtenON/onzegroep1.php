<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $groepsgenoten = array(
            array("<br>0309620" => "<br>Studentnummer: 0320952</br>" . "<br>Naam: Emre Kara</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Enschede</br>"),
            array("<br>0322086" => "<br>Studentnummer: 0322086</br>" . "<br>Naam: Ahmed Boutaleb Charki</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Enschede</br>"),
            array("<br>0320287" => "<br>Studentnummer: 0320287</br>" . "<br>Naam: Dylan Leppink</br>" . "<br>Leeftijd: 16</br>" . "<br>Adres: Haaksbergen</br>"),
        );

    function printarray($groepsgenoten)
    {
        echo $groepsgenoten;
    }
    
    array_walk_recursive($groepsgenoten[array_rand($groepsgenoten,1)],'printarray');
    ?>
</body>
</html>