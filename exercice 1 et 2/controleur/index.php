<?php
function chargerClasse($classname)
{
  require "entites/" . $classname.'.php';

};
spl_autoload_register('chargerClasse');
require "modele/connexion_sql.php";
require "modele/ChatManager.php";

$manager = new ChatManager($bdd);

if(!empty($_POST['sexe'])) {
  $sexe = $_POST['sexe'];
}
if(!empty($_POST['color'])) {
  $color = $_POST['color'];
}
if(!empty($_POST['age'])) {
  $age = $_POST['age'];
}
if(!empty($_POST['nom'])) {
  $nom = $_POST['nom'];
}
if (isset($nom,$sexe,$age,$color)) {


$chat = new Chat($nom,$age,constant($sexe),Chat::couleur[$color]);

$manager->addChat($chat);

} else {
  echo "des champs sont manquants";
}
$donnees= $manager->getListChat();
require "vue/index.php"

?>
