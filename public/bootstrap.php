<?php

	require_once(dirname(__FILE__)."/../vendor/autoload.php");

	$router = \Simpletools\Mvc\Router::settings(array(
        "applicationDir" => dirname(__FILE__)."/../application"
    ));

    $router->dispatch();

?>