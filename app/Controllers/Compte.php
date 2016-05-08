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
	
	private $userSQL;
    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
	$this->userSQL = new UserSQL();
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
		
		if (isset($_POST['submit'])) {
				$login = $_POST['login'];
				$email = $_POST['email'];
				$password = $_POST['password'];
		}
		
		if (!$error) {
			$postdata = array(
							'login' => $login,
							'email' => $email,
							'password' => $password );
							
			
			EntityManager::update($postdata);
			//$data['resultat'] = $resultat;
			echo 'Modification terminée';
		 }
	   
	   
        View::renderTemplate('header', $data);
		View::render('Compte/gestionProfil', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * Define Subpage page title and load template files
     */
    public function subPage()
    {
       /* $data['title'] = $this->language->get('subpageText');
        $data['welcomeMessage'] = $this->language->get('subpageMessage');*/

        View::renderTemplate('header', $data);
        View::render('Welcome/SubPage', $data);
        View::renderTemplate('footer', $data);
    }
}
