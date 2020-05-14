<?php
namespace lib;
abstract class Model{
    protected $table;
    public function getConn(){
        return Connector::connector();
    }
    public abstract function getAll();
    public abstract function save();
    public abstract function find($id);
    public abstract function delete();
    //xay dung DAO partern cho users
    public function getTable(){
        return $this->table;
    }
    public function toArray($result){
        $data = [];
        if($result -> num_rows > 0){
            while ($row = $result -> fetch_assoc()){
                $data[] = $row;
                //mỗi row mà 1 mảng có các key là các column
            }
            //var_dump($students);
        }
        //students là mang chứa các sinh viên
        return $data;
    }
}
