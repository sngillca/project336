<?php

    function getSQL(){
        if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io"){
            $host = "localhost";
            $username = "henriquez1190";
            $password = "Zaraki11!@";
            $dbname = "hogwarts"; 
                
                
             // Create connection
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } 
         return $dbConn; 
    
    }//end function


?>