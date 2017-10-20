<?php if (isset($donnees)) {
foreach ($donnees as $key => $value) {
?>
<li><?php echo $value['nom'] ?></li>
<?php
}
} ?>

<form class="" action="index.php" method="post">
  <label for="sexe">Sexe</label>
  <select class="" name="sexe">
    <option value="Chat::MALE">Male</option>
    <option value="Chat::FEMELLE">Femelle</option>
  </select>
  <label for="color">Couleur</label>
  <select class="" name="color">
  <option value="NOIRE">Noir</option>
  <option value="BLANC">Blanc</option>
  </select>
  <label for="age">Age</label>
  <input type="number" name="age">
  <label for="nom">Nom</label>
  <input type="text" name="nom">
  <input type="submit" name="" value="Créer">
</form>
