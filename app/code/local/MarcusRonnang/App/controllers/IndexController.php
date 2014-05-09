<?php
   
	class MarcusRonnang_App_IndexController extends Mage_Core_Controller_Front_Action{
		
		public function indexAction(){
			/*
			echo "Good";
			die();
			
			$this->loadLayout();
			$this->renderLayout();
			*/
			//$this->loadLayout('category.products');
			//$this->renderLayout();			
			
			
			/*
			$this->getLayout()->createBlock('root')->setTemplate('page/3columns.phtml');			
			//$this->getLayout()->getBlock('content')->append($rootBlock);
			
			$blockContent=$this->getLayout()->createBlock('content');
			//$rootBlock->append($blockContent);			
			//$this->getLayout()->getBlock('content')->append($blockContent);
			
			$this->renderLayout();
			*/
			$this->_redirect('about_us');
			//Mage::getBaseUrl()->
			
		}
	}