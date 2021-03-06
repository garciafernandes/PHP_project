<?php

/**
*
* Film
*
* This class was generated by a script. Please be careful changing it.
* Regenerate it will erase all changes!
*/

namespace App\Models\Tables;

use Helpers\DB\Entity;

class Film extends Entity {
    public $acteur;     // varchar(45)
    public $realisateur;     // varchar(45)
    public $duree;     // time
    public $synopsis;     // varchar(45)
    public $produit_id;     // int
    public $produit_souscategorie_id;     // int
    public $produit_souscategorie_categorie_id;     // int

    public function __construct(
        $acteur = "",
        $realisateur = "",
        $duree = "",
        $synopsis = "",
        $produit_id = "",
        $produit_souscategorie_id = "",
        $produit_souscategorie_categorie_id = "",
    $id = false) {
        parent::__construct($id);

        $this->acteur = $acteur;
        $this->realisateur = $realisateur;
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->produit_id = $produit_id;
        $this->produit_souscategorie_id = $produit_souscategorie_id;
        $this->produit_souscategorie_categorie_id = $produit_souscategorie_categorie_id;
    }
}
?>
