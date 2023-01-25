<?php
    function afficherPuissancesDeDeux($max){
        $reponse = '';
        $i=0;
        while($i<=$max){
            if($i<$max){
                $reponse = '2 puissance '.$i.' égal '.pow(2,$i).' - ';
            }else{
                $reponse = '2 puissance '.$i.' égal '.pow(2,$i);
            }
            $i++;
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
        afficherPuissancesDeDeux(16);
    ?>
</body>
</html>