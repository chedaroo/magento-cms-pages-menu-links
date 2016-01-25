<?php

/**
 *
 * Rukhsar-CmsMenu - Magento Extension
 *
 * @copyright Copyright (c) 2016 Rukhsar Manzoor (http://www.rukhsar.me.uk/)
 * @author Rukhsar Manzoor - rukhsar.man@gmail.com
 *
 */


$installer = $this;

$installer->startSetup();

// cmsmenu table:
$table = $this->getTable('rukhsar_cmsmenu/cmsmenu');

// cms pages table:
$tableCmsPages = $this->getTable('cms/page');
Mage::log($tableCmsPages, null, 'rukhsar-cmsmenu-error.log', true);

// remove old foreign key:
$installer->run("ALTER TABLE {$table} DROP FOREIGN KEY `FK_cmsmenu_cms_page`;");
Mage::log("ALTER TABLE {$table} DROP FOREIGN KEY `FK_cmsmenu_cms_page`;", null, 'rukhsar-cmsmenu-error.log', true);

// add fixed foreign key:
$installer->run("ALTER TABLE {$table} ADD CONSTRAINT `FK_cmsmenu_cms_page` FOREIGN KEY (`cms_page_id`) REFERENCES {$tableCmsPages} (`page_id`);");
Mage::log("ALTER TABLE {$table} ADD CONSTRAINT `FK_cmsmenu_cms_page` FOREIGN KEY (`cms_page_id`) REFERENCES {$tableCmsPages} (`page_id`);", null, 'rukhsar-cmsmenu-error.log', true);

$installer->endSetup();
