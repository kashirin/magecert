<?php
class Cyberhull_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {
	public function indexAction() {
		//echo 'Hello Index!';
		$this->loadLayout ();
		$this->renderLayout ();
	}
	
	public function myAction() {
		echo 'my my my!';
	}
}