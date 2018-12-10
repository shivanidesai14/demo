<?php
class bag
{
     private static $conn = null;
        public static function connect()
        {
            self::$conn=mysqli_connect("localhost","root","","testdb");
            return self::$conn;
         }
         public static function disconnect()
        {
            self::$conn=mysqli_disconnect();
             self::$conn=null;
         }
    
         public function login($_email,$_pass)
         {
             $conn=bag::connect();
            $res=$conn->query("select * from user_tbl where email_id='". $_email ."' and password='". $_pass ."'");
            return $res;
            bag::disconnect();
         }
         public function getproduct()
         {
             $conn=bag::connect();
            $res=$conn->query("select * from product_tbl");
            return $res;
            bag::disconnect();
         }
         public function getcategory()
         {
             $conn=bag::connect();
            $res=$conn->query("select * from cat_tbl");
            return $res;
            bag::disconnect();
         }     
          public function getuser($email)
         {
             $conn=bag::connect();
            $res=$conn->query("select * from user_tbl where email_id='". $email ."'");
            return $res;
            bag::disconnect();
         }  
         public function updateuser($_email,$_name,$_pass,$_mobile,$_add,$_img,$_gen)
         {
             $conn=bag::connect();
            $res=$conn->query("update user_tbl set name='". $_name ."',password='". $_pass ."',mobile_no='". $_mobile ."',address='". $_add ."',image='". $_img ."',gender='". $_gen ."' where email_id='". $_email ."'");
            return $res;
            bag::disconnect();
         } 
         public function signup($_email,$_name,$_pass,$_mobile,$_add,$_img,$_gen)
         {
             $conn=bag::connect();
            $res=$conn->query("insert into user_tbl values('". $_email ."','". $_name ."','". $_pass ."','". $_mobile ."','". $_add ."','". $_img ."','". $_gen ."')");
            return $res;
            bag::disconnect();
         }   
         public function viewProductAdmin()
         {
             $conn=bag::connect();
            $res=$conn->query("select c.*,p.* from product_tbl p,cat_tbl c where c.cat_id=p.fk_cat_id");
            return $res;
            bag::disconnect();
         }    
         public function InsertProduct($_name,$_color,$_price,$_menuf,$_warr,$_soh,$_pimg,$_catid)
         {
             $conn=bag::connect();
            $res=$conn->query("insert into product_tbl  values('". null ."','". $_name ."','". $_color ."',". $_price .",'". $_menuf ."','". $_warr ."','". $_soh ."','". $_pimg ."','". $_catid ."')");
            return $res;
            bag::disconnect();
         }  
          public function DeleteProduct($_id)
         {
             $conn=bag::connect();
            $res=$conn->query("delete from product_tbl where pid=".$_id);
            return $res;
            bag::disconnect();
         }  
           public function Update1Product($_pid)
         {
             $conn=bag::connect();
            $res=$conn->query("select * from product_tbl where pid=".$_pid);
            return $res;
            bag::disconnect();
         } 
          public function UpdateProduct($_pid,$_name,$_color,$_price,$_manuf,$_war,$_soh,$_pimg)
         {
             $conn=bag::connect();
            $res=$conn->query("update product_tbl set pname='". $_name ."',colour='". $_color ."',price='". $_price ."',manufecture='". $_manuf ."',warranty='". $_war ."',stock_on_hand='". $_soh ."',pimg='". $_pimg ."' where pid=". $_pid ."");
            return $res;
            bag::disconnect();
         } 
         public function CategoryInsert($_name)
         {
             $conn=bag::connect();
            $res=$conn->query("insert into cat_tbl values('". null ."','". $_name ."')");
            return $res;
            bag::disconnect();
         }   
         public function categorydelete($_id)
         {
             $conn=bag::connect();
            $res=$conn->query("delete from cat_tbl where cat_id=".$_id);
            return $res;
            bag::disconnect();
         }  
          public function catupdate($_cid)
         {
             $conn=bag::connect();
            $res=$conn->query("select * from cat_tbl where cat_id=".$_cid);
            return $res;
            bag::disconnect();
         } 
         public function catupdate1($_id,$_name)
         {
             $conn=bag::connect();
            $res=$conn->query("update cat_tbl set cat_name='". $_name ."' where cat_id=". $_id ."");
            return $res;
            bag::disconnect();
         } 
}
?>