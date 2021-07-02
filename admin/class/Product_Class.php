<?php
  include "Connection.php";
class Product_Class extends ConnectionClass
    {
        
        function check_product_name($name)
        {
            $s=mysqli_query($this->con,"select * from product_test where name='$name'")or die(mysqli_error($this->con));
            return $s;
        }
         function add_product($name,$detail,$category_id,$image)
            {
                $query = "INSERT INTO product_test (name,detail,category_id,image) values('$name','$detail','$category_id','$image')";
                $res =  mysqli_query($this->con, $query) or die(mysqli_error($this->con));
                return $res;
            }
        
    }
?>