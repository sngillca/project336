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
            $username = "b25a361e451e0d";
            $password = "59c9239e"; //best practice: defined in seperate file that is not commited to GitHub
            $dbname = "heroku_7c872a949548485";       
            
            
            //mysql://b25a361e451e0d:59c9239e@us-cdbr-iron-east-01.cleardb.net/heroku_7c872a949548485?reconnect=true
        }
         return $dbConn; 
    
    }//end function


?>