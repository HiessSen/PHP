<div class='carteObjet'>
    <p class="titreCard"><?=$produit->titre?></p>
    <img src="images/produits/<?=$produit->image?>" alt = "produit dont l'alt est en dur">
    <p><?=$produit->prix?>€</p>
    <p><?=$produit->marque?></p>
    <a href="index.php?page=produit&id=<?=$produit->id?>">Plus d'info</a>
<a href="index.php?page=utilisateur&id=<?=$produit->createur->id?>"><?=$produit->createur->prenom?></a></p>
</div>  