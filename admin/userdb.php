<?php
class database
{
    private static $conn=NULL;
    private static function connection()
    {
        self::$conn=mysqli_connect("localhost","root","","demo");
        return self::$conn;
    }
    private static function disconnect()
    {
        self::$conn=mysqli_close();
        self::$conn=null;
    }
    public function usergetdata()
    {
        $conn=database::connection();
        $sql="select * from user_tbl";
         $res=$conn->query($sql);
         return $res;
    }
}