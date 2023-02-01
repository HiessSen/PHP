<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TP 1</title>
</head>
<body>
    <h1>Bonjour, <?=strip_tags($_POST['sexe'])?> <?=strip_tags($_POST['nom'])?> <?=strip_tags($_POST['prenom'])?> !</h1>
    <h2>Vous êtes née en <?=strip_tags($_POST['anneeDeNaissance'])?>.</h2>
    <h2>Votre identifiant est <?=strip_tags($_POST['identifiant'])?> et votre mot de passe est: <?=strip_tags($_POST['password'])?>.</h2>
    <h2>Votre genre : <?=isset($_POST['civilite'])?$_POST['civilite']:'il faut choisir'?></h2>
    <h2>Votre niveau en PHP : <?=isset($_POST['newbie'])?'Vous nous avez indiqué être un novice en PHP':'Vous avez indiquez connaitre le langage PHP'?></h2>
</body>
</html>