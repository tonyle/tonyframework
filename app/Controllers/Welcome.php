<?php
/**
 * Welcome controller
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

namespace Controllers;

use Core\View;
use Core\Controller;
use Models\Category;

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
        $this->Category = new Category();
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $data['title'] = $this->language->get('welcome_text');
        $data['welcome_message'] = $this->language->get('welcome_message');
        $data['data'] = $this->Category->select();
        View::setData($data);
    }

    /**
     * Define Subpage page title and load template files
     */
    public function subPage($param, $id)
    {
        $data['title'] = $this->language->get('subpage_text');
        $data['welcome_message'] = $this->language->get('subpage_message')." id: ".$id;

        View::setData($data);
    }
}
