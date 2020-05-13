<?php
namespace lib; //  để xác định tường luồng chạy nếu trùng tên lớp
require_once "connect.php";
class Connector{
    private static $conn;

    public static function connector(){
     if(is_null(self::$conn)){
         self::$conn = connect('t1907m');
     }
     return self::$conn;
    }
}
