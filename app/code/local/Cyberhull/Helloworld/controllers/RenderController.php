<?php
class Cyberhull_Helloworld_RenderController extends Mage_Core_Controller_Front_Action {
	public function blockAction() {
		
		$this->getResponse()->setBody('Hello Magento!');
		
		//$this->loadLayout ();
		//$this->renderLayout ();
	}
	
	public function overrideAction() {
		//var_dump($this->getLayout()->createBlock('cyberhull_helloworld/sample'));
		
		$blockHtml = $this->getLayout()->createBlock('cyberhull_helloworld/sample')->toHtml();
	
		$this->getResponse()->setBody($blockHtml);
	
		
	}
	
	public function templateAction(){
		$blockHtml = $this->getLayout()
						  ->createBlock('core/template')
						  ->setTemplate('cyberhull_helloworld/random.phtml')
						  ->toHtml();
		
		
		$this->getResponse()->setBody($blockHtml);
	}
	
	public function layoutAction(){
		$this->loadlayout()->renderlayout();
	}
	
	public function handleAction(){
		$this->loadLayout('cool_handle')->renderLayout();
	}
	
	public function finalAction(){
		$this->loadLayout()->renderLayout();
	}
}
