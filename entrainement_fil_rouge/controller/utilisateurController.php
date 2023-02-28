<?php
    function afficherUtilisateurs()
    {
        // Début de la mise en cache
        ob_start();
        // Récuperation de la liste des utilisateurs    
        $reponse = UtilisateurDB::listerUtilisateur();
        if($reponse->isSuccessfull()){
            // L' appel à utilisateurDB::lister() n'a pas proviqué d'erreur
            $utilisateurs = $reponse->getData();
            // Récuperation des utilisateurs. Contient 'false' si aucune donnée
            foreach($utilisateurs as $utilisateur)
            {
                include 'views/cardUtilisateur.php';
            }
        }else{
            // L' appel à utilisateurDB::lister() a proviqué une erreur
            include 'views/afficherException.php';
        }
        $content = ob_get_clean();
        // Fin de la mise en cache et affichage du Layout avec la View
        include 'views/layout.php';
    }
    function afficherUtilisateurUnique($pId)
    {
        // Début de la mise en cache
         ob_start();
          // Récupération du produit
         $reponse = utilisateurDB::lireUtilisateur($pId);
         if ($reponse->isSuccessfull())
          // l'appel à UtilisateurDB::lire() n'a pas provoqué d'erreur
           {
             if($reponse->isDataFound())
             {
               $utilisateur = $reponse->getData()[0];
           // récupération des données: contient false si aucune donnée
          
             include 'views/utilisateurUnique.php';
             }
               else
             include 'views/utilisateurInexistant.php';
           }
           else
           // l'appel à ProduitDB::lire() a  provoqué une erreur
           include 'views/afficherException.php';
         $content = ob_get_clean();
          // fin mise en cache et affichage du layout avec la vue
         include 'views/layout.php';
     }
?>
