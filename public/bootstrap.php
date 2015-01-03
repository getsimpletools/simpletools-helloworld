<?php

	require_once(dirname(__FILE__)."/../vendor/autoload.php");

	$router = \Simpletools\Mvc\Router::settings(array(
        "applicationDir" 	=> dirname(__FILE__)."/../application",
        "customRoutes"		=> array(
        	"GET"	=> array(
        		'/custom/{id}'			=> "CustomRoute@route"
        	)
        )
    ));

    $router->dispatch();

?>