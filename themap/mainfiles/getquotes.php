<?php

    include "db.php";
    
    function displayQuotes(){
        
        $quotes = array();
        $dbConn = getSQL(); 
        $sql = "SELECT * from quotes"; 
        $statement = $dbConn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll(); 
        foreach ($records as $record) {
            //get quotes and authors
            array_push($quotes,array($record["quotes"]=>$record["name"]));
            
        }//foreach
            
            //use flag variable
        $count = 0;
        $name;
            //shuffle quotes to emualte randomization
        shuffle($quotes);
        foreach($quotes as $quote){
            foreach($quote as $key=>$value){
                if($count == 0){
                    echo "<br><kbd>".$key."</kbd> <kbd><br><em>-".$value."</em></kbd>";
                    $name = $value;
                    $count+=1;
                    
                }//if
            }//foreach
        }//foreach
        
    
        $sql = 'SELECT COUNT(`id`) FROM `quotes` WHERE `name`="'.$name.'"'; 
        //echo "<br>SQL;:".$sql;
        $statement = $dbConn->prepare($sql); 
        $statement->execute(); 
        $records = $statement->fetchAll();
        
        
       
    
     $numOfqs;
      foreach ($records as $record) {
            //get quotes and authors
           $numOfqs = $record[0];
            
        }//foreach 
        echo "<br><kbd> ".$name."</kbd><kbd><em> has ".$numOfqs." quotes in this system</em></kbd>";
     }//displayQuotes

    displayQuotes();
    
    
?>