<?php

function sommeTableau($pSomme){
    $somme = 0;
    for ($i = 0; $i<count($pSomme); $i++) {
        $somme += $pSomme[$i];
    }
    return $somme;
}
function moyenneTableau($pMoyenne){
    $moyenne = sommeTableau($pMoyenne)/count($pMoyenne);
    return $moyenne;
}
function ecartTypeTableau($pEcartType){
    // $moyenneAuCarré = moyenneTableau($pEcartType)*moyenneTableau($pEcartType);
    $ecartsALaMoyenne = [];
    $sommeDesEcartsALaMoyenneAuCarre = 0;
    for($i=0 ; $i<count($pEcartType) ; $i++){
        $ecartsALaMoyenne[$i] = $pEcartType[$i] - moyenneTableau($pEcartType);
        $ecartsALaMoyenneAuCarre = $ecartsALaMoyenne[$i] * $ecartsALaMoyenne[$i];
        $sommeDesEcartsALaMoyenneAuCarre += $ecartsALaMoyenneAuCarre;
    }
    $sommeDesEcartsALaMoyenneAuCarreDivisé = $sommeDesEcartsALaMoyenneAuCarre/7; 
    $ecartsType = sqrt($sommeDesEcartsALaMoyenneAuCarreDivisé);
    return $ecartsType;
}

$tableauNombre = [0, 1, 2, 3, 4, 5, 6];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP seqence 1 seance 1 serie 2 exo 2</title>
</head>

<body>
    <p>La somme des valeurs du tableau est de : <?= sommeTableau($tableauNombre) ?></p>
    <p>La moyenne des valeurs du tableau est de : <?= moyenneTableau($tableauNombre) ?></p>
    <p>L'écart type est de : <?= ecartTypeTableau($tableauNombre) ?></p>
</body>

</html>