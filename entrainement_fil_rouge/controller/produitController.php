<?php
    function listerProduits()
    {
        // Début de la mise en cache
        ob_start();
        // Récuperation de la liste des produits    
        $reponse = ProduitDB::listerProduits();
        if($reponse->isSuccessfull()){
            // L' appel à ProduitDB::lister() n'a pas proviqué d'erreur
            $produits = $reponse->getData();
            // Récuperation des produits. Contient 'false' si aucune donnée
            foreach($produits as $produit)
            {
                include 'views/cardProduit.php';
            }
        }else{
            // L' appel à ProduitDB::lister() a proviqué une erreur
            include 'views/afficherException.php';
        }
        $content = ob_get_clean();
        // Fin de la mise en cache et affichage du Layout avec la View
        include 'views/layout.php';
    }
    function afficherProduitUnique($pId)
    {
        // Début de la mise en cache
         ob_start();
          // Récupération du produit
         $reponse = ProduitDB::lireProduit($pId);
         if ($reponse->isSuccessfull())
          // l'appel à ProduitDB::lire() n'a pas provoqué d'erreur
           {
             if($reponse->isDataFound())
             {
               $produit = $reponse->getData()[0];
           // récupération des données: contient false si aucune donnée
          
             include 'views/produitUnique.php';
             }
               else
             include 'views/produitInexistant.php';
           }
           else
           // l'appel à ProduitDB::lire() a  provoqué une erreur
           include 'views/afficherException.php';
         $content = ob_get_clean();
          // fin mise en cache et affichage du layout avec la vue
         include 'views/layout.php';
     }
     function ajouterProduit()
     {
      // Début de la mise en cache
      ob_start();
      if(count($_POST)==0){
        $utilisateurs = UtilisateurDB::listerUtilisateurs()->getData();
        $_SESSION['codesecret']=password_hash((time()+566655545), PASSWORD_DEFAULT);
        include 'views/formulaireAjoutProduit.php';
      }else{
        if(isset($_POST['codesecret']) && $_POST['codesecret']==$_SESSION['codesecret']) // Accès licite
        {
          $resultat = ProduitDB::creerProduit($_POST);
          if ($resultat)
            include 'views/produitAjoute.php';
          else
          {
            $utilisateurs = UtilisateurDB::listerUtilisateurs()->getData();
            include 'views/formulaireAjoutProduit.php';
          }
        }else
        {
          echo "vil pirate je t'ai vu";
        }
      }
      $content = ob_get_clean();
      // fin mise en cache et affichage du layout avec la vue
      include 'views/layout.php';
     }
?>
