<?php

  
    include 'functions.php';
    checkLoggedIn(); 
    session_start(); 
    
?>
    
<?php
    
    
    


    
    $conn = getSQL();
    $sql = "SELECT SUM(num_male) FROM class"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 

    $male;
    $female;
    
    foreach ($records as $record) {
      $male = $record[0];
      
      
    }//foreach
    $sql = "SELECT SUM(num_female) FROM class"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 

    foreach ($records as $record) {
      $female = $record[0];
      
      
    }//foreach
    
    
    $total = $female + $male;
    
    $age1;
    
    $sql = "SELECT SUM(btwn1315) FROM class"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 

    foreach ($records as $record) {
      $age1 = $record[0];
      
      
    }//foreach
    
    
    $age2;
    
    $sql = "SELECT SUM(btwn1618) FROM class"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 

    foreach ($records as $record) {
      $age2 = $record[0];
      
      
    }//foreach
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
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
          font-size: 3em;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: .5px;
          
        }
        
        tr:nth-child(even) {
          background-color: black;
          
        }
        .center {
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
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
              <li ><a href="./hidden.php">Main</a></li>
              <li ><a href="./change.php">Change Professors</a></li>
              <li><a href="./hogs.php">Hogwarts Data</a></li>
              <li><a href="./owl.php">OWL Exam Data</a></li>
              </ul>
              </div>
      </nav>
      
      <kbd>
      <table>
        <tr>
          <th>Hogwarts School of Witchcraft and Wizardry - Student Data</th>

          </tr>
          
          <tr>
            <td>Number of Students:<?php echo "   <kbd>".$total."</kbd> ";?></td>
        
            </tr>
            
            <tr>
              <td>Number of Male Students:<?php echo "   <kbd>".$male."</kbd> ";?></td>
    
            </tr>
            <tr>
              <td>Number of Female Students:<?php echo "   <kbd>".$female."</kbd> ";?></td>
            </tr>
            <tr>
              <td>Between 13-15:<?php echo "   <kbd>".$age1."</kbd> ";?></td>
            </tr>
            <tr>
              <td>Between 16-18:<?php echo "   <kbd>".$age2."</kbd> ";?></td>
            </tr>
      </table>
      </kbd>
      <img src="./hogsimg.jpg" height="400px" alt="Shield" class="center">
  </body>
</html>

