<?php
    session_start(); 
    include 'db.php'; 
    include 'menu.php';
    $dbConn = getSQL(); 

    function validate($username, $password) {
        global $dbConn; 
        $dbConn = getSQL(); 
        
        $sql = "SELECT * FROM `users` WHERE username=:username AND password=:password"; 
        $statement = $dbConn->prepare($sql); 
        $statement->execute(array(':username' => $username, ':password' => $password));
    
        $records = $statement->fetchAll(); 
        
        
        if (count($records) >= 1) {
            // login successful
            $_SESSION['user_id'] = $records[0]['id']; 
            $_SESSION['username'] = $records[0]['username']; 
            header('Location: hidden.php');
            
        }  else {
            echo "<div class='error'><kbd>Username and password are invalid</kbd> </div>"; 
        }
 }
    
    
?>



<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1> <kbd>Alohomora</kbd></h1>
        
        <?php 
            if (isset($_POST['username'])) {
                validate($_POST['username'], $_POST['password']);  
            }
        ?>

        <form method="POST">
            <kbd>Username:</kbd> <input id="username" type="text" name="username"></input> <span id="errorMsg"></span><br/>
            <kbd>Password:</kbd> <input type="password" name="password"></input>
            <input type="submit" value="Login">
        </form>
        <kbd>test with username=nat password=cathat</kbd>
    </body>
</html>