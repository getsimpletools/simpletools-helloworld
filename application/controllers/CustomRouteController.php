<?php

    class CustomRouteController extends \Simpletools\Mvc\Controller
    {
        public function routeAction($id)
        {
        	$this->setViewProperty('id',$id);
        }
    }

?>