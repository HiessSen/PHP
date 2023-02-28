<?php
  class ProduitDB{

    static public function listerProduits() :Reponse   
    {
      try{
        $stmt = Database::getInstance()->query("SELECT *, utilisateur.id as 'utilisateurId', produit.id as 'produitId' FROM produit,utilisateur WHERE utilisateur.id = produit.idUtilisateurProvisoire;");
        $resultat = $stmt->fetchAll();
        $produits = new ArrayObject();
        foreach($resultat as $value){
          $utilisateur = new Utilisateur($value['utilisateurId'],$value['nom'],$value['prenom']);
          $produit = new Produit($value['produitId'],$value['titre'],$value['sousTitre'],$value['image'],$value['prix'],$value['marque'],$value['description'], $utilisateur);
          $produits->append($produit);
        }
        return new Reponse($produits);
      }
      catch(PDOException $e)
      {
        return new Reponse(new ArrayObject(),$e);
      }
    }
    static public function lireproduit(int $pId):Reponse
    {
      if(!is_numeric($pId) || $pId<=0)
        return new Reponse(new ArrayObject());
      try{
        $stmt = Database::getInstance()->query("SELECT *,utilisateur.id as 'utilisateurId', produit.id as 'produitId' FROM produit,utilisateur WHERE utilisateur.id = produit.idUtilisateurProvisoire AND produit.ID=".$pId.";");
        $value = $stmt->fetch();
        if($value !=false){
          $utilisateur = new Utilisateur($value['utilisateurId'],$value['nom'],$value['prenom']);
          $produit =new Produit($value['produitId'],$value['titre'],$value['sousTitre'],$value['image'],$value['prix'],$value['marque'],$value['description'], $utilisateur);
          $resultat = new ArrayObject();
          $resultat->append($produit);
          return new Reponse($resultat);
        }else{
          return new Reponse(new ArrayObject());
        }
      } 
      catch(PDOException $e)
      {
          return  new Reponse(new ArrayObject(),$e);
      }
    }
    static public function creerProduit($pData):bool
    {
      if (!(isset($pData['titre'])&&(strlen($pData['titre'])>5)))
        return false;
      if (!(isset($pData['soustitre'])&&(strlen($pData['soustitre'])>10)))
        return false;
      if (!(isset($pData['image'])&&(strlen($pData['image'])>5)))
        return false;
      if (!(isset($pData['prix'])&&is_numeric($pData['prix'])))
        return false;
      if (!(isset($pData['marque'])&&(strlen($pData['marque'])>10)))
        return false;
      if (!(isset($pData['description'])&&(strlen($pData['description'])>15)))
        return false;
      if (!(isset($pData['idUtilisateur'])&&is_numeric($pData['idUtilisateur'])))
        return false;
  //     array (size=7)
  // 'titre' => string 'Le Boss des Boss' (length=16)
  // 'image' => string 'couilles/mqdefault.jpg' (length=22)
  // 'soustitre' => string 'sgtesgr' (length=7)
  // 'marque' => string 'dsgdshf' (length=7)
  // 'prix' => string '32.23' (length=5)
  // 'description' => string 'bwdfb' (length=5)
  // 'idUtilisateur' => string '1' (length=1)
  // var_dump($pData);
      try
      {
        $stmt = Database::getInstance()->prepare("INSERT INTO produit (titre, soustitre, image, prix, marque, description, idUtilisateurProvisoire)values(:titre,:soustitre,:image,:prix,:marque,:description,:idUtilisateur);"); 
        $stmt->bindValue(':titre',$pData['titre']);
        $stmt->bindValue(':soustitre',$pData['soustitre']);
        $stmt->bindValue(':image',$pData['image']);
        $stmt->bindValue(':prix',$pData['prix']);
        $stmt->bindValue(':marque',$pData['marque']);
        $stmt->bindValue(':description',$pData['description']);
        $stmt->bindValue(':idUtilisateur',$pData['idUtilisateur']);
        return $stmt->execute();
      }catch (PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }
  }
?>
