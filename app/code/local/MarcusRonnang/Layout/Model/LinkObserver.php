<?php
class MarcusRonnang_Layout_Model_LinkObserver extends Varien_Event_Observer{
		
	public function addToTopmenu(Varien_Event_Observer $observer)
    {
        //get the menu object: //Type Varien_Data_Tree_Node
    $menu = $observer->getMenu();
    //get the tree object in the menu //type Varien_Data_Tree
    $tree = $menu->getTree();
    //get current page handler
    $action = Mage::app()->getFrontController()->getAction()->getFullActionName();
    $brandNodeId = 'category-node-brand';
    //set the node id, label and url
    $data = array(
        'name' => Mage::helper('catalog')->__('Brands'),
        'id' => $brandNodeId,
        'url' => Mage::getUrl('brands'),
        'is_active' => ($action == 'brands')
    );
    //create a node object
    $brandNode = new Varien_Data_Tree_Node($data, 'id', $tree, $menu);
    //add the node to the menu
    $menu->addChild($brandNode);
    return $this;
}
?>
