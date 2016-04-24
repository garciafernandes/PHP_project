<?php

/**
*
* Bd
*
* This class was generated by a script. Please be careful changing it.
* Regenerate it will erase all changes!
*/

namespace App\Models\Tables;

use Helpers\DB\Entity;

class Bd extends Entity {
    public $resume;     // varchar(45)
    public $auteur;     // varchar(45)
    public $editeur;     // varchar(45)
    public $produit_id;     // int
    public $produit_souscategorie_id;     // int
    public $produit_souscategorie_categorie_id;     // int

    public function __construct(
        $resume = "",
        $auteur = "",
        $editeur = "",
        $produit_id = "",
        $produit_souscategorie_id = "",
        $produit_souscategorie_categorie_id = "",
    $id = false) {
        parent::__construct($id);

        $this->resume = $resume;
        $this->auteur = $auteur;
        $this->editeur = $editeur;
        $this->produit_id = $produit_id;
        $this->produit_souscategorie_id = $produit_souscategorie_id;
        $this->produit_souscategorie_categorie_id = $produit_souscategorie_categorie_id;
    }
}
?>
