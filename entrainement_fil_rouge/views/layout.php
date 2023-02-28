<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=chrome">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Devanagari&family=Exo+2:wght@300&display=swap" rel="stylesheet">
    <title>Projet fil rouge</title>
</head>
<body>
  <div class="container">
    <header>
    <div id="enTete">
        <img id="logoPrincipal" src="images/logo_principal_hiess_discount.png" alt="Logo de Hiess - Discount">
        <div id="titres">
            <h1 id="titreDuSite">HIESS Discount !</h1>
        </div>
    </div>
    <ul id="navigation">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php?page=formulaireAjoutTag">Catégories</a></li>
        <li><a href="#">Notre séléction</a></li>
        <li><a href="index.php?page=formulaireAjoutProduit">Ajouter un article</a></li>
        <li><a href="#">Tous les articles</a></li>
        <li><a href="#">Abonnement</a></li>
        <li><a href="index.php?page=utilisateur">Mon compte</a></li>
        <li><a href="#">Qui sommes-nous ?</a></li>
    </ul>
    <nav>
        <a href="#">MULTIMEDIA</a>
        <a href="#">SON ET HI-FI</a>
        <a href="#">GAMING</a>
        <a href="#">ORDINATEURS</a>
        <a href="#">SMARTPHONES</a>
        <a href="#">TABLETTES</a>
        <a href="#">ACCESSOIRES</a>
        <a href="#">CONNECTIQUE</a>
    </nav>
    <h2 id="slogan">Dites HIESS ! à vos envies !</h2>
    </header>
    <main>
        <?=$content?>
    </main>
</div>
</body>
</html>