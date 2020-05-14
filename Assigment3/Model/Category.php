<?php

namespace Model;

use lib\Model;

class Category extends Model
{
    public $category_id;
    public $name;
    protected $table = "category";

    public function __construct($category_id = null, $name = null)
    {
        $this->category_id = $category_id;
        $this->name        = $name;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $rs  = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function save()
    {
        $sql_text = "INSERT INTO " . $this->getTable() . "(category_id,name) VALUES (" . (is_null($this->category_id) ? 'null' : $this->category_id) . ",'" . $this->name . "' )
         ON DUPLICATE KEY UPDATE name = '" . $this->name . "';";
        try {
            $this->getConn()->query($sql_text);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function find($category_id)
    {
        $sql_text = "SELECT * FROM " . $this->getTable() . " WHERE category_id = " . $category_id;
        $ary      = $this->toArray($this->getConn()->query($sql_text)); // mang thoa man
        if (count($ary) > 0) { // co du lieu
            $data = $ary[0];
            return new Category($data["category_id"], $data["name"]);
        }
        return null;
    }

    public function delete()
    {
        $sql_text = "DELETE FROM " . $this->getTable() . " WHERE category_id = " . $this->category_id;
        $this->getConn()->query($sql_text);
    }
}
