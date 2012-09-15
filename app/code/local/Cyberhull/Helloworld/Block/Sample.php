<?php 
class Cyberhull_Helloworld_Block_Sample extends Mage_Core_Block_Template{
	protected function _toHtml(){
		
		return 'Hello magento from '.__FILE__;
		
	}
}