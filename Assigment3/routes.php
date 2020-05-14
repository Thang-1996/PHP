<?php
$route = $_GET["route"];
$controller = new Controller\Controller();
//dieu huong
switch ($route){
//    case "register": $controller->register();break;
//    case "post_register": $controller->postRegister();break;
    case "books": $controller->books();break;
    case "category": $controller->category();break;
    case "post_category_edit" : $controller->post_category_edit();break;
    case "post_edit" : $controller->post_edit();break;
    case "post_category_delete" : $controller->post_category_delete();break;
    case "post_category_create" : $controller->post_category_create();break;
    case "post_create" : $controller->post_create();break;
    case "post_book_edit" : $controller->post_book_edit();break;
    case "view_book_edit" : $controller->view_book_edit();break;
    case "post_book_delete" : $controller->post_book_delete();break;
    case "post_book_create" : $controller->post_book_create();break;
    case "view_book_create" : $controller->view_book_create();break;


    default: require __DIR__."/home.php";
}