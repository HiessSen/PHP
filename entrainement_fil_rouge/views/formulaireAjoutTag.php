<form method="POST">
  <fieldset>
    <h1>Il faut refaire ce formulaire</h1>
    <legend>Ajout d'un produit</legend>
    <input type="text" name="libelle" value ="<?=isset($_POST['libelle'])?$_POST['libelle']:"";?>">
    <button>Créer</button>
  </fieldset>
  <input type="text" name="codesecret" value="<?=$_SESSION['codesecret'];?>">
  <a href="index.php"></a>
</form>