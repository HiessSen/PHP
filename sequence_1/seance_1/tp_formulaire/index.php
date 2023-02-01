<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TP formulaires PHP</title>
</head>

<body>
    <form method="POST" action="reponse.php">
        <fieldset>
            <select id="sexe" name="sexe">
                <option value="Mr">Monsieur</option>
                <option value="Mme">Madame</option>
            </select>
            <div>   
                <label for="nom">Nom</label>
                <input id="nom" placeholder="Senouci" type="text" name="nom">
            </div>
            <div>   
                <label for="prenom">Prénom</label>
                <input id="prenom" placeholder="Ilan" type="text" name="prenom">
            </div>
            <div>       
                <label for="anneeDeNaissance">Année de naissance</label>
                <input id="anneeDeNaissance" type="text" name="anneeDeNaissance">
            </div>
            <div>     
                <label for="identifiant">Donnez votre identifiant</label>
                <input id="identifiant" placeholder="id" name="identifiant">
            </div>
            <div>
                <label for="password">Mot de passe</label>
                <input id="password" placeholder="Mot de passe" type="password" name="password">
            </div>
            <div class="sexe" required>Sexe :
                <label for="civilite"><input id="homme" type="radio" name="civilite" value="homme">H</label>
                <label for="civilite"><input id="femme" type="radio" name="civilite" value="femme">F</label>
            </div>
            <label for="newbie">
                <input id="newbie" type="checkbox" name="newbie">New en PHP ?
            </label>
            <button>Envoyer les infos</button>
        </fieldset>
    </form>
    
</body>
</html>