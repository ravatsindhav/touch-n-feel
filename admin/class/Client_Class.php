<?php
  require_once "Connection.php";
class Client_Class 
    {
        var $con;
        function __construct()
        {
            // $con_obj = new DbConnection\Connection\ConnectionClass();
            $con_obj = new ConnectionClass();
            $this->con = $con_obj->getConnection();
        }
        function check_client_name($name)
        {
            $s=mysqli_query($this->con,"SELECT * from client where name='$name' and is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        
        function add_client($name, $detail,$image)
        {
            $query = "INSERT INTO client (name,detail,image) values('$name','$detail','$image')";
            $res =  mysqli_query($this->con, $query) or die(mysqli_error($this->con));
            return $res;
        }
        function get_client($id){
            $s=mysqli_query($this->con,"SELECT * from client where id='$id' and is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        function getAllclient(){
            $s=mysqli_query($this->con,"SELECT * from client where is_deleted='0'")or die(mysqli_error($this->con));
            return $s;
        }
        
        function update_client($id,$name,$detail){
            $this->cmd = "UPDATE  client set name='$name',detail='$detail' where id ='$id' and is_deleted='0'";  
            $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
            return $s;
        }
        function update_client_image($id,$name, $detail,$image){
            $this->cmd = "UPDATE  client set name='$name',detail='$detail',image='$image' where id ='$id' and is_deleted='0'";  
            $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
            return $s;
        }
        function delete_client($id){
            $s=mysqli_query($this->con,"UPDATE  client set is_deleted='1' where id ='$id'")or die(mysqli_error($this->con));
            return $s;
        }
        
    }
?>