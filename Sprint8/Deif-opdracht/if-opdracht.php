<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $gewerkteuren = 45;
        $uurtarief = 15.00;
        $bonus = 100.00;
        $bruto = $gewerkteuren * $uurtarief;
        if($gewerkteuren <= 40){
            $belasting = 0.40*$bruto;
            echo "Uw basissalaris is: € " .$bruto;
            echo "<br>Uw belasting is: € " . 0.40*$bruto;
            echo "<br>Uw nettobedrag is: € ". ($bruto - $belasting);
            echo "<br>je belesting is 40%";
        }
        elseif($gewerkteuren > 40)
        {
            $belasting = 0.45*$bruto;
            echo "Uw basissalaris is: € " ,$bruto;
            echo "<br>Uw basissalaris plus bonus is: € ", $bruto + $bonus;
            echo "<br>Uw belasting is: € " . 0.45*$bruto;
            echo "<br>Uw nettobedrag is: € ". ($bruto - $belasting);
            echo "<br>je belesting is 45%";
        }


    ?>
</body>
</html>