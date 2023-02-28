<?php
  function affichertags()
  {
    // Début de la mise en cache
    ob_start();
    // Récuperation de la liste des produits    
    $reponse = TagDB::listerTags();
    if($reponse->isSuccessfull()){
        // L' appel à TagDB::lister() n'a pas proviqué d'erreur
        $tags = $reponse->getData();
        // Récuperation des tags. Contient 'false' si aucune donnée
        if($tags)
        foreach($tags as $tag)
        {
            include 'views/cardTag.php';
        }else{
          
      include 'views/tagInexistant.php';
        }
    }else{
        // L' appel à TagDB::lister() a proviqué une erreur
        include 'views/afficherException.php';
    }
    $content = ob_get_clean();
    // Fin de la mise en cache et affichage du Layout avec la View
    include 'views/layout.php';
  }
  function afficherTagUnique($pId)
  {
  // Début de la mise en cache
    ob_start();
    // Récupération du produit
    $reponse = TagDB::lireTag($pId);
    if ($reponse->isSuccessfull())
    // l'appel à CategorieDB::lire() n'a pas provoqué d'erreur
      {
        if($reponse->isDataFound())
        {
          $tag = $reponse->getData()[0];
      // récupération des données: contient false si aucune donnée
    
        include 'views/tagUnique.php';
        }
          else
        include 'views/tagInexistant.php';
      }
      else
      // l'appel à TagDB::lire() a  provoqué une erreur
      include 'views/afficherException.php';
    $content = ob_get_clean();
    // fin mise en cache et affichage du layout avec la vue
    include 'views/layout.php';
  }
  function ajouterTag()
  {
  // Début de la mise en cache
  ob_start();
  if(count($_POST)==0){
    $_SESSION['codesecret']=password_hash((time()+566655545), PASSWORD_DEFAULT);
    include 'views/formulaireAjoutTag.php';
  }else{
    if(isset($_POST['codesecret']) && $_POST['codesecret']==$_SESSION['codesecret']) // Accès licite
    {
      $resultat = TagDB::creerTag($_POST);
      if ($resultat)
        include 'views/tagAjoute.php';
      else
      {
        $utilisateurs = TagDB::listerTags()->getData();
        include 'views/formulaireAjoutTag.php';
      }
    }else
    {
      echo "C'est un corbeau decedé";
    }
  }
  $content = ob_get_clean();
  // fin mise en cache et affichage du layout avec la vue
  include 'views/layout.php';
  }
  function afficherUnTag( )
  {
    // Début de la mise en cache
    ob_start();
    // Récuperation de la liste des produits    
    $reponse = TagDB::listerTags();
    if($reponse->isSuccessfull()){
        // L' appel à TagDB::lister() n'a pas proviqué d'erreur
        $tags = $reponse->getData();
        // Récuperation des tags. Contient 'false' si aucune donnée
        if($tags)
        foreach($tags as $tag)
        {
            include 'views/cardTag.php';
        }else{
          
      include 'views/tagInexistant.php';
        }
    }else{
        // L' appel à TagDB::lister() a proviqué une erreur
        include 'views/afficherException.php';
    }
    $content = ob_get_clean();
    // Fin de la mise en cache et affichage du Layout avec la View
    include 'views/layout.php';
  }
?>
