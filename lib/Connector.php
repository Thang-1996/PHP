<?php
namespace lib; //  để xác định tường luồng chạy nếu trùng tên lớp
class Connector{
    private static $conn;

    public static function connector(){
     if(is_null(self::$conn)){
         self::$conn = connect('books');
     }
     return self::$conn;
    }
}
