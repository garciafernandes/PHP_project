<?php
/**
 * Welcome controller
 *
 * @author David Carr - dave@novaframework.com
 * @version 3.0
 */

namespace App\Controllers;

use App\Models;
use App\Models\Queries\UserSQL;
use App\Models\Tables\User;
use App\Models\Queries\AdressSQL;
use App\Models\Table\Adress;
use Core\View;
use Core\Controller;
use Helpers\Session;
use	Helpers\DB\EntityManager;
use	Helpers\DB\Entity;
/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Compte extends Controller
{
	
	
    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Welcome');
    }
	
	/* Voir compte */ 
	public function voirCompte() 
	{
		/*$produitsql = new ProduitSQL();
		$result = $produitsql->prepareFindAll()->execute();
		$data['result'] = $result; */
		
		
		View::renderTemplate('header', $data);
		View::render('Compte/voirCompte', $data);
        View::renderTemplate('footer', $data);
	}

    /**
     * Gestion profil
     */
    public function gestionProfil()
    {
		
		$user = new UserSQL();
		
	if (isset($_POST['submit'])) {
				$login = $_POST['login'];
				$email = $_POST['email'];
				$password = $_POST['password'];
		}
		
		if (!$error) {
			$postdata = array(
							'login' => $login,
							'email' => $email,
							'password' => $password 
						);
							
			EntityManager::getInstance()->save($user);
			echo 'Modification terminée';
		 }
	   
        View::renderTemplate('header', $data);
		View::render('Compte/gestionProfil', $data);
        View::renderTemplate('footer', $data);
    }

   
    public function gestionAdresses()
    {
		$sql = new AdressSQL();	
		
		$data['adress'] = $sql->prepareFindWithCondition('user_id  = ( SELECT id FROM user )')->execute();
		$adress = $data['adress'];

        View::renderTemplate('header', $data);
        View::render('Compte/gestionAdresses', $data);
        View::renderTemplate('footer', $data);
    }
	
	public function modifierAdresse() 
	{
		
		
		View::renderTemplate('header', $data);
        View::render('Compte/modifierAdresse', $data);
        View::renderTemplate('footer', $data);
	}
}
