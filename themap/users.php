<?php
    if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io") { //running on c9
    
        $host = "localhost";
        $username = "nat";
        $password = "cst336"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "hogwarts"; 
    } else {
        //running on Heroku
        
        $host = "us-cdbr-iron-east-01.cleardb.net";
        $username = "bc0ae3954df63b";
        $password = "d545dc63"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "heroku_884ad785636f6f4"; 
    }




    $conn = mysqli_connect($host, $username, $password,$dbname);
    
    $result = mysqli_query($conn, "SELECT * FROM users");
    
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    echo json_encode($data);
    
?>