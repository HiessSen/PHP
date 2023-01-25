<?php
$x = 5;
$y = 10;
$message = "";
if($x>$y){
    $message = "x est plus grand que y";
}else{
    $message = "y est plus grand que x";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro exo 3</title>
</head>
<body>
    <?=$message?>
</body>
</html>