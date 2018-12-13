<?php
    include 'functions.php';
    checkLoggedIn(); 
    
    session_start(); 
    
  
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <style type="text/css">
      body{
        background-color:#332239;
        
      }
          h1, h2{
                text-align: center;
               
                font-family: "Courier New", Courier, monospace;
            }
      </style>
      </head>
      <body>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="./logout.php">Logout</a>
              </div>
              <ul class="nav navbar-nav">
                <li ><a href="./change.php">Change Professors</a></li>
                <li><a href="./hogs.php">Hogwarts Data</a></li>
                <li><a href="./owl.php">OWL Exam Data</a></li>
                </ul>
          </div>
        </nav>
        <br><br>
        <h1><kbd>Welcome! You are now the Headmaster of Hogwarts. You will now be able to add, remove, 
        and edit professors!</kbd></h1>
        <h2><kbd>You will also be able to see data on Hogwart's, such as student statistics and OWL (Odrinary Wizarding Level) exam results.
        </kbd></h2>
        
        <h1><kbd>Click 'Change Professors' to edit the roster, and click 'Hogwarts Data' to see the statistics.</kbd></h1>
    </body>
</html>

