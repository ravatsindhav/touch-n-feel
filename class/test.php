<?php
  include "Connection.php";
class DBClass extends Connection
    {
        
        // function __construct()
        //         {
        //             $this->con = mysqli_connect("127.0.0.1","root","","testing");
        //         }
         function getData()
            {
                // $this->email = $email;
                // $this->psw = $psw;
                $s=mysqli_query($this->con,"select * from user");
                return $s;
            }
        
    }
?>