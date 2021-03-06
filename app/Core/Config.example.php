<?php
/**
 * Config - an example for setting up system settings.
 * When you are done editing, rename this file to 'Config.php'.
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

namespace Core;

use Helpers\Session;

/**
 * Configuration constants and options.
 */
class Config
{
    /**
     * Executed as soon as the framework runs.
     */
    public function __construct()
    {
        /**
         * Turn on output buffering.
         */
        ob_start();

        /**
         * Define relative base path.
         */
        define('DIR', '/');

        /**
         * Set default controller and method for legacy calls.
         */
        define('DEFAULT_CONTROLLER', 'welcome');
        define('DEFAULT_METHOD', 'index');

        /**
         * Set the default template.
         */
        define('TEMPLATE', 'default');

        /**
         * Set a default language.
         */
        define('LANGUAGE_CODE', 'en');

        //database details ONLY NEEDED IF USING A DATABASE

        /**
         * Database engine default is mysql.
         */
        define('DB_TYPE', 'mysql');

        /**
         * Database host default is localhost.
         */
        define('DB_HOST', 'localhost');

        /**
         * Database name.
         */
        define('DB_NAME', 'dbname');

        /**
         * Database username.
         */
        define('DB_USER', 'root');

        /**
         * Database password.
         */
        define('DB_PASS', 'password');

        /**
         * PREFER to be used in database calls default is app_
         */
        define('PREFIX', 'app_');

        /**
         * Set prefix for sessions.
         */
        define('SESSION_PREFIX', 'app_');

        /**
         * Optional create a constant for the name of the site.
         */
        define('SITETITLE', 'V1.0');

        /**
         * Optionall set a site email address.
         */
        //define('SITEEMAIL', '');

        /**
         * Turn on custom error handling.
         */
        set_exception_handler('Core\Logger::ExceptionHandler');
        set_error_handler('Core\Logger::ErrorHandler');

        /**
         * Set timezone.
         */
        date_default_timezone_set('Europe/London');

        /**
         * Start sessions.
         */
        Session::init();
    }
}
