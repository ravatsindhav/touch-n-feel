<?php
 //namespace DbConnection\Connection;
class ConnectionClass 
    {
        
        function getConnection()
        {
            return $connection = mysqli_connect("127.0.0.1","root","","touch_and_feel");
        }
    }
