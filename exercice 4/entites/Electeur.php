<?php
/**
 *
 */
class Electeur extends Personne
{
    protected $bureau_vote;
    protected $vote = "non";

    public function __construct($nom, $prenom, $bureau)
    {
        parent::__construct($nom, $prenom);
        $this->setBureau($bureau);
    }

    public function Avote()
    {
        $this->vote = "oui";
    }

    public function getBureau()
    {
        return $this->bureau_vote;
    }
    public function setBureau($bureau)
    {
        if (is_string($bureau)) {
            $this->bureau_vote = $bureau;
        }
    }
}
