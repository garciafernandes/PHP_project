<?php

/**
*
* Test
*
* This class was generated by a script. Please be careful changing it.
* Regenerate it will erase all changes!
*/

namespace App\Models\Tables;

use Helpers\DB\Entity;

class Test extends Entity {
    public $toto;     // int
    public $titi;     // datetime

    public function __construct(
        $toto = "",
        $titi = "",
    $id = false) {
        parent::__construct($id);

        $this->toto = $toto;
        $this->titi = $titi;
    }
}
?>