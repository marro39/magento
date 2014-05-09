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
			->setTemplate('page/3columns.phtml');
			
			/*
			$block=$this->getLayout()->createBlock('category.products');
			
			$this->getLayout()->getBlock('content')->appendBlock($block);
			$this->renderLayout();
			*/
			
		}
	}