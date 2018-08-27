<?php

namespace Codealist\CategoryAttributes\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Catalog\Model\Category;
use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;

/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
    /**
     * @var EavSetupFactory
     */
    private $eavSetupFactory;

    /**
     *
     * @param EavSetupFactory $eavSetupFactory
     */
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        /** @var EavSetup $eavSetup */
        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        // Wysigyw Field
        $eavSetup->addAttribute(
            Category::ENTITY,
            'my_custom_wysiwyg',
            [
                'type' => 'text',
                'label' => 'My Custom Wysiwyg',
                'input' => 'textarea',
                'wysiwyg_enabled' => true,
                'required' => false,
                'sort_order' => 100,
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
                'group' => 'General Information',
            ]
        );

        // Text field
        $eavSetup->addAttribute(
            Category::ENTITY,
            'my_custom_text',
            [
                'type' => 'text',
                'label' => 'My Custom Text',
                'input' => 'text',
                'required' => false,
                'sort_order' => 90,
                'global' => ScopedAttributeInterface::SCOPE_GLOBAL,
                'group' => 'General Information',
            ]
        );

        $setup->endSetup();
    }
}