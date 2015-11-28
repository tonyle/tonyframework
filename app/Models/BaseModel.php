<?php
/**
 * Model - the base model
 *
 * @author Tony Le - tonyle.microsoft@gmail.com
 * @version 1.0
 * @date November 28, 2015
 */

namespace Models;

use Core\Model;

/**
 * Base model class all other models will extend from this base.
 */
class BaseModel extends Model
{

    /**
     * Table name
     *
     */
    protected $tableName;

    /**
     * Create a new instance of the database helper.
     */
    public function __construct($tableName)
    {
        parent::__construct();
        $this->tableName = $tableName;
    }

    /**
     * Select table.
     */
    public function select()
    {
        return $this->_db->select("SELECT * FROM ".PREFIX . $this->tableName);
    }

    /**
     * Insert table.
     */
    public function insert($data){
        $this->_db->insert(PREFIX . $this->tableName, $data);
        return $this->_db->lastInsertId('id');
    }

    /**
     * Update table.
     */
    public function update($data, $where){
        $this->_db->update(PREFIX . $this->tableName, $data, $where);
    }

    /**
     * Delete table.
     */
    public function delete_contact($data){
        $this->_db->delete(PREFIX . $this->tableName, $data);
    }

    /**
     * Truncate table.
     */
    public function truncate(){
        $this->_db->truncate($this->tableName);
    }
}
