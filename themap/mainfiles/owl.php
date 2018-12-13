<?php

  
    include 'functions.php';
    checkLoggedIn(); 
    session_start(); 
    
?>
    
<?php

    $hogsAvg;

    $conn = getSQL();
    
    //3rd report aggregate function
    $sql = "SELECT AVG(avg) FROM owl"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    
    
    foreach ($records as $record) {
        $hogsAvg = $record[0];
      }
    
    //JOIN RELATIONSHIP join houses table with owl score table to get each houses
    //scores
    $sql = "SELECT * FROM owl join houses on houses.house_id=owl.house_id"; 
    $statement = $conn->prepare($sql); 
    $statement->execute(); 
    $records = $statement->fetchAll(); 
    
    $gh = array();
    $sh = array();
    $hh = array();
    $rh = array();
    foreach ($records as $record) {
      if($record["house_id"] == 1){
        $gh[0] = $record["high"];
        $gh[1] = $record["low"];
        $gh[2] = $record["avg"];
        
      }
      if($record["house_id"] == 2){
        $sh[0] = $record["high"];
        $sh[1] = $record["low"];
        $sh[2] = $record["avg"];
      }
      if($record["house_id"] == 3){
        $hh[0] = $record["high"];
        $hh[1] = $record["low"];
        $hh[2] = $record["avg"];
      }
      if($record["house_id"] == 4){
        $rh[0] = $record["high"];
        $rh[1] = $record["low"];
        $rh[2] = $record["avg"];
      }
      
      //echo "<h1><kbd>".$record["house_id"]."</kbd></h1>";
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
              <li><a href="./hogs.php">Hogwarts Data</a></li>
              <li><a href="./owl.php">OWL Exam Data</a></li>
              </ul>
              </div>
      </nav>
      <h1><kbd>OWL Exam Results</kbd></h1>
      <h3><kbd>Hogwarts' Average Score as a School was <?php echo ":".$hogsAvg; ?></kbd></h3>
      <h3><kbd>Listed below is the specifc score data.</kbd></h3>
      <kbd>
      <table>
       
          <tr>
          <th>House</th>
          <th>Highest Score</th>
          <th>Lowest Score</th>
          <th>Average Score</th>
          </tr>
          
          
          <tr>
            <td>Gryffindor </td>
            <td><?php echo "<kbd>".$gh[0]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$gh[1]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$gh[2]."</kbd>"; ?></td>
          </tr>
          <tr>
            <td>Slytherin </td>
            <td><?php echo "<kbd>".$sh[0]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$sh[1]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$sh[2]."</kbd>"; ?></td>
          </tr>
          <tr>
            <td>Hufflepuff </td>
            <td><?php echo "<kbd>".$hh[0]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$hh[1]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$hh[2]."</kbd>"; ?></td>
          </tr>
          <tr>
            <td>Ravenclaw </td>
            <td><?php echo "<kbd>".$rh[0]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$rh[1]."</kbd>"; ?></td>
            <td><?php echo "<kbd>".$rh[2]."</kbd>"; ?></td>
          </tr>
      </table>
      </kbd>
  </body>
</html>

