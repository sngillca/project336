<?php
    if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io") { //running on c9
    
        $host = "localhost";
        $username = "henriquez1190";
        $password = "Zaraki11!@"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "hogwarts"; 
<<<<<<< HEAD
    } 
=======
    } else {
        //running on Heroku
            $host = "us-cdbr-iron-east-01.cleardb.net";
            $username = "b25a361e451e0d";
            $password = "59c9239e"; //best practice: defined in seperate file that is not commited to GitHub
            $dbname = "heroku_7c872a949548485";   
    }
>>>>>>> 258a8d8c05ba19f899c5b167e36a3c7f53e2e4ed




    $conn = mysqli_connect($host, $username, $password,$dbname);
    
    $result = mysqli_query($conn, "SELECT * FROM users");
    
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    echo json_encode($data);
    
?>