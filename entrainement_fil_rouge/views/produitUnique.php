<div class="grandeCarteUnique">
  <div class="enteteUnique">
    <h3 class="titreUnique"><?=$produit->titre?></h3>
    <p><?=$produit->prix?> €</p>
  </div>
  <div class="corpsUnique">
  <p><?=$produit->sousTitre?></p>
  <img class="imagePrincipale" src="images/produits/<?=$produit->image?>" alt="manette de marque <?=$produit->marque?>">
  <p><?=$produit->marque?></p>
  <p><?=$produit->description?></p>
  </div>
</div>
: