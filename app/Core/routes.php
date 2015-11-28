<?php
/**
 * Routes - all standard routes are defined here.
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

/** Create alias for Router. */
use Core\Router;
use Helpers\Hooks;

/** Define routes. */
Router::any('', 'Controllers\Welcome@index');
Router::any('subpage/(:all)-(:num).html', 'Controllers\Welcome@subPage');

Router::any('admin', 'Modules\Admin\Controllers\Auth@index');
Router::any('admin/index', 'Modules\Admin\Controllers\Auth@index');

/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');

/** If no route found. */
Router::error('Core\Error@index');

/** Turn on old style routing. */
Router::$fallback = false;

/** Execute matched routes. */
Router::dispatch();
