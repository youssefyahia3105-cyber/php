<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $panier=["pomme","Banane","Cerise"];
        array_push($panier, "orange");
        print_r($panier);
        array_unshift($panier, "fraise");
        print_r($panier);
        array_pop($panier);
        print_r($panier);
        rsort($panier);
        print_r($panier);
        $notes = [12, 18, 5, 14, 20, 9, 11];
        $somme = array_sum($notes);
        echo "Somme des notes : " . $somme . "<br>";
        $nombre = count($notes);
        $moyenne = $somme / $nombre;
        echo "Moyenne : " . $moyenne . "<br>";
        echo "Nombre de notes : " . $nombre . "<br>";
        sort($notes);
        echo "Notes triées : ";
        print_r($notes);
    
    ?>
</body>
</html>