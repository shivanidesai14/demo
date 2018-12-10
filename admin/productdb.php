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
    public function getproduct()
    {
         $conn=database::connection();
        $sql="select * from product_tbl";
         $res=$conn->query($sql);
         return $res;

    }
     public function productdelete($_id)
    {
        $conn=database::connection();
        $sql="select * from product_tbl where pid=".$_id;
         $res=$conn->query($sql);
         $row=$res->fetch_assoc();
         unlink($row["image"]);
        $sql="delete from product_tbl where pid=".$_id;
         $res=$conn->query($sql);
         return $res;
    }
    public function proinsert($_pid,$_pname,$_pcolor,$_pprice,$_pmanu,$_pwarra,$_psoh,$target_file,$_des,$_fk_cat_id)
    {
        $conn=database::connection();
        $sql="insert into product_tbl values('".$_pid."','".$_pname ."','".$_pcolor ."','".$_pprice ."','".$_pmanu ."','".$_pwarra ."','".$_psoh ."','".$target_file."','".  $_des ."','".$_fk_cat_id."')";
         $res=$conn->query($sql);
         return $res;
    }
    public function getpro($_pid)
    {
       $conn=database::connection();
        $sql="select * from product_tbl where pid=".$_pid;
         $res=$conn->query($sql);
         return $res;
    }
    public function proupdate($_pname,$_pcolor,$_pprice,$_pmanu,$_pwarra,$_psoh,$_pimg,$_des,$_fk_cat_id,$_pid)
    {
        $conn=database::connection();
        $sql="update product_tbl set pname='". $_pname  ."',pcolor='". $_pcolor ."',prize='". $_pprice ."',manu='". $_pmanu ."',warr='". $_pwarra ."',soh='". $_psoh ."',image='". $_pimg ."',des='" . $_des ."',fk_cat_id='". $_fk_cat_id ."' where pid='".  $_pid ."'";
        $res=$conn->query($sql);
         return $res;    
    }
}



?>