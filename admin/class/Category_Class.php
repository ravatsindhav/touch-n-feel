<?php
  require_once  "Connection.php";
  
class Category_Class 
    {
        var $con;
        function __construct()
        {
            // $con_obj = new DbConnection\Connection\ConnectionClass();
            $con_obj = new ConnectionClass();
            $this->con = $con_obj->getConnection();
        }
        function check_category_name($name)
        {
            $s=mysqli_query($this->con,"SELECT * from category where name='$name' and is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        function check_category_product($Category_id){
            $s=mysqli_query($this->con,"SELECT * from product where category_id='$Category_id' and is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        function add_category($name,$detail)
        {
            $query = "INSERT INTO category (name,detail) values('$name','$detail')";
            $res =  mysqli_query($this->con, $query) or die(mysqli_error($this->con));
            return $res;
        }
        function getAllcategory(){
            $s=mysqli_query($this->con,"SELECT * from category where is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        function get_category($id){
            $s=mysqli_query($this->con,"SELECT * from category where id='$id' and is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        function update_category($id,$name, $detail){
            $this->cmd = "UPDATE  category set name='$name',detail='$detail' where id ='$id' and is_deleted='0'";  
            $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
            return $s;
        }
        function delete_category($Category_id){
            $s=mysqli_query($this->con,"UPDATE  category set is_deleted='1' where id ='$Category_id'")or die(mysqli_error($this->con));
            return $s;
        }
        
    }
?>