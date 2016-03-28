<?php 

        require("classes/AltoRouter.php"); 

        $router = new AltoRouter();

        // map homepage using callable
        $router->map( 'GET', '/', function() {
            require("/views/home.php");
        });

?>
