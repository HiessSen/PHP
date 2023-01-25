<?php
    function afficherLesNombres($max){
        $reponse = '';
        for($i=2 ; $i<=$max ; $i= $i+2){
            if($i<$max){
                $reponse = $i.'-';
            }else{
                $reponse = $i;
            }
            
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
    afficherLesNombres($_GET['nombre']);
    ?>
</body>
</html>