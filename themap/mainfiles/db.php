<?php

    function getSQL(){
        if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io"){
            $host = "localhost";
            $username = "henriquez1190";
            $password = "Zaraki11!@";
            $dbname = "hogwarts"; 
                
                

            
<<<<<<< HEAD
        } 
         return $dbConn; 
=======
        } else {
            $host = "us-cdbr-iron-east-01.cleardb.net";
            $username = "b25a361e451e0d";
            $password = "59c9239e"; //best practice: defined in seperate file that is not commited to GitHub
            $dbname = "heroku_7c872a949548485";       
            
            
            //mysql://b25a361e451e0d:59c9239e@us-cdbr-iron-east-01.cleardb.net/heroku_7c872a949548485?reconnect=true
        }
        // Create connection
        $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $dbConn; 
>>>>>>> 258a8d8c05ba19f899c5b167e36a3c7f53e2e4ed
    
    }//end function


?>