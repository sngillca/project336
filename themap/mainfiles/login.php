<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <style type="text/css">
            
        </style>
        
    </head>
    <body>
        <?php include "./menu.php"; ?>
        <kbd><h1>Alohomora</h1></kbd>
        
        
        <form method="post" action="hidden.php">
            <kbd>USERNAME:</kbd> <input type="text" id="user"/>
            <kbd>PASSWORD:</kbd> <input type="password" id="pass"/>
            
            <input  class="btn btn-default btn-lg" type="button" value="LOGIN" onClick="login()"/>
        </form>
        <kbd>TEST: username=nat password=cathat</kbd>
        
        <script type="text/javascript" src="./mapmain.js"></script>
    </body>
</html>