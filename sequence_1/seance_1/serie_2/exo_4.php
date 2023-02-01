<?php
    $individus = [
        [
            'Nom'=>'Senouci',
            'Prenom'=>'Ilan',
            'Age'=>30,
            'Nationalité'=>'Algerien',
        ],
        [
            'Nom'=>'Bernard',
            'Prenom'=>'James',
            'Age'=>24,
            'Nationalité'=>'Nantais',
        ],
        [
            'Nom'=>'Desvaux',
            'Prenom'=>'Brendon',
            'Age'=>28,
            'Nationalité'=>'Francais',
        ],
        [
        'Nom'=>'Fernandes',
        'Prenom'=>'Antoine',
        'Age'=>21,
        'Nationalité'=>'Portugais',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP seqence 1 seance 1 serie 2 exo 4</title>
</head>
<body>
    <h2>Les 3 mousquetaires + d'artagnan ma gueule</h2>
        <?php
            foreach($individus as $individu){
        ?>
        <ul>
            <?php
                foreach($individu as $individuDetail){
                // var_dump($individualitéMaGueule);
            ?>
                <li><?=$individuDetail?></li>
            <?php
            }?>
        </ul>
        <?php
        }
        ?>
        
</body>
</html>