<?php
    function afficherPuissancesDeDeux($max){
        $reponse = '';
        for($i=0 ; $i<=$max ; $i++){
            if($i<$max){
                $reponse = '2 puissance '.$i.' égal '.pow(2,$i).' - ';
            }else{
                $reponse = '2 puissance '.$i.' égal '.pow(2,$i);
            }
            // var_dump ($reponse);
            echo $reponse;
        }
    }
        // $reponse = ($i.'-');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    afficherPuissancesDeDeux($_GET['nombre']);
    ?>
</body>
</html>