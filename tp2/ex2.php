<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mois = [
        "Janvier" => 31,
        "Février" => 28,
        "Mars" => 31,
        "Avril" => 30,
        "Mai" => 31,
        "Juin" => 30,
        "Juillet" => 31,
        "Août" => 31,
        "Septembre" => 30,
        "Octobre" => 31,
        "Novembre" => 30,
        "Décembre" => 31
        ];

        echo "<table>";
        echo "<tr><th>Numéro</th><th>Mois</th><th>Nombre de jours</th></tr>";

        $numero = 1;

        foreach ($mois as $nom => $jours) {
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>$nom</td>";
            echo "<td>$jours</td>";
            echo "</tr>";
            $numero++;
        }

        echo "</table>";
    ?>
</body>
</html>