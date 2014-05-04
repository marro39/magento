<?php
class MarcusRonnang_Layout_Model_Observer extends Varien_Event_Observer{
		
	public function addItemsToTopmenuItems($observer) {
        $menu = $observer->getMenu();
        $tree = $menu->getTree();
        $action = Mage::app()->getFrontController()->getAction()->getFullActionName();

        $nodeId = 'some-node-id';
        $data = array(
            'name' => Mage::helper('[module]')->__('Title goes here'),
            'id' => $nodeId,
            'url' => Mage::getUrl('module/controller/action'),
            'is_active' => ($action == 'module_controller_action')
        );
        $node = new Varien_Data_Tree_Node($data, 'id', $tree, $menu);
        $menu->addChild($node);
        return $this;
    }
}
?>
