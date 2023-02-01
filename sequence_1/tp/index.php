<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes sincères salutations</title>
</head>
<body>
    <form method="POST" action="reponse.php">
        <fieldset>
            <legend>Identité</legend>
            <input type="text" name="prenom" id="prenom" placeholder="saisissez votre prénom">
            <input type="text" name="nom" id="nom" placeholder="saisissez votre nom">
            <input type="text" name="titre" id="titre" placeholder="saisissez votre titre / surnom">
            <select name="race" id="race">
                <option name='race' value="humain" selected>Humain</option>
                <option name='race' value="elfe">Elfe</option>
                <option name='race' value="orc">Orque</option>
            </select>
            <input type="radio" name="rank" id="roturier" value="roturier" checked> roture
            <input type="radio" name="rank" id="noble" value="noble"> noblesse
            <input type="radio" name="rank" id="royal" value="royal"> Royauté
        </fieldset>
        <fieldset>
            <legend>Classe(s) du personnage</legend>
            <input type="checkbox" name="class" value='priest' id="priest"> Prêtre
            <input type="checkbox" name="class" value='warrior' id="warrior"> Guerrier
            <input type="checkbox" name="class" value='rogue' id="rogue"> Voleur
            <input type="checkbox" name="class" value='mage' id="mage">  Mage
        </fieldset>
        <button id="btn_salutation">Dit bonjour</button>
    </form>
</body>
</html>
