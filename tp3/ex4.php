<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $contenu= file_get_contents('message.txt');
        $contenu=strtoupper($contenu);
        file_put_contents("message.txt", $contenu);
        echo "Le fichier a été mis à jour avec succès !";
    ?>
</body>
</html>