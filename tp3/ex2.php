<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function securiserTexte(string $ch):string{
            return(htmlspecialchars(trim($ch)));
        }

        function appliquerRemise(float $prixInitial, float $pourcentage):float{
            return $prixInitial-($prixInitial*$pourcentage/100);
        }

        $nomSaisi = " Smartphone ";
        $prixBrut = 500;
        $promo = 20;
        echo "le produit ".securiserTexte($nomSaisi)." coute desormais ".appliquerRemise($prixBrut,$promo)."£."
        
    ?>
</body>
</html>