<?php
/**
 * Welcome controller
 *
 * @author David Carr - dave@novaframework.com
 * @version 3.0
 */

namespace App\Controllers;

use App\Models;
use App\Models\Queries\ProduitSQL;
use App\Models\Tables\Produit;
use Core\View;
use Core\Controller;
use Helpers\Session;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Welcome extends Controller
{
   
    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Welcome');
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
		$produitsql = new ProduitSQL();
		$result = $produitsql->prepareFindAll()->execute();
		$data['result'] = $result; 
		
        View::renderTemplate('header', $data);
		View::render('Welcome/Welcome', $data);
        View::renderTemplate('footer', $data);
    }

    /**
     * Define Subpage page title and load template files
     */
    public function subPage()
    {
        $data['title'] = $this->language->get('subpageText');
        $data['welcomeMessage'] = $this->language->get('subpageMessage');

        View::renderTemplate('header', $data);
        View::render('Welcome/SubPage', $data);
        View::renderTemplate('footer', $data);
    }
}
