<?php
    // tableau simple : 

    $tableau[0] = 2023;
    $tableau[1] = "DEVWEB-18-S2";
    $tableau[] = 11.12;
    // tableau à 2 dimensions : 
    $tab[0][0] = 12;
    $tab[0][1] = "tv";
    $tab[1][0] = 1245.678;
    $tab[1][1] = "bye";
    // tableau associatif : 
    $toto["Nom"] = "le nom de famille de Toto...";
    $toto["Age"] = 12;
    $toto["Adresse"] = "22 rue des bois fleuri";
    
    function parcourirTableau($tableau1){
        $i = 0;
        while($i<3){
            echo $tableau1[$i].', ';
            $i++;   
        }
    }
    function parcourirTab($tab1){
        for($i=0 ; $i<2 ; $i++){
            for($j=0 ; $j<2 ; $j++){
                if($j<1 || $i<1){
                    echo $tab1[$i][$j]. ' - ';
                }else{
                    echo  $tab1[$i][$j];
                }
            }
        }
    }
    function parcourirToto($toto1){
        foreach($toto1 as $case => $reponse){
            if($case!='Adresse'){
                echo $case . ' : ' . $reponse . ' - ';
            }else{
                echo $case . ' : ' . $reponse;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP seq1 seance1 serie2 exo1</title>
</head>
<body>
    <p><?=parcourirTableau($tableau)?></p>
    <p><?=parcourirTab($tab)?></p>
    <p><?=parcourirToto($toto)?></p>
</body>
</html>