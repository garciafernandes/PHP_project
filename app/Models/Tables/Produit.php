<?php

/**
*
* Produit
*
* This class was generated by a script. Please be careful changing it.
* Regenerate it will erase all changes!
*/

namespace App\Models\Tables;

use Helpers\DB\Entity;

class Produit extends Entity {
    public $nom;     // varchar(255)
    public $description;     // varchar(255)
    public $annee;     // datetime
    public $prix;     // float
    public $langue;     // varchar(255)
    public $sous-categorie_id;     // int
    public $sous-categorie_categorie_id;     // int
    public $panier_id;     // int
    public $panier_user_id;     // int
    public $user_id;     // int

    public function __construct(
        $nom = "",
        $description = "",
        $annee = "",
        $prix = "",
        $langue = "",
        $sous-categorie_id = "",
        $sous-categorie_categorie_id = "",
        $panier_id = "",
        $panier_user_id = "",
        $user_id = "",
    $id = false) {
        parent::__construct($id);

        $this->nom = $nom;
        $this->description = $description;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->langue = $langue;
        $this->sous-categorie_id = $sous-categorie_id;
        $this->sous-categorie_categorie_id = $sous-categorie_categorie_id;
        $this->panier_id = $panier_id;
        $this->panier_user_id = $panier_user_id;
        $this->user_id = $user_id;
    }
}
?>
