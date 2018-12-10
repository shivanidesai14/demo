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
    public function catgetdata()
    {
        $conn=database::connection();
        $sql="select * from cat_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function catinsert($_id,$_name)
    {
        $conn=database::connection();
        $sql="insert into cat_tbl values('". $_id ."','". $_name ."')";
         $res=$conn->query($sql);
         return $res;
    }
    public function getcat($_catid)
    {
        $conn=database::connection();
        $sql="select * from cat_tbl where cat_id=".$_catid;
         $res=$conn->query($sql);
         return $res;

    }
    public function catupdate($_catname,$_catid)
    {
        $conn=database::connection();
        $sql="update cat_tbl set cat_name='". $_catname ."' where cat_id='". $_catid ."'";
         $res=$conn->query($sql);
         database::disconnect();
         return $res;
    }
    public function catdelete($_id)
    {
        $conn=database::connection();
        $sql="delete from cat_tbl where cat_id=".$_id;
         $res=$conn->query($sql);
         return $res;
    }
}