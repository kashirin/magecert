<?php
class Cyberhull_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {
	public function indexAction() {
		//echo Mage::getStoreConfig('some/random/one/two');die();
		$this->loadLayout ();
		$this->renderLayout ();
	}
	
	public function myAction() {
		echo 'my my my!';
	}
}