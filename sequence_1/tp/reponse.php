<?Php
include'fonction.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réponse ma gueule</title>
</head>
<body>
    <h2>Le garde ne reconnu pas <?=($_POST['prenom']!='' && $_POST['nom']!='')?$_POST['prenom'] . ' ' . $_POST['nom']:'l\'individu incconu'?> 
    alors qu'ils'approchait des portes</h2>
    <h2>On le surnommait <?= ($_POST['titre']!='')?$_POST['titre']:', sa ferocité n\'est plus à prouver.'?>, sa ferocité n'était plus à prouver.</h2>
    <h2><?=$messageRace?></h2>
    <h2><?=$messageRank?></h2>
    <h2><?=$messageClass?></h2>
</body>
</html>