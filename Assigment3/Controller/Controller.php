<?php

namespace Controller;


use Model\Category;
use Model\Book;

class Controller
{
    public function books()
    {
        require_once "View/books.php";
    }
    public function view_book_edit(){
        require_once "View/book_edit.php";
    }

    public function view_book_create(){
        require_once "View/book_create.php";
    }

    public function category()
    {
        require_once "View/category.php";
    }
    public function post_edit(){
        require_once "View/category_edit.php";
    }

    public function post_create(){
        require_once "View/category_create.php";
    }
    public function post_category_edit()
    {
        $id = $_POST['category_id'];
        $name = $_POST['name'];
        $category = new Category($id, $name);
        $category->save();
        header("Location: ?route=category");
    }
    public function post_category_delete()
    {
        $category = new Category();
        $category = $category->find($_GET["category_id"]);
        $category->delete();
        header("Location: ?route=category");
    }
    public function post_category_create(){
        $name = $_POST['name'];
        $category = new Category(null,$name);
        $category->save();
        header("Location: ?route=category"); // dieu huong tro lai trang danh sach
    }
    public function post_book_edit()
    {
        $id = $_POST['book_id'];
        $book_name = $_POST['book_name'];
        $author = $_POST['author'];
        $qty = $_POST['qty'];
        $category_id = $_POST['category_id'];
//        $category_name = $_POST['name'];
        $book = new Book($id,$book_name,$author,$qty,$category_id,null);
        $book->save();
        header("Location: ?route=books&category_id=".$category_id);
    }
    public function post_book_delete()
    {
        $book = new Book();
        $book = $book->find($_GET["book_id"]);
        $book->delete();
        header("Location: ?route=category");
    }

    public function post_book_create(){
        $book_name = $_POST['book_name'];
        $author = $_POST['author'];
        $qty = $_POST['qty'];
        $category_id = $_POST['category_id'];
//        $category_name = $_POST['category_name'];
        $book = new Book(null,$book_name,$author,$qty,$category_id);
        $book->save();
        header("Location: ?route=books&category_id=".$category_id); // dieu huong tro lai trang danh sach
    }
}