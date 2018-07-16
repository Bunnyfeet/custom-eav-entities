<?php
/**
 * Created by PhpStorm.
 * User: mikko
 * Date: 16/07/2018
 * Time: 21.46
 */

namespace Bunnyfeet\CustomEavEntities\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /** @var EavSetup  */
    protected $eavSetup;
    public function __construct(
        EavSetup $eavSetup
    ) {
        $this->eavSetup = $eavSetup;
    }
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

    }
}