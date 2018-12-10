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
    public function newsgetdata()
    {
        $conn=database::connection();
        $sql="select * from news_tbl";
         $res=$conn->query($sql);
         return $res;
    }
    public function newsinsert($_newsid,$_newstitle,$_newsdesc,$_newsdesc,$_newsdate,$_newsimg,$_newsuid)
    {
        $conn=database::connection();
        $sql="insert into news_tbl values(".$_newsid.",'".$_newstitle."','".$_newsdesc."','".$_newsdate."','".$_newsimg."','".$_newsuid."')";
         $res=$conn->query($sql);
         return $res;
    }
    public function getnews($_newsid)
    {
        $conn=database::connection();
        $sql="select * from news_tbl where news_id=".$_newsid;
         $res=$conn->query($sql);
         return $res;

    }
    public function newsupdate($_newstitle,$_newsdesc,$_newsdate,$_newsimg,$_newsuid,$_newsid)
    {
        $conn=database::connection();
        $sql="update news_tbl set news_title='".$_newstitle."',news_desc='".$_newsdesc."',news_date='".$_newsdate."',news_img='". $_newsimg ."',user_id='". $_newsuid ."' where news_id='".$_newsid."'";
         $res=$conn->query($sql);
         return $res;
    }
    public function newsdelete($_id)
    {
        $conn=database::connection();
        $sql="delete from news_tbl where news_id=".$_id;
         $res=$conn->query($sql);
         return $res;
    }
}