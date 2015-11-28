<?php
/**
 * Auth controller
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

namespace Modules\Admin\Controllers;

use Core\View;
use Core\Controller;


class Auth extends Controller
{

    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Define Index page title and load template files
     */
    public function index()
    {
        $data['title'] = $this->language->get('welcome_text');
        $data['h1'] = 'Dashboard';
        $data['h4'] = 'Overview, stats, chat and more';
        View::setData($data, 'admin');
    }
}
