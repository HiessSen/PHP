<?php
  class UtilisateurDB{

    static public function listerUtilisateurs() :Reponse   
    {
      try{
      $stmt = Database::getInstance()->query("select * from UTILISATEUR;");
      $resultat = $stmt->fetchAll();
      $utilisateurs = new ArrayObject();
      foreach($resultat as $value){
        $utilisateur = new Utilisateur($value['id'],$value['nom'],$value['prenom']);
        $utilisateurs->append($utilisateur);
      }
      return new Reponse($utilisateurs);
      }
      catch(PDOException $e)
      {
        return new Reponse(new ArrayObject(),$e);
      }
  
    }
    static public function lireUtilisateur(int $pId):Reponse
    {
      if(!is_numeric($pId) || $pId<=0)
        return new Reponse(new ArrayObject());

        try{
          $stmt = Database::getInstance()->query('SELECT * FROM UTILISATEUR WHERE id='.$pId.';');
          $value = $stmt->fetch();
          if($value !=false){
            $utilisateur = new Utilisateur($value['id'],$value['nom'],$value['prenom']);
            $resultat = new ArrayObject();
            $resultat->append($utilisateur);
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
  }
?>
