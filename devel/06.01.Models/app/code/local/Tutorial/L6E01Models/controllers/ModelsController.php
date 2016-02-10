<?php


class Tutorial_L6E01Models_ModelsController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->getResponse()->setBody("HELLO FROM ".__METHOD__);
    }

    public function layoutAction()
    {
        $this->loadLayout()->renderLayout();
    }

    public function storesAction()
    {
        // use Mage_Core_Model_Mysql4_Store_Collection <=> 'core/store_collection' || 'core/mysql4_store_collection'

        /**
         * @var $stores Mage_Core_Model_Mysql4_Store_Collection
         * @var $storeItem Mage_Core_Model_Store
         * @var $category Mage_Catalog_Model_Category
         */

        $stores = Mage::getResourceModel('core/store_collection');
//        $stores = Mage::app()->getStore()->getCollection();

        foreach ($stores as $storeItem)
        {
            echo "<h2>Store info: {$storeItem->getName()}:{$storeItem->getCode()}</h2><br/>";
            $category = Mage::getModel('catalog/category')
                                ->load( $storeItem->getRootCategoryId() );
            echo "<h2>Root category info: {$category->getName()}</h2><br/>";
            echo "<hr/>";
        }

    }

    public function pseudoOrphanCatsAction()
    {
        /**
         * @var $collection Mage_Catalog_Model_Resource_Category_Collection
         * @var $children Mage_Catalog_Model_Resource_Category_Collection
         * @var $category Mage_Catalog_Model_Category
         */
        $collection = Mage::getModel('catalog/category')->getCollection();
        $collection->addRootLevelFilter()->addNameToResult()->load(true, true);
//        $collection->addRootLevelFilter()->load(true, true);
//        Zend_Debug::dump(
//            $collection
//        );
        foreach ($collection as $category)
        {
            echo "<p><b>Cat data  </b>#{$category->getId()} :: {$category->getName()}, {$category->getParentId()}</p>";
//            $children = $category->getChildren();
//            $children = $category->getChildrenCategories();
//            $children = $category->getChildrenCategoriesWithInactive();
//            $this->printCategoryChildrenOpt($category);
            $this->printCategoryChildrenHardWay($category);
        }

    }

    protected function printCategoryChildrenOpt(Mage_Catalog_Model_Category $category)
    {
        /**
         * @var $child Mage_Catalog_Model_Category
         */
        $children = $category->getChildrenCategories();
        foreach ($children as $child)
        {
            echo "<p>&nbsp;&nbsp;&nbsp;<b>Child cat#{$child->getId()}&nbsp;</b>::&nbsp;{$child->getName()}</p>";
        }

    }

    protected function printCategoryChildrenHardWay(Mage_Catalog_Model_Category $category)
    {
        /**
         * @var $child Mage_Catalog_Model_Category
         * @var $catCollection Mage_Catalog_Model_Resource_Category_Collection
         */
        $childrenIds = $category->getChildren();
        echo "<p><b>&nbsp;&nbsp;Children Ids:&nbsp;</b>{$childrenIds}</p>";
        $catCollection = Mage::getModel('catalog/category')->getCollection();
        $catCollection->addIdFilter( explode(',',$childrenIds) )->addNameToResult()->load(true,true);

        foreach ($catCollection as $child)
        {
            echo "<p>&nbsp;&nbsp;&nbsp;<b>Child cat#{$child->getId()}&nbsp;</b>::&nbsp;{$child->getName()}</p>";
        }

    }

    public function orphanCatsAction()
    {
        /**
         * @var $collection Mage_Catalog_Model_Resource_Category_Collection
         * @var $category Mage_Catalog_Model_Category
         */
        $collection = Mage::getModel('catalog/category')->getCollection();
        $collection->addFieldToFilter('parent_id', '0' )
                    ->addNameToResult()
                    ->load(true, true);
//        Zend_Debug::dump(
//            $collection
//        );
        foreach ($collection as $category)
        {
            echo "<p><b>Cat data  </b>#{$category->getId()} :: {$category->getName()}, {$category->getParentId()}</p>";
        }

    }
}
