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
			
			$rootBlock=$this->getLayout()->createBlock('root')->setTemplate('page/3columns.phtml');			
			//$this->getLayout()->getBlock('content')->append($rootBlock);
			
			$blockContent=$this->createBlock('content');
			$blockContent->append('category.products');
			
			$this->renderLayout();
			
			
		}
	}