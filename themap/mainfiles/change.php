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
         
      </style>
      </head>
      <body >
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
    
        <form method="post">
            <h2><kbd>Enter Professor Name to Delete:</kbd></h2>
            <input type="text" name="prof"/>
            <h2><kbd>Enter Professor Name to Add:</kbd></h2>
            <h4><kbd> Name: </kbd><input type="text" name="add"/><kbd> Position</kbd> <input type="text" name="pos"/> 
            <input  class="btn btn-default btn-lg" type="submit" value="Update Roster" />
            </form>
  
      <h2><kbd>PROFESSORS:</kbd></h2>
    </body>
</html>
<?php
       
        $fire = $_POST["prof"];
        $add = $_POST["add"];
        $pos = $_POST["pos"];
        include "db.php";
        $quotes = array();
        $conn = getSQL();
        $sql = "SELECT * from quotes Right join professors on quotes.name=professors.position"; 
        $statement = $conn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        $found = 0;
        foreach ($records as $record) {
            
                //get quotes and authors
            //echo "<kbd> ".$record["name"]."</kbd>";
            $count = 1;
            array_push($quotes,array($record["name"]=>$record["position"]));
        }//foreach
        
       // echo "<kbd> ".$count."</kbd>";
        foreach($quotes as $quote){
            foreach($quote as $key=>$value){
                echo "<br><h2><kbd>".$key."</kbd><kbd> - ".$value."</kbd></h2>";
                if($key == $add){
                        //echo "<h1><kbd>:".$add." key:".$key."</kbd></h1>s";
                        $found =1;
                    }//end found 
                }//foreach
           }//foreach
        
        
        if(isset($_POST["prof"])){
            $sql = "DELETE FROM professors WHERE name='".$fire."'"; 
            $statement = $conn->prepare($sql); 
            $statement->execute(); 
        }//end delete prof
       
       
        //echo "<kbd> ".$count."</kbd>";
        if( !(empty($_POST["add"])) && !(empty($_POST["pos"])) && $found == 0){
            
                $sql = "INSERT INTO professors (prof_id, name, position) VALUES ('null', '".$add."', '".$pos."')"; 
                $statement = $conn->prepare($sql); 
                $statement->execute(); 
            
        }//end new prof

      
      
    
?>
    
