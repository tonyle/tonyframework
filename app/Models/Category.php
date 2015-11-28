<?php
/**
 * Category model
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

namespace Models;

use Models\BaseModel;

class Category extends BaseModel
{
	/**
     * Create a new instance of the database helper.
     */
    function __construct()
    {
    	parent::__construct('category');
    }
}