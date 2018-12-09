<?php

    function getSQL(){
        if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io"){
            $host = "localhost";
            $username = "nat";
            $password = "cst336";
            $dbname = "hogwarts"; 
                
                
             // Create connection
            $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } else {
            $host = "us-cdbr-iron-east-01.cleardb.net";
            $username = "bc0ae3954df63b";
            $password = "d545dc63"; //best practice: defined in seperate file that is not commited to GitHub
            $dbname = "heroku_884ad785636f6f4";             
        }
         return $dbConn; 
    
    }//end function


?>