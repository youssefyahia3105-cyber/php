<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function securiserMdp(string $mdp):string
        {
            return password_hash(trim($mdp),PASSWORD_DEFAULT);
        }

        function authentifier(string $mdp, string $mdp_hash):bool
        {
            if (password_verify($mdp,$mdp_hash)){
                return true;
            }
            return false; 
        }

        $mdp="password123";
        $mdp_hash = securiserMdp($mdp);
        if(authentifier(trim($mdp),$mdp_hash)){
            echo "true";
        }
        else{
            echo"false";
        }












    ?>
</body>
</html>