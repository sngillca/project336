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
          padding: 8px;
          
        }
        
        tr:nth-child(even) {
          background-color: black;
          
        }
                
         </style>
    </head>
    <body>
      
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="./home.php">Logout</a>
            </div>
            <ul class="nav navbar-nav">
              <li ><a href="./hidden.php">Main</a></li>
              <li ><a href="./change.php">Change Professors</a></li>
              <li><a href="./hcup.php">House Cup</a></li>
              </ul>
              </div>
      </nav>
      
      <kbd>
      <table>
        <tr>
          <th>Gryffindor</th>
          <th>Slytherin</th>
          <th>Hufflepuff</th>
          <th>Ravenclaw</th>
          </tr>
          
          <tr>
            <td>Points:</td>
            <td>Points:</td>
            <td>Points:</td>
            <td>Points:</td>
            </tr>
            
            <tr>
              <td>Total Wins in History:</td>
              <td>Total Wins in History:</td>
              <td>Total Wins in History:</td>
              <td>Total Wins in History:</td>
            </tr>
      </table>
      </kbd>
  </body>
</html>

<?php
 
  include "db.php";

    
  
    $conn = getSQL();
    $sql = "SELECT * from houses right join housecup on houses.name=housecup.wins"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    $gWins;
    
    foreach ($records as $record) {
      if($record["name"] == $house){
        echo "<kbd> ".$record["name"]."</kbd><br>";
      }//if
    }//foreach
      
    

  


?>