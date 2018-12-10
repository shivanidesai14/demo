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
    public function Login($_u,$_p)
    {
            $conn=database::connection();
            $sql="select * from admin_tbl where name='". $_u ."' and password='". $_p ."' ";
            $res=$conn->query($sql);
            return $res;
    }
   

   
}


?>