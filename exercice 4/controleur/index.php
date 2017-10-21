<?php
function chargerClasse($classname)
{
    require "entites/" . $classname.'.php';
};
spl_autoload_register('chargerClasse');
$client1 = new Client("jean", "paul", "31 rue Voltaire");
$electeur1 = new Electeur("jean","paul","Ecole jean Jaures");
var_dump($electeur1);

$test = $client1->getCoordonnees();

require "vue/index.php";
