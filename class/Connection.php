<?php
 
class Connection 
    {
        var $con;
        function __construct()
                {
                    $this->con = mysqli_connect("127.0.0.1","root","","testing");
                }
    }
?>