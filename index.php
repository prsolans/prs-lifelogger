<?php 

        require("classes/AltoRouter.php"); 

        echo "1";

        $router = new AltoRouter();

        // map homepage using callable
        $router->map( 'GET', '/', function() {
            require("/views/home.php");
            echo "2";
        });

?>
