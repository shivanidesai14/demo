<?php
    class productdb{
        private static $con=null;
        public static function connect(){
            self::$con=mysqli_connect('localhost','root','','product_db');
            return self::$con;
        }
        public static function disconnect(){
            mysqli_close(self::$con);
            self::$con=NULL;
        }
        public function getAllProducts(){
            $conn=productdb::connect();
            $sql="select * from product_tbl";
            $result=$conn->query($sql);
            productdb::disconnect();
            return $result;
        }
        public function productInsert($_pname,$_pcolor,$_pprice,$_pmanu,$_pwarra,$_psoh,$_pimg,$_fk_cat_id){
            $conn=productdb::connect();
            $sql="insert into product_tbl
                (prod_name,prod_color,prod_price,prod_manufacture,prod_warranty,prod_soh,prod_img,fk_cat_id) 
                values('".$_pname ."','".$_pcolor ."','".$_pprice ."','".$_pmanu ."','".$_pwarra ."','".$_psoh ."','".$_pimg."','".$_fk_cat_id."')";
            $result=$conn->query($sql);
            echo $sql;
            productdb::disconnect();
            return $result;
        }
        public function productDelete($product_id){
            $conn=productdb::connect();
            $sql="select * from product_tbl where prod_id='.$product_id.'";
            $res=$conn->query($sql);          
            $row=$res->fetch_assoc();
            unlink($row["prod_img"]);            
            
            $sql="delete from product_tbl where prod_id=".$product_id;
            //echo $sql;
            $result=$conn->query($sql);
            productdb::disconnect();
            return $result;
        }
        public function productUpdate($_pid,$_pname,$_pcolor,$_pprice,$_pmanu,$_pwarra,$_psoh,$_pimg,$_fk_cat_id){
            $conn=productdb::connect();
            $sql="update product_tbl set prod_name='".$_pname ."',prod_color='".$_pcolor ."',prod_price='".$_pprice ."',prod_manufacture='".$_pmanu ."',prod_warranty='".$_pwarra ."',prod_soh='".$_psoh ."',prod_img='".$_pimg ."',fk_cat_id='".$_fk_cat_id."' where prod_id='".$_pid ."' ";
            $result=$conn->query($sql);
            productdb::disconnect();
            return $result;
        }
    }
?>