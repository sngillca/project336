
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>The Marauder's Map</title>
      <style type="text/css">
         body{
             text-align:center;
         }
         .b {
              border-radius: 65px;
              padding: 20px; 
              font-size: 3em;
              color:white;
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);

         }
         .centered {
             font-size: 3em;
             color:white;
             position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
             
         }
     </style>
         
     </head>
    <body>
        <?php include "menu.php";?>
        
    <img class="b" src="../img/maud.gif"  height="550" width="1200"></img>
    <div class="centered"><kbd><?php include "getquotes.php"; ?>
    
    </kbd></div>
        <script type="text/javascript" src="./mapmain.js"></script>

    </body>
</html>