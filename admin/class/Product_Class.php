<?php
require_once  "Connection.php";
class Product_Class 
{
    var $con;
    function __construct()
        {
            // $con_obj = new DbConnection\Connection\ConnectionClass();
            $con_obj = new ConnectionClass();
            $this->con = $con_obj->getConnection();
        }

    function check_product_name($name)
    {
        $s = mysqli_query($this->con, "SELECT * from product where name='$name' and is_deleted='0'") or die(mysqli_error($this->con));
        return $s;
    }
    function add_product($name, $detail, $category_id, $image)
    {
        $query = "INSERT INTO product (name,detail,category_id,image) values('$name','$detail','$category_id','$image')";
        $res =  mysqli_query($this->con, $query) or die(mysqli_error($this->con));
        return $res;
    }
    function getAllproduct(){
        $s=mysqli_query($this->con,"SELECT * from product where is_deleted='0'")or die(mysqli_error($this->con));
        return $s;
    }
    function getProductByCategory($category_id){
        if($category_id==0){
            $s=mysqli_query($this->con,"SELECT * from product where is_deleted='0'" )or die(mysqli_error($this->con));
            return $s;
        }
        else{
            $s=mysqli_query($this->con,"SELECT * from product where category_id='$category_id' and is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        
    }
    function get_product($id){
        $s=mysqli_query($this->con,"SELECT * from product where id='$id' and is_deleted='0'")or die(mysqli_error($this->con));
        return $s;
    }
    function get_product_9(){
        $s=mysqli_query($this->con,"SELECT * from product  where is_deleted='0' ORDER BY id LIMIT 11")or die(mysqli_error($this->con));
        return $s;
    }
    
    
    function update_product($id,$name, $detail, $category_id){
        $this->cmd = "UPDATE  product set name='$name',detail='$detail',category_id='$category_id' where id ='$id' and is_deleted='0'";  
        $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
        return $s;
    }
    function update_product_image($id,$name, $detail, $category_id,$image){
        $this->cmd = "UPDATE  product set name='$name',detail='$detail',category_id='$category_id',image='$image' where id ='$id' and is_deleted='0'";  
        $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
        return $s;
    }
    function delete_product($id){
        $this->cmd = "UPDATE  product set is_deleted='1' where id ='$id'";  
        $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
        return $s;
    }
}
