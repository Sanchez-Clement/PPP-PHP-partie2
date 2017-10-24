<?php
/**
 *
 */
class Bus extends Vehicule
{
    protected $Etages;
    public function __construct($Immatriculation, $Color, $Etages)
    {
        parent::__construct($Immatriculation, $Color);
        $this->setEtages($Etages);
    }

    public function getEtages()
    {
        return $this->Etages;
    }
    public function setEtages($Etages)
    {
        $this->Etages = $Etages;
    }
  
}
