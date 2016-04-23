<?php

/**
*
* Musique
*
* This class was generated by a script. Please be careful changing it.
* Regenerate it will erase all changes!
*/

namespace App\Models\Tables;

use Helpers\DB\Entity;

class Musique extends Entity {
    public $artiste;     // varchar(45)
    public $auteur;     // varchar(45)
    public $interprete;     // varchar(45)
    public $produit_id;     // int
    public $produit_sous-categorie_id;     // int
    public $produit_sous-categorie_categorie_id;     // int

    public function __construct(
        $artiste = "",
        $auteur = "",
        $interprete = "",
        $produit_id = "",
        $produit_sous-categorie_id = "",
        $produit_sous-categorie_categorie_id = "",
    $id = false) {
        parent::__construct($id);

        $this->artiste = $artiste;
        $this->auteur = $auteur;
        $this->interprete = $interprete;
        $this->produit_id = $produit_id;
        $this->produit_sous-categorie_id = $produit_sous-categorie_id;
        $this->produit_sous-categorie_categorie_id = $produit_sous-categorie_categorie_id;
    }
}
?>
