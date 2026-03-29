<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $voyageur=[["prenom"=>"julien" ,"nom"=>"martin" ,"ville"=>"paris"],
        ["prenom"=>"marc" ,"nom"=>"durand" ,"ville"=>"lille"],
        ["prenom"=>"marie" ,"nom"=>"dubois" ,"ville"=>"marseille"],
        ["prenom"=> "julie","nom"=>"dupont" ,"ville"=>"grenoble"]];

        function sauvegarderCsv(array $voyageur):void{
            $fichier=fopen('voyageur.csv','w');
            foreach($voyageur as $v){
                fputcsv($fichier,$v["prenom"],$v["nom"],$v["ville"]);
            }
            fclose($fichier);
        }

        sauvegarderCsv($voyageur);

        $fichier=fopen('voyageur.csv','r');
        echo "<table border='1'>";
        while(($ligne=fgetcsv($fichier))!=false){
            echo "<tr>";
            foreach($ligne as $cellule){
                echo"<td>".$cellule."</td>";
            }
            echo"</tr>";
        }
        echo"</table>";
        fclose($fichier);
    ?>
</body>
</html>