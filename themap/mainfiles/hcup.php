<?php

  
    include 'functions.php';
    checkLoggedIn(); 
    session_start(); 
    
    
    ?>
    
    
    <?php
    
    
    


    
    $conn = getSQL();
    $sql = "SELECT * FROM houses Right Join housecup on houses.house_id=housecup.cup_id"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    $gpoints;
    $spoints;
    $hpoints;
    $rpoints;
    
    $ghist;
    $shist;
    $hhist;
    $rhist;
    
    foreach ($records as $record) {
      if($record["house_name"] == "Gryffindor"){
        $gpoints= $record["points1"]+$record["points2"];
        $ghist= $record["wins"];
      
      }
      if($record["cup_id"] == 1){
        $ghist = $record["wins"];
        
      }
      if($record["house_name"] == "Slytherin"){
        $spoints= $record["points1"]+$record["points2"];
        //$shist= $record["wins"];
      
      }   
      
      if($record["cup_id"] == 2){
        $shist = $record["wins"];
        
      }
      if($record["house_name"] == "Hufflepuff"){
        $hhist = $record["wins"];
        $hpoints = $record["points1"]+$record["points2"];
        }
       if($record["cup_id"] == 3){
        $hhist = $record["wins"];
        
      }

      if($record["house_name"] == "Ravenclaw"){
        $rpoints = $record["points1"]+$record["points2"];
       
       
      }
       if($record["cup_id"] == 4){
        $rhist = $record["wins"];
        
      }

 
      
      
    }//foreach
  
      /*
      SELECT * from housecup WHERE name="Gryffindor"
SELECT wins/totalwins FROM housecup join (SELECT SUM(wins) from housecup)
      */
      
       // echo "<br>SQL;:".$sql;
       
       
       $numOfqs;
       
       
        $sql = "SELECT SUM(wins) FROM housecup";
        $statement = $conn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll();
        
        
       
    
     
      foreach ($records as $record) {
            //get quotes and authors
           $numOfqs = $record[0];
            
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
            <a class="navbar-brand" href="./logout.php">Logout</a>
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
            <td>Total Points: <?php echo "<kbd> ".$gpoints."</kbd>"; ?></td>
            <td>Total Points: <?php echo "<kbd> ".$spoints."</kbd>"; ?></td>
            <td>Total Points: <?php echo "<kbd> ".$hpoints."</kbd>"; ?></td>
            <td>Total Points: <?php echo "<kbd> ".$rpoints."</kbd>"; ?></td>
            </tr>
            
            <tr>
              <td>Total Wins in History: <?php echo "<kbd> ".$ghist."</kbd>"; ?></td>
              <td>Total Wins in History: <?php echo "<kbd> ".$shist."</kbd>"; ?>  </td>
              <td>Total Wins in History:<?php echo "<kbd> ".$hhist."</kbd>"; ?></td>
              <td>Total Wins in History: <?php echo "<kbd> ".$rhist."</kbd>"; ?></td>
            </tr>
            <tr>
              <td>Average Wins in History: </td>
              <td>Average Wins in History:</td>
              <td>Average Wins in History:</td>
              <td>Average Wins in History:</td>
            </tr>
      </table>
      </kbd>
  </body>
</html>

