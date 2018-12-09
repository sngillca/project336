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
            
            //shuffle quotes to emualte randomization
        shuffle($quotes);
        foreach($quotes as $quote){
            foreach($quote as $key=>$value){
                if($count == 0){
                    echo "<br><kbd><em>".$key."</kbd></h1> <h1><kbd>-".$value."</em></kbd>";
                    $count+=1;
                    
                }//if
            }//foreach
        }//foreach
     }//displayQuotes
    

    displayQuotes();
    
    
?>