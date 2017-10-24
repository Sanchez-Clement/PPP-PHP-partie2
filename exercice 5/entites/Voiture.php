<?php
/**
 *
 */
class Voiture extends Vehicule
{
    protected $Portes;


    public function __construct($Immatriculation, $Color, $Portes)
    {
        parent::__construct($Immatriculation, $Color);
        $this->setPortes($Portes);
    }



    public function getPortes()
    {
        return $this->Portes;
    }
    public function setPortes($Portes)
    {
        if (is_int($Portes)) {
            $this->Portes = $Portes;
        }
    }
}
