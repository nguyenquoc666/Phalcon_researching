<?php
use Phalcon\Mvc\Controller;

class IndexController extends Controller{
	public function indexAction(){
		echo PHP_EOL;
		echo PHP_EOL;
		echo $this->tag->linkTo(
			"signup",
			"Sign Up Here!"
		);
	}
}