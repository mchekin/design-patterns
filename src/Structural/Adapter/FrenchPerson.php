<?php
/**
 * Date: 11/18/2017
 * Time: 11:34 AM
 */

namespace Patterns\Structural\Adapter;


class FrenchPerson
{
    protected $prenom;
    protected $nomDeFamille;

    public function __construct(string $prenom, string $nomDeFamille)
    {
        $this->prenom = $prenom;
        $this->nomDeFamille = $nomDeFamille;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return string
     */
    public function getNomDeFamille()
    {
        return $this->nomDeFamille;
    }
}