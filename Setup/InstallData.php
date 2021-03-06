<?php

namespace AHT\Crud\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_postFactory;

	public function __construct(\AHT\Crud\Model\PostFactory $postFactory)
	{
		$this->_postFactory = $postFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$data = [
            [
                'name'         => 'How to Create SQL Setup Script in Magento 2',
                'url_key'       => '/hi',
                'image'   => '',
                'created_at'    => '',
                'status'        => 1
            ],
         
        ];
		$post = $this->_postFactory->create();
		$post->addData($data)->save();
	}
}
