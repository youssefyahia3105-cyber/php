<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $pays_population = [
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
        ];
        echo "<table>";
        echo"<tr><th>pays</th><th>population</th></tr>";
        foreach($pays_population as $key => $value){
            if($value>=20000000){
                echo"<tr><td>$key</td><td>$value</td></tr>";
                echo"</table>";
            }
        }
    ?>
</body>
</html>