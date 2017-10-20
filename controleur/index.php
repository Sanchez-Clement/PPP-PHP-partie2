<?php
function chargerClasse($classname)
{
  require "entites/" . $classname.'.php';

};
spl_autoload_register('chargerClasse');
require "modele/connexion_sql.php";
require "modele/ChatManager.php";

$manager = new ChatManager($bdd);

if(isset($_POST['sexe'])) {
  $sexe = $_POST['sexe'];
}
if(isset($_POST['color'])) {
  $color = $_POST['color'];
}
if(isset($_POST['age'])) {
  $age = $_POST['age'];
}
if(isset($_POST['nom'])) {
  $nom = $_POST['nom'];
}
if (isset(($_POST['nom']))) {


$chat = new Chat($nom,$age,constant($sexe),Chat::couleur[$color]);

$manager->addChat($chat);

}
$donnees= $manager->getListChat();
require "vue/index.php"

?>
