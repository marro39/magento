<?php
   
	class MarcusRonnang_App_IndexController extends Mage_Core_Controller_Front_Action{
		
		public function indexAction(){
			/*
			echo "Good";
			die();
			
			$this->loadLayout();
			$this->renderLayout();
			*/
			$this->loadLayout();
			$this->getLayout()
			->getBlock('root')
			->setTemplate('page/1column.phtml');
			
			
			$block=$this->getLayout()->createBlock('category.products');
			
			
			$this->getLayout()->getBlock('content')->append($block);
			$this->renderLayout();
			
			
		}
	}