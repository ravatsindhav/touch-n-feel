<?php
 //namespace DbConnection\Connection;
class ConnectionClass 
    {
        
        function getConnection()
        {
             // For Local Development
            //return $connection = mysqli_connect("127.0.0.1","root","","touch_and_feel");
            // For Production
            return $connection = mysqli_connect("localhost:3306","touchand_testuse","uVVHN62zVDmS5C7","touchand_test");
        }
    }
?>