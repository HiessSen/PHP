<?php
  require_once 'config/config.php';
  require_once 'repository/database.php';
  require_once 'repository/reponse.php';
  require_once 'repository/produitDB.php';
  require_once 'models/produit.php';
  require_once 'controller/produitController.php';
  require_once 'repository/utilisateurDB.php';
  require_once 'models/utilisateur.php';
  require_once 'controller/utilisateurController.php';
  require_once 'repository/tagDB.php';
  require_once 'models/tag.php';
  require_once 'controller/tagController.php';

  session_start();

  // include 'views/header.php';
  if (isset($_GET['page'])){
    $page = $_GET['page'];
  }else{
    $page = 'produit';
  }
    switch($page) {
      case 'produit':
        if (isset($_GET['id']))
            afficherProduitUnique($_GET['id']);
          else
            listerProduits();
            break;
      case 'tag':
        if (isset($_GET['id']))
          afficherTagUnique($_GET['id']);
        else
          afficherTags();
        break; 
      case 'utilisateur':
        if (isset($_GET['id']))
              afficherUtilisateurUnique($_GET['id']);
          else
              afficherUtilisateurs();
          break;
          case 'formulaireAjoutProduit':
            ajouterproduit();
            break;
          case 'formulaireAjoutTag':
            ajouterTag();
            break;
      default: afficherProduits();
      break;
    }
  include 'views/footer.php';
?>