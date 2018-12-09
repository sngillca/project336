<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>The Marauder's Map</title>
         <meta charset="utf=8">
        <meta name="viewport" content="width=device-width, initial-scale=1" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
          h1{
                text-align: center;
               
                font-family: "Courier New", Courier, monospace;
            }
            body{
                background-color:#332239;
                font-family: "Courier New", Courier, monospace;
            }
               .cont {
                background-color: white;
                font-family: "Courier New", Courier, monospace;
                 
            }
          </style>
    </head>
    
    <?php include 'menu.php';?>
    <body>
        <div class="cont"> <h1>I solemnly swear <p><small>that I am up to no good</small></p></h1></div>
        <form>
             <br><br>
            <div class="col-sm-3"><h4><kbd>Search by first name:</kbd></h4> <input type="text" id="name"/></div>
           <div class="col-sm-3"><h4><kbd>Search by last name:</kbd></h4> <input type="text" id="lastName"/></div>
           <div class="col-sm-3"><h4><kbd>Search by Patronus:</kbd></h4> <input type="text" id="patronus"/></div>
           <div class="col-sm-3"><h4><kbd>Search by House:</kbd></h4>
           <select id="house" class="form-control">
              <option value="0">Select House</option>
              <option value="1">Gryffindor</option>
              <option value="2">Hufflepuff</option>
              <option value="3">Ravenclaw</option>
              <option value="4">Slytherin</option>
            </select>
            <br><br>
            </div>
            
            <input  class="btn btn-default btn-lg" type="button" value="Homenum Revelio" onClick="search()"/>
        </form>
        <br>
        <div id="myDIV"></div>
      
        <script type="text/javascript" src="./mapmain.js"></script>
    </body>
 
</html>