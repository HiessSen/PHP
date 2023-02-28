<?php
  class TagDB{
    static public function listerTags() :Reponse   
    {
      try{
      $stmt = Database::getInstance()->query("SELECT * FROM tag;");
      $resultat = $stmt->fetchAll();
      $tags = new ArrayObject();
      foreach($resultat as $key => $value){
        $tag = new Tag($value['id'],$value['libelle']);
        $tags->append($tag);
      }
      return new Reponse($tags);
      }
      catch(PDOException $e)
      {
        return new Reponse(new ArrayObject(),$e);
      }
    }

    static public function lireTag(int $pId):reponse
    {
      if(!is_numeric($pId) || $pId<=0)
      return new Reponse(new ArrayObject());

      try{
        $stmt = Database::getInstance()->query('SELECT * FROM TAG WHERE id='.$pId.';');
        $value = $stmt->fetch();
        if($value !=false){
          $tag = new Tag($value['id'],$value['libelle']);
          $resultat = new ArrayObject();
          $resultat->append($tag);
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

    static public function creerTag($pData):bool
    {
      if (!(isset($pData['libelle'])&&(strlen($pData['libelle'])>5)))
        return false;
      try
      {
        $stmt = Database::getInstance()->prepare("INSERT INTO TAG (libelle)values(:libelle);"); 
        $stmt->bindValue(':libelle',$pData['libelle']);
        return $stmt->execute();
      }catch (PDOException $e){
        echo $e->getMessage();
        return false;
      }
    }
    static public function lesProduits(int $pId):reponse
    {
      if(!is_numeric($pId) || $pId<=0)
      return new Reponse(new ArrayObject());
      // select * from produit, tag, produittag
      // WHERE tag.id=1
      // AND
      // produit.id = produittag.produitId
      // AND
      // tag.id = produittag.tagId;
      try{
        $stmt = Database::getInstance()->query('SELECT * FROM TAG, PRODUIT, produitTag WHERE tag.id='.$pId.' AND produit.id = produittag.produitId AND tag.id = produittag.tagId;');
        $value = $stmt->fetch();
        $resultat = new ArrayObject();
        foreach($values as $value)
        {
          $produit = new Produit();
          $tag = new Tag($value['id'],$value['libelle']);
          $resultat->append($tag);
        }
          return new Reponse($resultat);
      } 
      catch(PDOException $e)
      {
        return  new Reponse(new ArrayObject(),$e);
      }
    }

  }
?>