<?php
    $tableauDeFilms = [
        [
            "titre" => "The Shawshank Redemption",
            "réalisateur" => "Frank Darabont",
            "année" => 1995,
            "note" => 4.5,
        ],
        [
            "titre" => "The Godfather",
            "réalisateur" => "Francis Ford Coppola",
            "année" => 1972,
            "note" => 4.5,
        ],
        [
            "titre" => "The Dark Knight",
            "réalisateur" => "Christopher Nolan",
            "année" => 2008,
            "note" => 4.5,
        ],
        [
            "titre" => "The Lord of the Rings : The Return of the King",
            "réalisateur" => "Peter Jackson",
            "année" => 2003,
            "note" => 4.5,
        ],
        [
            "titre" => "Pulp Fiction",
            "réalisateur" => "Quentin Tarantino",
            "année" => 1994,
            "note" => 4.5,
        ],
    ];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP seqence 1 seance 1 serie 2 exo 5</title>
</head>
<body>
    <h1>Liste de films</h1>
        <?php
            foreach($tableauDeFilms as $films){
                $titre = $films["titre"];
                $real = $films["réalisateur"];
                $sortie = $films["année"];
                $note = $films["note"];
        ?>
        <ul>
            <li>Titre : <?=$titre?></li>
            <li>Réalisé par : <?=$real?></li>
            <li>Sorti en : <?=$sortie?></li>
            <li>Note : <?=$note?></li>
        </ul>  
        <?php
            }
        ?>
            
   
</body>
</html>