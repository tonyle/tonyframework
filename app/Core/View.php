<?php
/**
 * View - load template pages
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

namespace Core;

/**
 * View class to load template and views files.
 */
class View
{
    /**
     * @var array Array of HTTP headers
     */
    private static $headers = array();

    /**
     * @var string layout name
     */
    public static $layout = null;

    /**
     * @var string current controller
     */
    public static $controller;

    /**
     * @var string current action
     */
    public static $action;

    /**
     * Include template file.
     *
     * @param  string $path  path to file from views folder
     * @param  array  $data  array of data
     * @param  array  $error array of errors
     */
    public static function render($path, $data = false, $error = false)
    {
        self::sendHeaders();

        require TONY."app/views/$path.php";
    }

    /**
     * Include template file.
     *
     * @param  string  $path  path to file from Modules folder
     * @param  array $data  array of data
     * @param  array $error array of errors
     */
    public static function renderModule($path, $data = false, $error = false)
    {
        self::sendHeaders();
        require TONY."app/Modules/Admin/views/$path.php";
    }

    /**
     * Return absolute layout.
     *
     * @param  array   $data  array of data
     * @param  string  $custom path to template folder
     */
    public static function setData($data = false, $custom = TEMPLATE)
    {
        self::sendHeaders();

        $path = LAYOUT;

        if (self::$layout != null) {
            $path = self::$layout;
        }
        require TONY."app/templates/$custom/$path.php";
    }

    /**
     * Return absolute path to selected template directory.
     *
     * @param  string  $path  path to file from views folder
     * @param  array   $data  array of data
     * @param  string  $custom path to template folder
     */
    public static function renderTemplate($path, $data = false, $custom = TEMPLATE)
    {
        self::sendHeaders();
        require TONY."app/templates/$custom/$path.php";
    }

    /**
     * Add HTTP header to headers array.
     *
     * @param  string  $header HTTP header text
     */
    public function addHeader($header)
    {
        self::$headers[] = $header;
    }

    /**
     * Add an array with headers to the view.
     *
     * @param array $headers
     */
    public function addHeaders(array $headers = array())
    {
        self::$headers = array_merge(self::$headers, $headers);
    }

    /**
     * Send headers
     */
    public static function sendHeaders()
    {
        if (!headers_sent()) {
            foreach (self::$headers as $header) {
                header($header, true);
            }
        }
    }
}
