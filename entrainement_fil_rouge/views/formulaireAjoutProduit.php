<form method="POST">
  <fieldset>
    <h1>Il faut refaire ce formulaire</h1>
    <legend>Ajout d'un produit</legend>
    <input type="text" name="titre" value ="<?=isset($_POST['titre'])?$_POST['titre']:"";?>">
    <input type="text" name="image" placeholder="<?=isset($_POST['image'])?$_POST['image']:"";?>" >
    <textarea name="soustitre" placeholder="<?=isset($_POST['sousTitre'])?$_POST['sousTitre']:"";?>" cols="30" rows="10"></textarea>
    <textarea name="marque" placeholder="marque" cols="30" rows="10" value ="<?=isset($_POST['marque'])?$_POST['marque']:"";?>"></textarea>
    <textarea name="prix" placeholder="prix en euros (chiffres et point)" cols="30" rows="10" value ="<?=isset($_POST['prix'])?$_POST['prix']:"";?>"></textarea>
    <textarea name="description" placeholder="description" cols="30" rows="10" value ="<?=isset($_POST['description'])?$_POST['description']:"";?>"></textarea>
    <select name="idUtilisateur" id="idUtilisateur">
      <?php
      foreach($utilisateurs as $utilisateur):
      ?>
      <option value="<?=$utilisateur->id?>"><?=$utilisateur->prenom?> <?=$utilisateur->nom?></option>
      <?php
      endforeach;
      ?>
    </select>
    <button>Créer</button>
  </fieldset>
  <input type="text" name="codesecret" value="<?=$_SESSION['codesecret'];?>">
</form>