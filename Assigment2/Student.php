<?php

namespace Assigment2;

use lib\Model;

// su dung abtract class de viet lai ham theo huong khac
require_once "../lib/Model.php"; // require thư viện
class Student extends Model
{
    public $id; // khai báo các thuộc tính của class
    public $name;
    public $email;
    public $age;
    public $address;
    public $mark;
    protected $table = "student"; // khai báo tên bảng

    public function __construct($id = null, $name = null, $email = null, $age = null, $address = null, $mark = null)

    {
        $this->id      = $id; // khai báo constructor
        $this->name    = $name;
        $this->email   = $email;
        $this->age     = $age;
        $this->address = $address;
        $this->mark    = $mark;
    }

    // function getALL du lieu
    public function getAll()
    {
        $sql_text = "SELECT * FROM " . $this->table;
        $rs       = $this->getConn()->query($sql_text);
        return $this->toArray($rs);
    }

    // function luu dung cho ca insert va update
    public function save()
    {
        $sql_text = "INSERT INTO " . $this->getTable() . " (id,name,email,age,address,mark) VALUES(" . (is_null($this->id) ? 'null' : $this->id) . ",'" . $this->name .
            "','" . $this->email . "','.$this->age.','" . $this->address . "','.$this->mark.') ON DUPLICATE KEY UPDATE name = '" . $this->name . "',email = '" . $this->email .
            "', age = '.$this->age.', address = '" . $this->address .
            "', mark = '.$this->mark.';";
        try {
            $this->getConn()->query($sql_text);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }


    // function tìm kiếm
    public function find($id)
    {
        $sql_text = "SELECT * FROM " . $this->getTable() . " WHERE id = " . $id;
        $ary      = $this->toArray($this->getConn()->query($sql_text));
        if (count($ary) > 0) {
            $data = $ary[0];
            return new Student($data["id"], $data["name"], $data["email"], $data["age"], $data["address"], $data["mark"]);
        }
        return null;
    }

    public function delete()
    {
        $sql_text = "DELETE FROM " . $this->getTable() . " WHERE id = " . $this->id;
        $this->getConn()->query($sql_text);
    }
}