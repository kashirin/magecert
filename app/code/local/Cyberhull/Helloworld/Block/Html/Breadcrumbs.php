<?php
Class Cyberhull_Helloworld_Block_Html_Breadcrumbs extends
	Mage_Page_Block_Html_Breadcrumbs
	{
		protected function _construct(){
		$this->addCrumb( 'google link', array(
			'label'=>'Goole!',
			'title'=>'Go to the google',
			'link'=>'http://google.com',
		) );
			
		}
	}