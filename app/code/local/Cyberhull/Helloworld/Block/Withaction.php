<?php
class Cyberhull_Helloworld_Block_Withaction extends Mage_Core_Block_Abstract{
	public function setText($text, $t1='')
    {
        $this->setData('text', $text.$t1);
        return $this;
    }

    public function getText()
    {
        return $this->getData('text');
    }

    public function addText($text, $before=false)
    {
        if ($before) {
            $this->setText($text.$this->getText());
        } else {
            $this->setText($this->getText().$text);
        }
    }

    protected function _toHtml()
    {
        if (!$this->_beforeToHtml()) {
            return '';
        }

        return $this->getText();
    }
    
    public function out(){
    	
        

        return 'kuku';
    }
	
}