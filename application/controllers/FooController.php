<?php

	use \Simpletools\Mvc\Model;
	use \Simpletools\Mvc\Controller;

    class FooController extends Controller
    {
        public function indexAction()
        {
        	$this->view()->bar = Model::of('Foo')->bar();
        }
    }
    
?>