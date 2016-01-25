<?php
/**
 *
 * Rukhsar-CmsMenu - Magento Extension
 *
 * @copyright Copyright (c) 2016 Rukhsar Manzoor (http://www.rukhsar.me.uk/)
 * @author Rukhsar Manzoor - rukhsar.man@gmail.com
 *
 */
class Rukhsar_CmsMenu_Model_Mysql4_Cmsmenu extends Mage_Core_Model_Mysql4_Abstract
{

    protected function _construct()
    {
        $this->_init('rukhsar_cmsmenu/cmsmenu', 'id');
    }

}
