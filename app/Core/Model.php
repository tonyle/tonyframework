<?php
/**
 * Model - the base model
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

namespace Core;

use Helpers\Database;

/**
 * Base model class all other models will extend from this base.
 */
abstract class Model
{
    /**
     * Hold the database connection.
     *
     * @var object
     */
    protected $db;

    /**
     * Create a new instance of the database helper.
     */
    public function __construct()
    {
        /** connect to PDO here. */
        $this->db = Database::get();
    }
}
