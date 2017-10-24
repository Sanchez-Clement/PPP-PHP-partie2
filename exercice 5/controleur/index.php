<?php
function chargerClasse($classname)
{
    require "entites/" . $classname.'.php';
};
spl_autoload_register('chargerClasse');
$bus1 = new Bus ("AH-303-LG","Blue",2);
$voiture1 = new Voiture ("FG-666-LL","Black",5);

require "vue/index.php";
