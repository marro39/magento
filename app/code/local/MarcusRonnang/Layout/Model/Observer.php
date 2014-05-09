<?php
class MarcusRonnang_Layout_Model_Observer extends Varien_Event_Observer{
		
	public function addToTopmenu(Varien_Event_Observer $observer)
	{
	    //Get whole menu
	    $menu = $observer->getMenu();
	    //Make a tree
	    $tree = $menu->getTree();
	    //Create a node and later insert it in the menu
	    $node = new Varien_Data_Tree_Node(array(
	            'name'   => 'Laptops',
	            'id'     => 'laptops',
	            'url'    => Mage::getUrl() . 'marcusronnang_layout_frontcontroller/', // point somewhere
	            /*'url'    => Mage::getUrl(), // point somewhere*/
	    ), 'id', $tree, $menu);	    
	    $menu->addChild($node);
	    
	    // Children menu items
	    $collection = Mage::getResourceModel('catalog/category_collection')
	            ->setStore(Mage::app()->getStore())
	            ->addIsActiveFilter()
	            ->addNameToResult()
	            ->setPageSize(3);
	    foreach ($collection as $category) {
	        $tree = $node->getTree();
	        $data = array(
	            'name'   => $category->getName(),
	            'id'     => 'category-node-'.$category->getId(),
	            'url'    => $category->getUrl(),
	        );
	        //$subNode = new Varien_Data_Tree_Node($data, 'id', $tree, $node);
	        //$node->addChild($subNode);
	    }
	}
}
?>
