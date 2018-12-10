<?php
    if($_SERVER['SERVER_NAME'] == "cst336-natgill.c9users.io") { //running on c9
    
        $host = "localhost";
        $username = "henriquez";
        $password = "Zaraki11!@"; //best practice: defined in seperate file that is not commited to GitHub
        $dbname = "hogwarts"; 
    } 




    $conn = mysqli_connect($host, $username, $password,$dbname);
    
    $result = mysqli_query($conn, "SELECT * FROM professors");
    
    $data = array();
    while($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    
    echo json_encode($data);
    
?>