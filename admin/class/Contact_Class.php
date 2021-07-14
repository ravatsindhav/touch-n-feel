<?php
require_once  "Connection.php";
class Contact_Class
{
  var $con;
  function __construct()
        {
            // $con_obj = new DbConnection\Connection\ConnectionClass();
            $con_obj = new ConnectionClass();
            $this->con = $con_obj->getConnection();
        }

  function add_client($name, $email,$subject,$message)
  {
      $query = "INSERT INTO contact (name,email,subject,message) values('$name','$email','$subject','$message')";
      $res =  mysqli_query($this->con, $query) or die(mysqli_error($this->con));
      return $res;
  }
  // function get_client($id){
  //     $s=mysqli_query($this->con,"SELECT * from client where id='$id'")or die(mysqli_error($this->con));
  //     return $s;
  // }
}
