<?php
namespace Model;
use lib\Model;
class Book extends Model{
    public $book_id;
    public $name;
    public $author;
    public $qty;
    public $category_id;
//    public $category_name;
    protected $table = "book";
//    protected $table2 = "category";
    public function __construct($book_id=null,$name=null,$author=null,$qty=null,$category_id=null)
    {
     $this->book_id = $book_id;
     $this->name = $name;
     $this->author = $author;
     $this->qty = $qty;
     $this->category_id = $category_id;
//     $this->category_name=$category_name;

    }
    public function getBook($category_id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE category_id= " . $category_id;
//        $sql2 =  "SELECT category.name as category_name from category left join book on category.category_id = book.category_id WHERE category_id = ".$category_id;
//        $this->category_name = $this->getConn()->query($sql2);
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function save()
    {
        $sql_text = "INSERT INTO " . $this->getTable() . "(book_id,name,author,qty,category_id) VALUES (" . (is_null($this->book_id) ? 'null' : $this->book_id) . ",'" . $this->name . "','" . $this->author . "'," . $this->qty . "," . $this->category_id . " )
         ON DUPLICATE KEY UPDATE name = '" . $this->name . "' , author = '" . $this->author . "' , qty = " . $this->qty . ",category_id = " . $this->category_id . ";";
        try {
            $this->getConn()->query($sql_text);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function find($book_id)
    {
        $sql_text = "SELECT * FROM " . $this->getTable() . " WHERE book_id = " . $book_id;
        $ary      = $this->toArray($this->getConn()->query($sql_text)); //
        if (count($ary) > 0) { // co du lieu
            $data = $ary[0];
            return new Book($data["book_id"],$data["name"],$data["author"],$data["qty"],$data["category_id"]);
        }
        return null;
    }

    public function delete()
    {
        $sql_text = "DELETE FROM " . $this->getTable() . " WHERE book_id = " . $this->book_id;
        $this->getConn()->query($sql_text);
    }
}
