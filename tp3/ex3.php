<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function nettoyer(string $ch):string{
            return htmlspecialchars(trim($ch));
        }

        function calculerSejour(string $dateDep, string $dateArr, float $prixNuit): float{
            return abs((strtotime($dateArr)-strtotime($dateDep))*$prixNuit);
        }

        $arrivee = " 2026-07-01 ";
        $depart = " 2026-07-15 ";
        $prixParNuit = 80;

        $arriveePropre=nettoyer($arrivee);
        $departPropre=nettoyer($depart);
        $total=calculerSejour($departPropre,$arriveePropre,$prixParNuit);
        
        echo "Votre séjour du $arriveePropre au $departPropre coûtera: $total €";
    ?>
</body>
</html>