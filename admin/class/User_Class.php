<?php
require_once  "Connection.php";
class User_Class
{
  var $con;
  function __construct()
        {
            // $con_obj = new DbConnection\Connection\ConnectionClass();
            $con_obj = new ConnectionClass();
            $this->con = $con_obj->getConnection();
        }

//   function add_contact($name,$email,$subject,$message)
//   {
//       $query = "INSERT INTO contact (name,email,subject,message) values('$name','$email','$subject','$message')";
//       $res =  mysqli_query($this->con, $query) or die(mysqli_error($this->con));
//       return $res;
//   }
  function get_user($email){
      $s=mysqli_query($this->con,"SELECT * from user where email='$email' and is_deleted='0'")or die(mysqli_error($this->con));
      return $s;
  }
  function update_otp($email,$otp){
    $this->cmd = "UPDATE  user set otp='$otp' where  email='$email' and is_deleted='0'";  
    $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
    return $s;
}
  function update_password($email,$password,$otp){
    $this->cmd = "UPDATE  user set password	='$password' where  email='$email' and otp='$otp' and is_deleted='0'";  
    $s=mysqli_query($this->con,$this->cmd) or die(mysqli_error($this->con));
    return $s;
}
}
