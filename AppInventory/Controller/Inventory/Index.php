<?php

namespace AcheiPneus\AppInventory\Controller\Inventory;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use AcheiPneus\AppInventory\Helper\Data;
use AcheiPneus\AppInventory\Model\Inventory;
use Magento\Framework\App\Request\Http;

/**
 * Apos implementar o controller, rodar no termianl: "
 * php bin/magento cache:flush e depois php bin/magento setup:compile
 */
class Index extends Action
{
    protected $_helper;
    protected $_inventoryModel;
    protected $_request;

    public function __construct(
        Context $context,
        Inventory $inventoryModel,
        Data $helper,
        Http $request

    ) {
        parent::__construct($context);
        $this->_inventoryModel = $inventoryModel;
        $this->_request = $request;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        
    }
}
